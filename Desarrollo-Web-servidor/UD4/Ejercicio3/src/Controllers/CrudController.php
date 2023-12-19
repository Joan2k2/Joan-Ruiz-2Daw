<?php

namespace App\Controllers;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\AbstractController;
use App\Entity\Clients;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;
use App\Repository\ClientsRepository;
class CrudController extends AbstractController{

    public function base(){
      $this->render("index.html",[null]);
    }

    public function listadoClients($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $clientsRepository = $em->getRepository(Clients::class);
      // Número de tareas por página
      $ClientsPerPage = 5;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $ClientsPerPage;
      // Contar el total de tareas
      $totalClients = count($clientsRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalClients / $ClientsPerPage);
      // Obtener las tareas paginadas
      $Clients = $clientsRepository->findBy([], null, $ClientsPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("list.html.twig", [
          "resultados" => $Clients,
          "currentPage" => $page,
          "totalPages" => $totalPages,
          "type" => "clientes"
      ]);
    }

    public function listadoEmpleados($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaRepository = $em->getRepository(Clients::class);
      // Número de tareas por página
      $tareaPerPage = 5;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $tareaPerPage;
      // Contar el total de tareas
      $totaltarea = count($tareaRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totaltarea / $tareaPerPage);
      // Obtener las tareas paginadas
      $tarea = $tareaRepository->findBy([], null, $tareaPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("list.html.twig", [
          // "resultados" => $tarea,
          // "currentPage" => $page,
          // "totalPages" => $totalPages
      ]);
    }

    public function add()
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaDatos = $em->getClassMetadata(Clients::class);
      $Clients = new ClientsRepository($em,$tareaDatos);
      $Clients->add();
      
    }

    public function del($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaDatos = $em->getClassMetadata(Clients::class);
      $tarea = new ClientsRepository($em,$tareaDatos);
      $tarea->del($id);

    }

    public function update($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaDatos = $em->getRepository(Clients::class);
      $tarea = $tareaDatos->find($id);
      $this->render("form.html", [
        "tarea" => $tarea,
       
    ]);

    }

    public function updating($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaDatos = $em->getClassMetadata(Clients::class);
      $tarea = new ClientsRepository($em,$tareaDatos);
      echo "hola";
      $tarea->update($id);

    }

    public function detail($id){

      $em = (new EntityManager())->get();
      $clientesRepository = $em->getRepository(Clients::class);
      $cliente = $clientesRepository->find($id);

      $this->render("detail.html", [
         "resultados" => $cliente]);
        
   } 

}

?>