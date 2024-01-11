<?php

namespace App\Controller;
use App\Core\Request;
use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{

    	private $em;
        public function __construct(EntityManagerInterface $em){

            $this->em=$em;

        }

    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/product/new', name: 'create_product')]
    public function createProduct(EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $product->setName('Davit');
        $product->setPrice(0);
        $product->setDescription('Im free');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }

    #[Route('/product/{id}', name: 'product_show')]
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            return new Response('No hay un producto con esta id '. $id);
        }

        return new Response('Check out this great product: '.$product->getName());

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }

    #[Route('/product/edit/{id}', name: 'product_edit')]
    public function update(EntityManagerInterface $entityManager, int $id): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $product->setName('Demonio pelirrojo!');
        $entityManager->flush();

        return $this->redirectToRoute('product_show', [
            'id' => $product->getId()
        ]);
    }

    #[Route('/product/delete/{id}', name: 'product_delete')]
    public function delete(EntityManagerInterface $entityManager, int $id): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            return new Response('No hay un producto con esta id delete '. $id);
        }
        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('product_show', [
            'id' => $id
        ]);
    }


    #[Route('/', name: 'app_home')]
    public function home(Request $request): Response
    {

        $product= new Product();
        $form=$this->createForm(ProductType::class,$product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $this->em->persist($product);
            $this->em->flush();
            return $this->redirectToRoute('app_Product');

        }

        return $this->render('base.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
