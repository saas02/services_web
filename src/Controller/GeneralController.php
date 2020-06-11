<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Clientes;
use App\Entity\Producto;
use Symfony\Component\DependencyInjection\ContainerInterface;


class GeneralController extends AbstractController
{
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
            $clientes = $this->getDoctrine()->getRepository(Clientes::class)->findBy(['dominio' => $dominio]);
        }
        if(empty($clientes)){
            $renderFile = "error.html.twig";               
        }else{
            
            foreach($clientes as $key => $cliente){
                if($key > 0){
                    $result['aliados'][$key] = [
                        "id" => $cliente->getId(),
                        "nombre" => $cliente->getNombre(),
                        "informacion" => $cliente->getInformacion(),
                        "fotos" => file_exists($route.'//public//assets//images//'.$cliente->getFotos()) ? $cliente->getFotos() : 'default.jpg',
                        "parametros" => $cliente->getParametros(),                                   
                    ];
                }else{
                    $result = [
                        "id" => $cliente->getId(),
                        "nombre" => $cliente->getNombre(),
                        "direccion" => $cliente->getDireccion(),
                        "telefono" => $cliente->getTelefono(),
                        "whatsapp" => $cliente->getWhatsapp(),
                        "facebook" => $cliente->getFacebook(),
                        "dominio" => $cliente->getDominio(),
                        "parametros" => $cliente->getParametros(),                
                    ];
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
                    "fotos" => file_exists($route.'//public//assets//images//'.$producto->getFotos()) ? $producto->getFotos() : 'default.jpg',
                    "in_home" => $producto->getInHome(),
                    "in_promo" => $producto->getInPromo(),
                ];
            }            
            $session->set("agency_name", $cliente->getNombre());
            $session->set("agency_info", json_encode($result));
            $renderFile = $result["nombre"]."/general/index.html.twig";
        }            
                        
        
        return $this->render($renderFile, [ "result" => $result ]);
    }
    
    
    function convertObjectToArray($params, $objects, $type){
        $result = [];
        foreach($objects as $object){
            
        }
    }
}
