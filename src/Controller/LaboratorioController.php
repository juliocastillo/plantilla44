<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LaboratorioController extends AbstractController
{
    /**
     * @Route("/admin/laboratorio", name="laboratorio")
     */
    public function index()
    {
        return $this->render('laboratorio/index.html.twig', [
            'controller_name' => 'LaboratorioController',
        ]);
    }
}
