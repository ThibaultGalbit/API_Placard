<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function user()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setName('Thibault');

        return $this->json($user);

       
    }
}
