<?php

namespace App\Controllers;

echo error_reporting(E_ALL);
echo ini_set("display_errors", 1);

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;
// muestra los datos de la base de datos
class ListController extends AbstractController
{
   public function listado($page = null)
   {
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $this->render("list.html.twig", [
         "resultados" => $usersRepository->findAll()
      ]);
   }
}
