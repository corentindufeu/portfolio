<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AboutMeController
 *
 * @author coren
 */
class AboutMeController extends AbstractController {
    
    /**
     * @Route("/about_me", name="about_me")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/about_me.html.twig");
    }
}