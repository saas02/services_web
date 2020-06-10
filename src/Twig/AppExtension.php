<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('file_exists', [$this, 'file_exists']),
            new TwigFunction('json_encode', [$this, 'json_encode']),
            new TwigFunction('json_decode', [$this, 'json_decode']),
        ];
    }

    public function file_exists($file)
    {        
        $container = new ContainerInterface();
        $ruta = $container->get('kernel')->getProjectDir();
        
        if(!file_exists($file)){
            $file = "http://127.0.0.1:8000/assets/images/default.jpg";
        }
        
        return $file;
    }
    
    public function json_encode($string)
    {        
        return json_encode($string);
    }
    
    public function json_decode($string)
    {
        
        return json_decode($string, true);
        
    }
}

