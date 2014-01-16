<?php

namespace Adrj\AdrjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    // Akcja zrwacająca widok strony głównej
        return $this->render('AdrjBundle:Default:index.html.twig');
    }
}
