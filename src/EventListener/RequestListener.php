<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpFoundation\Session\Session;

class RequestListener
{
    public function onKernelRequest(RequestEvent $event)
    {
        
        $session = new Session();
        $session->start();
        if (!$event->isMasterRequest()) {
            // don't do anything if it's not the master request
            return;
        }

        // ...
    }
}

