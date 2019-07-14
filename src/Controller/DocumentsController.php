<?php

namespace App\Controller;

use App\Entity\DocumentTest;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DocumentsController extends AbstractController
{
    /**
     * @Route("/documents", name="documents")
     */
    public function documents()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(array('id' => 1));
        if(!$user){
            return new Response('userId doesnt exist');
        }

        $document = new DocumentTest();
        $document->setName('test1');
        $document->setCategorie('test1');
        $document->setNumber(55);
        $document->setUserId($user);
        $document->setCreationDate(new \DateTime);
        $document->setUpdateDate(new \DateTime);


       // $entityManager->persist($document);
        //$entityManager->flush();

        return $this->json($document);
    }
    

}
