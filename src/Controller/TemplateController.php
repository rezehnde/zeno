<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig', [
            'number' => $number,
        ]);
    }
}