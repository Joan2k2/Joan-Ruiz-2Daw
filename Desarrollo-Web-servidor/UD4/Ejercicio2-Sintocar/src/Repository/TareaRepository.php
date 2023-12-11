<?php

namespace App\Repository;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;


class TareaRepository extends EntityRepository 
{
   

public function add()
{
   
   $em = (new EntityManager())->get();
   $nuevo = new Tarea();
   $nuevo->setTitulo($_POST["titulo"]);
   $nuevo->setDescripcion($_POST["descripcion"]);
   $nuevo->setFecha_creacion(new \DateTime('2021-10-24'));
   $nuevo->setFecha_vencimiento(new \DateTime('2021-10-24'));
   $em->persist($nuevo);
   echo("he estado en add");
   $em->flush();
   header("Location: http://localhost/UD4/Ejercicio2-Sintocar/public/index.php/lista");
   exit();
}


   public function update($id)
   {
      echo("he estado en update");
      $em = (new EntityManager())->get();

      $tareaRepository = $em->getRepository(Tarea::class);
      $tarea = $tareaRepository->find($id);

      $tarea->setTitulo($_POST['titulo']);
      $tarea->setDescripcion($_POST['descripcion']);
      $tarea->setFecha_creacion(new \DateTime('2021-10-22'));
      $tarea->setFecha_vencimiento(new \DateTime('2021-10-22'));
      $em->persist($tarea);
      
      $em->flush();
      header("Location: http://localhost/UD4/Ejercicio2-Sintocar/public/index.php/lista");
      exit();
   }

   public function del($id)
   {
      echo("he estado en delete");
      $em = (new EntityManager())->get();
      $tareaRepository = $em->getRepository(Tarea::class);
      $tarea = $tareaRepository->find($id);
      if ($tarea) $em->remove($tarea);
      
      $em->flush();
      header("Location: http://localhost/UD4/Ejercicio2-Sintocar/public/index.php/lista");
      exit();
   }


}




