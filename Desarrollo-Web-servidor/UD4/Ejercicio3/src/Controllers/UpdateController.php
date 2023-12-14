<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;

class UpdateController extends AbstractController
{
   public function update($id)
   {
      echo("he estado en update");
      $em = (new EntityManager())->get();

      $tareaRepository = $em->getRepository(Tarea::class);
      $tarea = $tareaRepository->find($id);

      $tarea->setTitulo("Pepe");
      $tarea->setFecha_creacion(new \DateTime('2021-10-22'));

      $em->persist($tarea);
      
      $em->flush();
   }

}
