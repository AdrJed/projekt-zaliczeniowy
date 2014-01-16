<?php

namespace Adrj\AdrjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilesController extends Controller
{
    public function accessAction()
    {
    // widok z textboxem do wpisania tokena
        
        return $this->render('AdrjBundle:Files:access.html.twig');
    }

    public function showAction($token)
    {
    // jeżeli podano parametr "public", zostanie zwrócona lista plików publicznych
        if ($token == "public")
        {
            
        }   
        else
        {
            
        } 

        return $this->render('AdrjBundle:Files:show.html.twig');
    }


}
