<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Clientes;
use App\Entity\Producto;
use App\Entity\RedesNotificaciones;
use Symfony\Component\DependencyInjection\ContainerInterface;


class GeneralController extends AbstractController
{
    
    public function __construct(\Swift_Mailer $mailer) {        
        $this->mailer = $mailer;
        $this->notifyClics = 10;
    }
    
    /**
     * @Route("/", name="general_home")
     */
    public function index(ContainerInterface $container)
    {
        $session = new Session();
        $route = $container->get('kernel')->getProjectDir();
        $result=[];
        $dominio = $_SERVER['HTTP_HOST'];        
        
        $clientes = $this->getDoctrine()->getRepository(Clientes::class)->findAllInfoClient($dominio);
        if(empty($clientes)){
            $clientes = $this->getDoctrine()->getRepository(Clientes::class)->findBy(['dominio' => $dominio, 'estado' => 1]);
        }
        if(empty($clientes)){
            $renderFile = "error.html.twig";               
        }else{
            $folder = '';
            foreach($clientes as $key => $cliente){                
                if($key > 0){                    
                    $result['aliados'][$key] = [
                        "id" => $cliente->getId(),
                        "nombre" => $cliente->getNombre(),
                        "informacion" => $cliente->getInformacion(),
                        "fotos" => file_exists($route.'//public//assets//'.$folder.'//images//'.$cliente->getFotos()) ? $cliente->getFotos() : 'default.jpg',
                        "parametros" => $cliente->getParametros(),                                   
                    ];
                }else{
                    $folder = $cliente->getFolder();
                    $result = [
                        "id" => $cliente->getId(),
                        "nombre" => $cliente->getNombre(),
                        "direccion" => $cliente->getDireccion(),
                        "telefono" => $cliente->getTelefono(),
                        "whatsapp" => $cliente->getWhatsapp(),
                        "facebook" => $cliente->getFacebook(),
                        "dominio" => $cliente->getDominio(),
                        "parametros" => $cliente->getParametros(),
                        "folder" => $folder,
                        "notificaciones" => []
                    ];
                    
                    if(!empty($cliente->getWhatsapp())){
                        $result['notificaciones']['whatsapp'] = $this->encrypt($cliente->getDominio().'-whatsapp');
                    }
                    
                    if(!empty($cliente->getFacebook())){
                        $result['notificaciones']['facebook'] = $this->encrypt($cliente->getDominio().'-facebook');
                    }
                }            
            }
            
            $productos = $this->getDoctrine()->getRepository(Producto::class)->findBy(['id_cliente' => $result['id'], 'estado' => 1]); 
            
            foreach($productos as $key => $producto){
                $result['productos'][$key] = [
                    "id" => $producto->getId(),
                    "codigo" => $producto->getCodigo(),
                    "nombre" => $producto->getNombre(),
                    "descripcion" => $producto->getDescripcion(),
                    "precio" => $producto->getPrecio(),
                    "fotos" => file_exists($route.'//public//assets//'.$folder.'//images//'.$producto->getFotos()) ? $producto->getFotos() : 'default.jpg',
                    "in_home" => $producto->getInHome(),
                    "in_promo" => $producto->getInPromo(),
                ];
            } 
            
            $session->set("agency_name", $cliente->getNombre());
            $session->set("agency_info", json_encode($result));
            $renderFile = $folder."/general/index.html.twig";
        }            
        
                
        return $this->render($renderFile, [ "result" => $result ]);
    }
    
