<?php

namespace Adrj\AdrjFilesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilesController extends Controller
{
    public function accessAction()
    {
    // widok z textboxem do wpisania tokena
        
        return $this->render('AdrjFilesBundle:Files:access.html.twig');
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

        return $this->render('AdrjFilesBundle:Files:show.html.twig');
    }


}
