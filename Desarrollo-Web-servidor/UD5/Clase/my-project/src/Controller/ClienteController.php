<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\FormularioType;
use App\Entity\Cliente;
use App\Entity\Dept;
use App\Entity\EMP;
use app\Entity\User;
use Doctrine\ORM\EntityManagerInterface;


class ClienteController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em=$em;
    }

//muestra todos los clientes
#[Route('/cliente', name: 'all_cliente')]
public function show(EntityManagerInterface $entityManager): Response
{
    $product = $entityManager->getRepository(Cliente::class)->findAll();
    

     return $this->render('templatemo_287_ancient/cliente.html.twig', [
         'resultados' => $product,
     ]);

    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
}

//muestra un form para crear un nuevo cliente



}



?>