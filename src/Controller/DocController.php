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

        $document = new MesDocs();
        $document = setName("test");
        $document = setCategorie("test");
        $document = setNumber(2);
        $document = setUserId(1);
        $document = setCreationDate(new \DateTime);
        $document = setUpdateDate(new \DateTime);
        
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DocController.php',
        ]);
    }
}
