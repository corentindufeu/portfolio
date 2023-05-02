<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of WorkController
 *
 * @author coren
 */
class WorkController extends AbstractController {
    
    /**
     * @Route("/work", name="work")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/work_atelier2.html.twig");
    }
}