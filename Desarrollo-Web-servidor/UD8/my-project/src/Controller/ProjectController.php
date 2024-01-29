<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Project;

class ProjectController extends AbstractController
{
    #[Route('/project', name: 'app_project')]
    public function index(ManagerRegistry $doctrine): JsonResponse
    {
        $products = $doctrine
        ->getRepository(Project::class)
        ->FindALL();

        $data = [];

        foreach ($products as $product)
        $data[] = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
        ];

        return $this->json($data);
    }
}
