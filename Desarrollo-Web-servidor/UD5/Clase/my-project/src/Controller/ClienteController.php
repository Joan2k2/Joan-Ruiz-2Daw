<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\FormInsertType;
use App\Entity\Cliente;
use Doctrine\ORM\EntityManagerInterface;


class ClienteController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em=$em;
    }

    #[Route('/', name: 'raiz')]
    public function index(): Response
    {
        return $this->render('templatemo_287_ancient/index.html.twig', [

        ]);
    }

//muestra todos los clientes
#[Route('/clients/{page}', name: 'all_clients')]
public function show(EntityManagerInterface $entityManager,$page=1)
{
    $clientRepository = $this->em->getRepository(CLIENTE::class);

        $tareasPaginas = 5;

        $offset = ($page - 1) * $tareasPaginas;
       

        $totalTask = count($clientRepository->findAll());

        $totalPages = ceil($totalTask / $tareasPaginas);
        

        $tarea = $clientRepository->findBy([], null, $tareasPaginas, $offset);

        return $this->render('templatemo_287_ancient/client.html.twig', [
            'resultados' => $tarea,
            "currentPage" => $page,
          "totalPages" => $totalPages
        ]);

  
}

//muestra un form para crear un nuevo cliente

//muestra los detalles de un cliente
#[Route('clients/detail/{id}', name: 'one_cliente')]
public function detail(EntityManagerInterface $entityManager,int $id): Response
{
    $client=$entityManager->getRepository(Cliente::class)->find($id);
    
    

     return $this->render('templatemo_287_ancient/detail.html.twig', [
         'resultados' => $client,
     ]);

 
}

 //elimina un cliente
 #[Route('/delete/{id}', name: 'cliente_delete')]
 public function deletecliente(EntityManagerInterface $entityManager, int $id): Response
 {

     
     $client = $entityManager->getRepository(Cliente::class)->find($id);

     if (!$client) {
         throw $this->createNotFoundException(
             'No client found for id '.$id
         );
     }

     $entityManager->remove($client);
     $entityManager->flush();

     return $this->redirectToRoute('all_clients');
     
 }

 //muestra un form para crear un nuevo cliente
 #[Route('/insert', name: 'app_form')]
 public function indice(Request $request): Response
 {

     $client=new Cliente();
     $form = $this->createForm(FormInsertType::class, $client);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()){
         $this->em->persist($client);
         $this->em->flush();
         return $this->redirectToRoute('all_clients');
     }
     return $this->render('base.html.twig', [
         'form' => $form->createView()
     ]);
 }
 //muestra un form para actualizar un cliente
 //el parametro que pongas que tiene que ser la ruta (id) tiene que tener el mismo nombre que lo que le pasas por parametro
 #[Route('/update/{id}', name: 'update_form')]
 public function update(Request $request, EntityManagerInterface $entityManager, int $id): Response
 {

     $client=$entityManager->getRepository(Cliente::class)->find($id);
     $form = $this->createForm(FormInsertType::class, $client);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()){
         $this->em->persist($client);
         $this->em->flush();
         return $this->redirectToRoute('all_clients');
     }
     return $this->render('base.html.twig', [
         'form' => $form->createView()
     ]);
 }

}



?>