<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProgramController extends AbstractController
{
    #[Route('/program/{page}', requirements: ['page' => '\d+'], methods: ['GET'], name: 'program_show')]
    public function show(int $page): Response
    {
        return $this->render('program/show.html.twig', ['page' => $page]);
    }
    #[Route('/program', name: 'program_index')]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
        ]);
    }
}
