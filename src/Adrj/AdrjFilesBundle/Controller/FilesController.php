<?php

namespace Adrj\AdrjFilesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Adrj\AdrjFilesBundle\Entity\FilesList;
use Adrj\AdrjFilesBundle\Entity\FilesTokens;
use Adrj\AdrjFilesBundle\Form\FilesTokenForm;

class FilesController extends Controller
{
    private function accessBase($token)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tokenId = $entityManager->getRepository('AdrjFilesBundle:FilesTokens')->findByToken($token);
        return $tokenId;
    }
    
    public function accessAction(Request $request)
    {
    // widok z textboxem do wpisania tokena
        $token = new FilesTokens();
        $tokenForm = $this->createForm(new FilesTokenForm(), $token);
        
        $tokenForm->handleRequest($request);

        if ( $tokenForm->isValid())
        {
            $tokenId = $this->accessBase($token->getToken());

            if ( $tokenId != NULL)
            {
                return $this->showAction($tokenId);
            }
            else
            {
                return $this->render('AdrjFilesBundle:Files:access.html.twig',array(
                    'tokenForm' => $tokenForm->createView(),
                    'message' => 'Nie znaleziono plikow powiazanych z danym tokenem' )); 
            }
        }

        return $this->render('AdrjFilesBundle:Files:access.html.twig',array(
            'tokenForm' => $tokenForm->createView(),
            'message' => 'Wprowadź \'public\', aby wylistować pliki publiczne' ));
    }
    
    public function accessApiAction($token)
    {
        $tokenId = $this->accessBase($token);
        return $this->showApiAction($tokenId);
    }

    private function showBase($tokenId)
    {
    // jeżeli nie podano parametru, zostanie zwrócona lista plików publicznych
        $entityManager = $this->getDoctrine()->getManager();
        $files = $entityManager->getRepository('AdrjFilesBundle:FilesList')->findByTokenId($tokenId);
        return $files;
    }
    
    public function showAction($tokenId = 1)
    {
        return $this->render('AdrjFilesBundle:Files:show.html.twig', array(
            'files' => $this->showBase($tokenId)));
    }
    
    public function showApiAction($tokenId = 1)
    {
        $i=0;
        $filesArray = array();
        $files = $this->showBase($tokenId);
        foreach ($files as $file)
        {
            $filesArray[$i] = $file->jsonSerializeFile();
            $i++;
        }
        return new JsonResponse($filesArray);
    }

    public function getAction($fileName)
    {
    // funkcja zwracająca odpowiedź z plikiem
    // TODO: zaimplementować bez konieczności podawania tokena w linku
        if ( $fileName != NULL)
        {
            $this->downloadFile($fileName);
        }
        else
        {
            return $this->redirect($this->generateUrl('files_page'));
        }
    }

    private function downloadFile($file) {
        //TODO: Poprawic pobieranie plikow
        $path = $this->get('kernel')->getRootDir().'/securedFiles/' . $file;

        if(true) {

            $response = new Response();
            $response->headers->set('Content-Description', 'File Transfer');
            $response->headers->set('Content-Type', 'application/octet-stream');
            $response->headers->set('Content-Disposition', 'attachment; filename='.basename($file));
            $response->headers->set('Content-Transfer-Encoding', 'binary');
            $response->headers->set('Expires', '0');
            $response->headers->set('Cache-Control', 'must-revalidate, post-check=0, pre-check=0');
            $response->headers->set('Pragma', 'public');
            $response->headers->set('Content-Length', filesize($path));
            ob_clean();
            flush();
            $response->setContent(readfile($path));
            $response->send();
            return $response;
        }

    }

    public function addAction()
    {
        $tokenForm = $this->createForm(new FilesTokenForm());

        return $this->render('AdrjFilesBundle:Files:access.html.twig',array(
            'tokenForm' => $tokenForm->createView(),
            'message' => 'Tu bedzie mozna dodawac swoje pliki' ));
    }
}
