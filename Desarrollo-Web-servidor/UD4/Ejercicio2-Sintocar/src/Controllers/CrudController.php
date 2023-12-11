<?php

namespace App\Controllers;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;
use App\Repository\TareaRepository;
class CrudController extends AbstractController{


    public function listado($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaRepository = $em->getRepository(Tarea::class);
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
          "resultados" => $tarea,
          "currentPage" => $page,
          "totalPages" => $totalPages
      ]);
    }

    public function add()
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaDatos = $em->getClassMetadata(Tarea::class);
      $tarea = new TareaRepository($em,$tareaDatos);
      $tarea->add();
      
    }

    public function del(){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $tareaDatos = $em->getClassMetadata(Tarea::class);
      $tarea = new TareaRepository($em,$tareaDatos);
      $tarea->del($tareaDatos);

    }

}

?>