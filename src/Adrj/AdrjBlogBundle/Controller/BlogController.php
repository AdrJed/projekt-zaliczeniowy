<?php

namespace Adrj\AdrjBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Adrj\AdrjBlogBundle\Entity\BlogPosts;
use Adrj\AdrjBlogBundle\Form\BlogPostForm;

class BlogController extends Controller
{
    public function blogAction()
    {
    // Akcja zwracająca listę wpisów na blogu
        $entityManager = $this->getDoctrine()->getManager();
        $posts = $entityManager->getRepository('AdrjBlogBundle:BlogPosts')->getActivePosts(); 

        return $this->render('AdrjBlogBundle:Blog:blog.html.twig', array(
            'posts' => $posts));
    }

    public function showAction($id)
    {
    // Zwraca widok szczegółowy wpisu o podanym id
        $entityManager = $this->getDoctrine()->getManager();
        $post = $entityManager->getRepository('AdrjBlogBundle:BlogPosts')->getActivePostById($id);  

        return $this->render('AdrjBlogBundle:Blog:show.html.twig', array( 
            'post' => $post[0]));
    }

    public function editAction($id, Request $request)
    {
    // Edytuje post z podanym id
    // TODO: Dodać autoryzację akcji
        $entityManager = $this->getDoctrine()->getManager();
        $post =  $entityManager->getRepository('AdrjBlogBundle:BlogPosts')->find($id);

        if ( $post != NULL )
        {
            $form = $this->createForm(new BlogPostForm(), $post);        
            $form->handleRequest($request);
            
            if ( $form->isValid() )              
            {
                $post->setEditTime(new \DateTime());
                $entityManager->persist($post);
                $entityManager->flush();
                return $this->redirect($this->generateUrl('blog_page'));
            }

            return $this->render('AdrjBlogBundle:Blog:edit.html.twig', array(
                'form' => $form->createView() ));
        }
        else
        {
            return $this->render('AdrjBlogBundle:Blog:edit.html.twig', array(
                'form' => NULL,
                'notfound' => 'Nie znaleziono wpisu o podanym id'));
        }
    }

    public function addAction(Request $request)
    {
    // Dodaje nowy wpis
    // TODO: Dodać autoryzację akcji
        $post = new BlogPosts();
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(new BlogPostForm(), $post );
        $form->handleRequest($request);

        if ( $form->isValid() )
        {
            $post = $form->getData();
            $post->setCreateTime(new \DateTime());
            $entityManager->persist($post);
            $entityManager->flush();
            return $this->redirect($this->generateUrl('blog_page'));
        }
        else
        {
        }

        return $this->render('AdrjBlogBundle:Blog:add.html.twig', array(
            'form' => $form->createView() ));
    }

}
