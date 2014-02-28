<?php

namespace Adrj\AdrjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
    // Akcja zwracająca widok strony głównej
        return $this->render('AdrjBundle:Default:index.html.twig');
    }
    
    public function apiInfoAction()
    {
    // HTML z informacją o dostępnych funkcjach api
        return $this->render('AdrjBundle:Default:apiinfo.html.twig');
    }

    public function loginAction(Request $request)
    {
    // Akcja zwracająca widok formularza do logowania
        $session = $request->getSession();

        if ( $request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
        {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        else
        {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('AdrjBundle:Security:login.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME), 
            'error' => $error));
    }
}
