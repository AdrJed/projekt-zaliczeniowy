<?php

namespace Adrj\AdrjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorksController extends Controller
{
    public function worksAction()
    {
    // Akcja generująca linki do poszczególnych kategorii
        
        return $this->render('AdrjBundle:Works:works.html.twig');
    }

    public function listAction($category)
    {
    // Akcja listująca prace z danej kategorii (graphics, programs, websites, all)
        if ($category == 'all')
        {
            
        }
        else
        {
            
        }

        return $this->render('AdrjBundle:Works:list.html.twig');
    }

    public function showAction($category,$id_name)
    {
    // Akcja zwracający widok szczegółów dla elementu z podanej kategorii i wybranym id-name
        
        return $this->render('AdrjBundle:Works:show.html.twig');
    }

}
