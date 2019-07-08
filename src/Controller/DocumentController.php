<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DocumentController extends AbstractController
{
    /**
     * @Route("/document", name="document")
     */
    public function document()
    {
        //$entityManager = $this->getDoctrine()->getManager();

        //$document = new Documents();
       // $document->setName('name1');
       // $document->setCategorie('name1');
       // $document->setNumber('name1');
       // $document->setUserId('name1');
       // $document->setCreationDate('name1');
       // $document->setUpdateDate('name1');

        //$entityManager->persist($document);
       // $entityManager->flush();

        //return new Response('test ok '.$document->getId());


        return $this->json([
         'message' => 'Welcome to your new controller!',
         'path' => 'src/Controller/DocumentController.php',
        ]);
    }
}
