<?php

namespace Adrj\AdrjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function blogAction()
    {
    // Akcja zwracająca listę wpisów na blogu
        $entityManager = $this->getDoctrine()->getManager();
        $posts = $entityManager->getRepository('AdrjBundle:BlogPosts')->getActivePosts(); 

        return $this->render('AdrjBundle:Blog:blog.html.twig', array(
            'posts' => $posts));
    }

    public function showAction($id)
    {
    // Zwraca widok szczegółowy wpisu o podanym id
        $entityManager = $this->getDoctrine()->getManager();
        $post = $entityManager->getRepository('AdrjBundle:BlogPosts')->getActivePostById($id);  

        return $this->render('AdrjBundle:Blog:show.html.twig', array( 
            'post' => $post[0]));
    }

}
