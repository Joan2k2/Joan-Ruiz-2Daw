<?php

namespace App\Controllers;

echo error_reporting(E_ALL);
echo ini_set("display_errors", 1);

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;

//Añade un dato a la base de datos
class AddController extends AbstractController
{
   public function add()
   {
      $em = (new EntityManager())->get();
      $nuevo = new Users();
      $nuevo->settitulo("Jorge Creado");
      $nuevo->setDescripcion("holi");
      $nuevo->setfecha(new \DateTime('now'));
      $nuevo->setFecha_vencimiento(new \DateTime('now'));
      $em->persist($nuevo);
      $em->flush();
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $this->render("list.html.twig", [
         "resultados" => $usersRepository->findAll()
      ]);
   }
}
