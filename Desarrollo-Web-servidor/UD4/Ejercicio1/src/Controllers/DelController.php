<?php

namespace App\Controllers;

echo error_reporting(E_ALL);
echo ini_set("display_errors", 1);

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;
//elimina un dato de la base de datos
class DelController extends AbstractController
{
   public function del($id)
   {
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $user = $usersRepository->find($id);
      if ($user) $em->remove($user);
      $em->flush();
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $this->render("list.html.twig", [
         "resultados" => $usersRepository->findAll()
      ]);
      print_r("se ha borrado");
   }
}
