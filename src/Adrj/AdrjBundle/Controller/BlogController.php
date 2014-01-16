<?php

namespace Adrj\AdrjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function blogAction()
    {
    // Akcja zwracająca listę wpisów na blogu

        return $this->render('AdrjBundle:Blog:blog.html.twig');
    }

    public function showAction($id)
    {
    // Zwraca widok szczegółowy wpisu o podanym id

        return $this->render('AdrjBundle:Blog:show.html.twig');
    }

}
