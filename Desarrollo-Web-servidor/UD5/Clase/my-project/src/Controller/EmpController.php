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
use App\Entity\Dept;
use App\Entity\EMP;
use app\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

    class EmpController extends AbstractController{



        //elimina un empleado
    #[Route('/product/delete/{id}', name: 'product_delete')]
    public function delete(EntityManagerInterface $entityManager, int $id): Response
    {

        
        $emp = $entityManager->getRepository(EMP::class)->find($id);

        if (!$emp) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $entityManager->remove($emp);
        $entityManager->flush();

        return new Response('ha sido eliminado');
        
    }

     // insert en empleado
     #[Route('/insert_emp', name: 'create_emp')]
     public function createemp(EntityManagerInterface $entityManager): Response
     {
         $date = new \DateTime('@'.strtotime('now'));
         $dept = $entityManager->getRepository(Dept::class)->find(4);
         $emp = new EMP();
         $emp->setApellidos('jorge');
         $emp->setComision(21);
         $emp->setDeptNo($dept);
         $emp->setFechaAlta($date);
         $emp->setJefe(1);
         $emp->setOficio('nose');
         $emp->setSalario(300);
         
 
         // tell Doctrine you want to (eventually) save the Product (no queries yet)
         $entityManager->persist($emp);
 
         // actually executes the query
         $entityManager->flush();
 
         return new Response('Saved new product with id '.$emp->getId());
     }

       //muestra todos los empleados
    #[Route('/emp', name: 'all_emp')]
    public function showemp(EntityManagerInterface $entityManager): Response
    {
        $emp = $entityManager->getRepository(EMP::class)->findAll();
        for($i=0;$i<count($emp);$i++){
            $result[]=$emp[$i]->getDeptNo2()->getId();
        }


        return $this->render('templatemo_287_ancient/emp.html.twig', [
            'resultados' => $result, 'result' => $emp,
        ]);

       
    }
    }
