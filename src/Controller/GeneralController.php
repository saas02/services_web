<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Clientes;

class GeneralController extends AbstractController
{
    /**
     * @Route("/", name="general_home")
     */
    public function index()
    {
        $session = new Session();        
        $result=[];
        $dominio = $_SERVER['HTTP_HOST'];        
        if($session->has("agency_name") && $session->has("agency_info")){            
            $result = json_decode($session->get("agency_info"), true);
            $renderFile = $result["nombre"]."/general/index.html.twig";
        }else{            
            $cliente = $this->getDoctrine()->getRepository(Clientes::class)->findOneBy(["dominio" => $dominio, "estado" => 1]);
            if(empty($cliente)){
                $renderFile = "error.html.twig";               
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
                $session->set("agency_name", $cliente->getNombre());
                $session->set("agency_info", json_encode($result));
                $renderFile = $result["nombre"]."/general/index.html.twig";
            }            
        }                
        
        return $this->render($renderFile, [ "result" => $result ]);
    }
    
    
    function convertObjectToArray($params, $objects, $type){
        $result = [];
        foreach($objects as $object){
            
        }
    }
}
