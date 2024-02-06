<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\PAGOSJoan;
use App\Form\FormPagosJoanType;

class PagosJoanController extends AbstractController
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

//muestra todos los PAGOS
#[Route('/PAGOSJoan/{page}', name: 'all_PAGOSJoan')]
public function show(EntityManagerInterface $entityManager,$page=1)
{
    $PAGOSJoanRepository = $this->em->getRepository(PAGOSJoan::class);

        $tareasPaginas = 5;

        $offset = ($page - 1) * $tareasPaginas;
       

        $totalTask = count($PAGOSJoanRepository->findAll());

        $totalPages = ceil($totalTask / $tareasPaginas);
        

        $tarea = $PAGOSJoanRepository->findBy([], null, $tareasPaginas, $offset);

        return $this->render('templatemo_287_ancient/PAGOSJoan.html.twig', [
            'resultados' => $tarea,
            "currentPage" => $page,
          "totalPages" => $totalPages
        ]);

  
}

//muestra los detalles de un PAGO
#[Route('PAGOSJoan/detail/{id}', name: 'one_PAGOSJoan')]
public function detail(EntityManagerInterface $entityManager,int $id): Response
{
    $PAGOSJoan=$entityManager->getRepository(PAGOSJoan::class)->find($id);
    
    

     return $this->render('templatemo_287_ancient/detailPAGOSJoan.html.twig', [
         'resultados' => $PAGOSJoan,
     ]);

 
}

 //elimina un PAGOSJoan
 #[Route('/deletePAGOSJoan/{id}', name: 'PAGOSJoan_delete')]
 public function deletePAGOSJoan(EntityManagerInterface $entityManager, int $id): Response
 {

     
     $PAGOSJoan = $entityManager->getRepository(PAGOSJoan::class)->find($id);

     if (!$PAGOSJoan) {
         throw $this->createNotFoundException(
             'No PAGOSJoan found for id '.$id
         );
     }

     $entityManager->remove($PAGOSJoan);
     $entityManager->flush();

     return $this->redirectToRoute('all_PAGOSJoan');
     
 }

 //muestra un form para crear un nuevo PAGO
 #[Route('/insert', name: 'app_form')]
 public function indice(Request $request): Response
 {

     $PAGOSJoan=new PAGOSJoan();
     $form = $this->createForm(FormPagosJoanType::class, $PAGOSJoan);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()){
         $this->em->persist($PAGOSJoan);
         $this->em->flush();
         return $this->redirectToRoute('all_PAGOSJoan');
     }
     return $this->render('base.html.twig', [
         'form' => $form->createView()
     ]);
 }
 //muestra un form para actualizar un PAGO
 //el parametro que pongas que tiene que ser la ruta (id) tiene que tener el mismo nombre que lo que le pasas por parametro y pones en twig
 #[Route('/update/{id}', name: 'update_form')]
 public function update(Request $request, EntityManagerInterface $entityManager, int $id): Response
 {

     $PAGOSJoan=$entityManager->getRepository(PAGOSJoan::class)->find($id);
     $form = $this->createForm(FormPagosJoanType::class, $PAGOSJoan);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()){
         $this->em->persist($PAGOSJoan);
         $this->em->flush();
         return $this->redirectToRoute('all_PAGOSJoan');
     }
     return $this->render('base.html.twig', [
         'form' => $form->createView()
     ]);
 }
}
