<?php

namespace Adrj\AdrjWorksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorksController extends Controller
{
    public function worksAction()
    {
    // Akcja generująca linki do poszczególnych kategorii
        
        return $this->render('AdrjWorksBundle:Works:works.html.twig');
    }

    public function listAction($category)
    {
    // Akcja listująca prace z danej kategorii (graphics, programs, websites, all)
        $entityManager = $this->getDoctrine()->getManager();
        $worksList = $entityManager->getRepository('AdrjWorksBundle:WorksList');

        if ($category == 'all')
        {
            $worksList = $worksList->findAll();
        }
        else
        {
            // Zwraca listę prac dla wybranej kategorii
            // Prawdopodobnie użycie JOIN dla WorksCategories i WorksList
        }

        return $this->render('AdrjWorksBundle:Works:list.html.twig');
    }

    public function showAction($category,$id_name)
    {
    // Akcja zwracający widok szczegółów dla elementu z podanej kategorii i wybranym id-name
        if ( $category == 'graphics' )
        {
            return $this->graphicsAction($id_name);
        }
        elseif ( $category == 'programs')
        {
            return $this->programAction($id_name);
        }
        elseif ( $category == 'websites' )
        {
            return $this->websiteAction($id_name);
        }
        
        //return $this->render('AdrjWorksBundle:Works:show.html.twig');
    }

    public function programAction($id_name)
    {
    // Akcja zwracająca widok dla szczegółów programu       

        return $this->render('AdrjWorksBundle:Works:show.program.html.twig');
    }

    public function graphicsAction($id_name)
    {
    // Akcja zwracająca widok dla szczegółów grafiki

        return $this->render('AdrjWorksBundle:Works:show.graphics.html.twig');    
    }

    public function websiteAction($id_name)
    {
    // Akcja zwracająca widok dla szczegółów strony głównej

        return $this->render('AdrjWorksBundle:Works:show.website.html.twig');
    }

}
