<?php

namespace App\Controller;

use App\Entity\MesDocs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DocController extends AbstractController
{
    /**
     * @Route("/doc", name="doc")
     */
    public function doc()
    {

        $entityManager = $this->getDoctrine()->getManager();

        $document = new MesDocs();
        $document->setName("test");
        $document->setCategorie("test");
        $document->setNumber(2);
        $document->setUserId(null);
        $document->setCreationDate(new \DateTime);
        $document->setUpdateDate(new \DateTime);

       // $entityManager->persist($document);
       // $entityManager->flush();
 
  
        return $this->json($document);
    }
}
