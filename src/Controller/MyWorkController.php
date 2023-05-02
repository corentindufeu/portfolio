<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of MyWorkController
 *
 * @author coren
 */
class MyWorkController extends AbstractController {
    
    /**
     * @Route("/my_works", name="my_works")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/my_works.html.twig");
    }
}