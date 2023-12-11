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
      // Obtener el repositorio de Tasks
      $tasksRepository = $em->getRepository(Tarea::class);
      // Número de tareas por página
      $tasksPerPage = 5;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $tasksPerPage;
      // Contar el total de tareas
      $totalTasks = count($tasksRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalTasks / $tasksPerPage);
      // Obtener las tareas paginadas
      $tasks = $tasksRepository->findBy([], null, $tasksPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("list.html.twig", [
          "resultados" => $tasks,
          "currentPage" => $page,
          "totalPages" => $totalPages
      ]);
    }

}

?>