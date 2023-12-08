<?php

namespace App\Controllers;

echo error_reporting(E_ALL);
echo ini_set("display_errors", 1);

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;
//Modifica un dato de la base de datos
class UpdateController extends AbstractController
{
   public function update($id)
   {
      $em = (new EntityManager())->get();
      echo "la id es " . "$id";
      $usersRepository = $em->getRepository(Users::class);
      $user = $usersRepository->find($id);

      $user->settitulo("Jorge Updated");
      $user->setfecha(new \DateTime('2030-10-22'));

      $em->persist($user);
      $em->flush();
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $this->render("list.html.twig", [
         "resultados" => $usersRepository->findAll()
      ]);
   }
}
