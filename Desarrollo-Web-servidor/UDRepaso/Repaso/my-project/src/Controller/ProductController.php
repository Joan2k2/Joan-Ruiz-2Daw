<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Productos;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\FormProductType;

class ProductController extends AbstractController
{


    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/', name: 'raiz')]
    public function index(): Response
    {
        return $this->render('templatemo_287_ancient/index.html.twig', []);
    }

    //muestra todos los Productoss
    #[Route('/productos', name: 'all_Productos')]
    public function show(EntityManagerInterface $entityManager): Response
    {
        $productos = $entityManager->getRepository(Productos::class)->findAll();


        return $this->render('templatemo_287_ancient/productos.html.twig', [
            'resultados' => $productos,
        ]);
    }

    //muestra un form para crear un nuevo Productos

    //muestra los detalles de un Productos
    #[Route('productos/detail/{id}', name: 'one_Productos')]
    public function detail(EntityManagerInterface $entityManager, int $id): Response
    {
        $productos = $entityManager->getRepository(Productos::class)->find($id);



        return $this->render('templatemo_287_ancient/detailproduct.html.twig', [
            'resultados' => $productos,
        ]);
    }

    //elimina un Productos
    #[Route('/products/delete/{id}', name: 'Productos_delete')]
    public function deleteProductos(EntityManagerInterface $entityManager, int $id): Response
    {


        $productos = $entityManager->getRepository(Productos::class)->find($id);

        if (!$productos) {
            throw $this->createNotFoundException(
                'No productos found for id ' . $id
            );
        }

        $entityManager->remove($productos);
        $entityManager->flush();

        return $this->redirectToRoute('all_Productos');
    }

    //muestra un form para crear un nuevo Productos
    #[Route('/insert', name: 'app_form')]
    public function indice(Request $request): Response
    {

        $productos = new Productos();
        $form = $this->createForm(FormProductType::class, $productos);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($productos);
            $this->em->flush();
            return $this->redirectToRoute('all_Productos');
        }
        return $this->render('base.html.twig', [
            'form' => $form->createView()
        ]);
    }
    //muestra un form para actualizar un Productos
    //el parametro que pongas que tiene que ser la ruta (id) tiene que tener el mismo nombre que lo que le pasas por parametro
    #[Route('/update/{id}', name: 'update_form')]
    public function update(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {

        $productos = $entityManager->getRepository(Productos::class)->find($id);
        $form = $this->createForm(FormProductType::class, $productos);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($productos);
            $this->em->flush();
            return $this->redirectToRoute('all_Productos');
        }
        return $this->render('base.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
