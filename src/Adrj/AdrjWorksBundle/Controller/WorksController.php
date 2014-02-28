<?php

namespace Adrj\AdrjWorksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class WorksController extends Controller
{
    public function worksAction()
    {
    // Akcja generująca linki do poszczególnych kategorii
        
        return $this->render('AdrjWorksBundle:Works:works.html.twig');
    }
    
    public function worksApiAction()
    {      
        return new JsonResponse("worksApi - lista kategorii");
    }

    private function addCategoryName($worksList)
    {
    // Przekombinowana metoda pomocnicza dodająca nazwę kategorii do rekordu z pracą
    // Albo znaleźć sposób na połączenie tabel, albo stworzyć jedną tabelę
        $entityManager = $this->getDoctrine()->getManager();
        $categoriesList = $entityManager->getRepository('AdrjWorksBundle:WorksCategories')->findAll();
        foreach( $worksList as $work)
        {
            $work->setCategoryId($categoriesList[$work->getCategoryId()-1]->getName());
        }
        return $worksList;
    }
    
    private function listBase($category)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $worksList = $entityManager->getRepository('AdrjWorksBundle:WorksList');
        return $worksList;
    }

    public function listAction($category)
    {
    // Akcja listująca prace z danej kategorii (graphics, programs, websites, all)
        $categoryName = NULL;
        $worksList = $this->listBase($category);

        if ($category == 'all')
        {
            $worksList = $worksList->findAll();
            $categoryName = 'Wszystko';
            //$worksList = $worksList->getAllWorks();
        }
        else
        {
            // Zwraca listę prac dla wybranej kategorii
            $worksList = $worksList->getWorksByCategory($category);
            $categoryName = $category;
        }

        // TODO: Przekombinowane, trzeba uprościć
        $worksList = $this->addCategoryName($worksList);
        return $this->render('AdrjWorksBundle:Works:list.html.twig', array(
            'works' => $worksList,
            'categoryName' => $categoryName
            ));
    }
    
    public function listApiAction($category)
    {
        $i=0;
        $worksArray = array();
        $worksList = $this->listBase($category);
        
        if ($category == 'all'){ $worksList = $worksList->findAll();}
        else{ $worksList = $worksList->getWorksByCategory($category);}
        
        foreach ($worksList as $work)
        {
            $worksArray[$i] = $work->jsonSerializeWork();
            $i++;
        }
        return new JsonResponse($worksArray);
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
    
    public function showApiAction($category,$id_name)
    {
        return new JsonResponse('nie bangla');  
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
    // Akcja zwracająca widok dla szczegółów strony internetowej

        return $this->render('AdrjWorksBundle:Works:show.website.html.twig');
    }

}
