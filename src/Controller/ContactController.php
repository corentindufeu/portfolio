<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author coren
 */
class ContactController extends AbstractController {
    
    /**
     * @Route("/contact", name="contact")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/contact.html.twig");
    }
}