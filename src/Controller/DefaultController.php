<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'AUTH0_DOMAIN' => getenv('AUTH0_DOMAIN'),
            'AUTH0_CLIENT_ID' => getenv('AUTH0_CLIENT_ID')
        ]);
    }

//    /**
//     * @Route("/api/auth/callback", name="authCallback")
//     */
//    public function callback()
//    {
//        return $this->render('default/index.html.twig', [
//            'controller_name' => 'DefaultController',
//            'AUTH0_DOMAIN' => getenv('AUTH0_DOMAIN'),
//            'AUTH0_CLIENT_ID' => getenv('AUTH0_CLIENT_ID')
//        ]);
//    }
}
