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
     * @Route("/atelier2", name="work")
     * @return Response
     */
    public function work(): Response {
        return $this->render("pages/work_atelier2.html.twig");
    }

    /**
     * @Route("/mp3Dowload", name="work2")
     * @return Response
     */
    public function work2(): Response {
        return $this->render("pages/work_mp3Dowload.html.twig");
    }
}