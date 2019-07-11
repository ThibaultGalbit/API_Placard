<?php

namespace App\Controller;

use App\Entity\Documents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class DocumentController extends AbstractController
{
    /**
     * @Route("/document", name="document")
     */
    public function document()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $document = new Documents();
        $document->setName('name1');
        $document->setCategorie('name1');
        $document->setNumber(45);
        $document->setUserId(1);
        $document->setCreationDate(new \DateTime);
        $document->setUpdateDate(new \DateTime);

        $entityManager->persist($document);
        $entityManager->flush();

       return $this->json($document);

    }
}
