<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;

class ListController extends AbstractController
{
   public function listado($page = null)
   {
      
      $em = (new EntityManager())->get();
      echo"1";
      $usersRepository = $em->getRepository(Tarea::class);
      echo"2";
      $this->render("list.html.twig", [
         "resultados" => $usersRepository->findAll()
      ]);
   }

}
