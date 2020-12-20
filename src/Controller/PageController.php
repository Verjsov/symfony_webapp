<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', $this->getPageContent());
    }

    /**
     * @Route("/about", name="about_page")
     */
    public function about(): Response
    {
        return $this->render('page/about.html.twig', $this->getPageContent());
    }

    /**
     * @return array
     */
    private function getPageContent(): array
    {
        return [
            'controller_name' => PageController::class,
            'page_name' => __METHOD__
        ];
    }
}
