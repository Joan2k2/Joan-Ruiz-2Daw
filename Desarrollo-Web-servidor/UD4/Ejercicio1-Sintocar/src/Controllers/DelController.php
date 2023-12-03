<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;

class DelController extends AbstractController
{
   public function del($id)
   {
      echo("he estado en delete");
      $em = (new EntityManager())->get();
      $tareaRepository = $em->getRepository(Tarea::class);
      $tarea = $tareaRepository->find($id);
      if ($tarea) $em->remove($tarea);
      
      $em->flush();
   }

}