    /**
     * @Route("/networks/notify/{id}", methods={"GET"}, name="notify")
     */
    public function networskNotificacionsAction(string $id)
    {        
                
        $request = Request::createFromGlobals();                   
        if($request->isXmlHttpRequest()) {
            $dominio = explode('-', $this->decrypt($id));        
            $entityManager = $this->getDoctrine()->getManager();        
            $notificaciones = $this->getDoctrine()->getRepository(RedesNotificaciones::class)->findDayNetworkNotificacion($dominio[0]);
            if(isset($dominio[1])){
                $parametros = [];
                $total = 0;

                if($dominio[1] == 'whatsapp'){
                    $parametros['whatsapp'] = 1;
                    ++$total;
                }
                if($dominio[1] == 'facebook'){
                    $parametros['facebook'] = 1;
                    ++$total;
                }

                if(empty($notificaciones)){
                    $cliente = $this->getDoctrine()->getRepository(Clientes::class)->findBy(['dominio' => $dominio[0]]);                
                    try{
                        $RedesNotificaciones = new RedesNotificaciones();
                        $RedesNotificaciones->setIdCliente($cliente[0]->getId());
                        $RedesNotificaciones->setParametros(json_encode($parametros));
                        $RedesNotificaciones->setTotal($total);
                        $RedesNotificaciones->setFecha(new \DateTime());

                        $entityManager->persist($RedesNotificaciones);                
                        $entityManager->flush();
                        $message = 'success';
                        $code = 200;
                        if($total > $this->notifyClics){
                            $emails = ["saas02@gmail.com", "sergio.amaya@aviatur.com"];
                            $this->sendEmail($cliente[0]->getId(), $total, $emails);
                        }                         
                    }catch(\Exception $e){
                        $message = $e->getMessage();
                        $code = 500;
                    }                            

                }else{
                    try{                     
                        $total = $notificaciones[0]->getTotal() + $total;
                        $parameters = json_decode($notificaciones[0]->getParametros(), true);

                        foreach($parameters as $k => $v) {
                            if(array_key_exists($k, $parametros)) {
                               $parametros[$k] += $v;
                            } else {
                               $parametros[$k] = $v; 
                            }
                        }
                        $notificaciones[0]->setParametros(json_encode($parametros));
                        $notificaciones[0]->setTotal($total);
                        $notificaciones[0]->setFecha(new \DateTime());
                        $entityManager->persist($notificaciones[0]);                
                        $entityManager->flush();
                        $message = 'success';
                        $code = 200;    
                        if($total > $this->notifyClics){
                            $emails = ["saas02@gmail.com", "sergio.amaya@aviatur.com"];
                            $this->sendEmail($notificaciones[0]->getIdCliente(), $total, $emails);
                        }                        
                    }catch(\Exception $e){
                        $message = $e->getMessage();
                        $code = 500;
                    }                
                }            
            }else{
                $message = "Network not configured";
                $code = 500;
            }
        }else{            
            $renderFile = "error.html.twig";   
            return $this->render($renderFile, [ ]);
        }
        
        
        $result = ["code" => $code, "message" => $message];
        return new JsonResponse($result);  
    }
    
    public function sendEmail($clienteId, $total, $emails){
        $cliente = $this->getDoctrine()->getRepository(Clientes::class)->findBy(['id' => $clienteId]);
        
        $message = (new \Swift_Message('Adwords Email '.$cliente[0]->getNombre()))
            ->setFrom('serviceswebsaas@gmail.com')
            ->setTo($emails)
            ->setBody(
                $this->renderView('email.html.twig',
                [
                    'cliente' => $cliente[0],
                    'total' => $total
                ]
            ),'text/html');        
        try{
            $this->mailer->send($message);
        }catch(\Swift_TransportException $e){
            return var_dump($e);die;
        }
                
    }
    
    public function encrypt($string)
    {
        return $this->encrypt_decrypt('encrypt', $string);
    }
    
    public function decrypt($string)
    {
        return $this->encrypt_decrypt('decrypt', $string);
    }
    
    function encrypt_decrypt($action, $string){
        /* =================================================
         * ENCRYPTION-DECRYPTION
         * =================================================
         * ENCRYPTION: encrypt_decrypt('encrypt', $string);
         * DECRYPTION: encrypt_decrypt('decrypt', $string) ;
         */
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'WS-SERVICE-KEY';
        $secret_iv = 'WS-SERVICE-VALUE';
        // hash
        $key = hash('sha256', $secret_key);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ($action == 'encrypt') {
            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
        } else {
            if ($action == 'decrypt') {
                $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            }
        }
        return $output;
    }
    
    
    function convertObjectToArray($params, $objects, $type){
        $result = [];
        foreach($objects as $object){
            
        }
    }
}
