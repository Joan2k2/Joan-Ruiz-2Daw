<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;

class AddController extends AbstractController
{
   public function add()
   {
      
      $em = (new EntityManager())->get();
      $nuevo = new Tarea();
      $nuevo->setTitulo("nuevaTarea");
      $nuevo->setFecha_creacion(new \DateTime('2021-10-24'));
      $em->persist($nuevo);
      echo("he estado en add");
      $em->flush();
   }

}
