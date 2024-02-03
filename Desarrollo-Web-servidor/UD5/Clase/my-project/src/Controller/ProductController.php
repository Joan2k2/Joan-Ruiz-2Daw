<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\FormProductsType;
use App\Entity\Producto;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{
   
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em=$em;
    }

    //muestra todos los Productos
#[Route('/products', name: 'all_products')]
public function show(EntityManagerInterface $entityManager): Response
{
    $product = $entityManager->getRepository(Producto::class)->findAll();
    

     return $this->render('templatemo_287_ancient/product.html.twig', [
         'resultados' => $product,
     ]);

  
}

//muestra un form para crear un nuevo Producto

//muestra los detalles de un Producto
#[Route('products/detail/{id}', name: 'one_Producto')]
public function detail(EntityManagerInterface $entityManager,int $id): Response
{
    $product=$entityManager->getRepository(Producto::class)->find($id);
    
    

     return $this->render('templatemo_287_ancient/detail.html.twig', [
         'resultados' => $product,
     ]);

 
}

 //elimina un Producto
 #[Route('/deleteProduct/{id}', name: 'Producto_delete')]
 public function deleteProducto(EntityManagerInterface $entityManager, int $id): Response
 {
    
     
     $product = $entityManager->getRepository(Producto::class)->find($id);

     if (!$product) {
         throw $this->createNotFoundException(
             'No product found for id '.$id
         );
     }

     $entityManager->remove($product);
     $entityManager->flush();

     return $this->redirectToRoute('all_products');
     
 }

 //muestra un form para crear un nuevo Producto
 #[Route('/insert', name: 'app_form')]
 public function indice(Request $request): Response
 {

     $product=new Producto();
     $form = $this->createForm(FormProductsType::class, $product);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()){
         $this->em->persist($product);
         $this->em->flush();
         return $this->redirectToRoute('all_products');
     }
     return $this->render('base.html.twig', [
         'form' => $form->createView()
     ]);
 }
 //muestra un form para actualizar un Producto
 //el parametro que pongas que tiene que ser la ruta (id) tiene que tener el mismo nombre que lo que le pasas por parametro
 #[Route('/update/{id}', name: 'update_form')]
 public function update(Request $request, EntityManagerInterface $entityManager, int $id): Response
 {

     $product=$entityManager->getRepository(Producto::class)->find($id);
     $form = $this->createForm(FormProductsType::class, $product);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()){
         $this->em->persist($product);
         $this->em->flush();
         return $this->redirectToRoute('all_products');
     }
     return $this->render('base.html.twig', [
         'form' => $form->createView()
     ]);
 }

}


