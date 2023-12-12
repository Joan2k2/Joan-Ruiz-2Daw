<?php

namespace App\Repository;

// Configuración para mostrar todos los errores
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Importación de clases necesarias
use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class TareaRepository extends EntityRepository 
{
    /**
     * Agrega una nueva tarea a la base de datos.
     */
    public function add()
    {
        // Obtiene la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Crea una nueva instancia de la entidad Tarea
        $nuevo = new Tarea();

        // Configura los atributos de la tarea desde los datos del formulario ($_POST)
        $nuevo->setTitulo($_POST["titulo"]);
        $nuevo->setDescripcion($_POST["descripcion"]);
        $nuevo->setFecha_creacion(new \DateTime('2021-10-24'));
        $nuevo->setFecha_vencimiento(new \DateTime('2021-10-24'));

        // Persiste la nueva tarea en la base de datos
        $em->persist($nuevo);

        // Imprime un mensaje (se podría quitar en producción)
        echo("he estado en add");

        // Aplica los cambios en la base de datos
        $em->flush();

        // Redirecciona a la lista de tareas
        header("Location: http://localhost/UD4/Ejercicio2-Sintocar/public/index.php/lista");
        exit();
    }

    /**
     * Actualiza una tarea existente en la base de datos.
     *
     * @param int $id Identificador único de la tarea a actualizar.
     */
    public function update($id)
    {
        // Imprime un mensaje (se podría quitar en producción)
        echo("he estado en update");

        // Obtiene la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Obtiene la tarea existente mediante su identificador
        $tareaRepository = $em->getRepository(Tarea::class);
        $tarea = $tareaRepository->find($id);

        // Actualiza los atributos de la tarea desde los datos del formulario ($_POST)
        $tarea->setTitulo($_POST['titulo']);
        $tarea->setDescripcion($_POST['descripcion']);
        $tarea->setFecha_creacion(new \DateTime('2021-10-22'));
        $tarea->setFecha_vencimiento(new \DateTime('2021-10-22'));

        // Persiste la tarea actualizada en la base de datos
        $em->persist($tarea);

        // Aplica los cambios en la base de datos
        $em->flush();

        // Redirecciona a la lista de tareas
        header("Location: http://localhost/UD4/Ejercicio2-Sintocar/public/index.php/lista");
        exit();
    }

    /**
     * Elimina una tarea de la base de datos.
     *
     * @param int $id Identificador único de la tarea a eliminar.
     */
    public function del($id)
    {
        // Imprime un mensaje (se podría quitar en producción)
        echo("he estado en delete");

        // Obtiene la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Obtiene la tarea existente mediante su identificador
        $tareaRepository = $em->getRepository(Tarea::class);
        $tarea = $tareaRepository->find($id);

        // Si la tarea existe, la elimina de la base de datos
        if ($tarea) {
            $em->remove($tarea);
        }

        // Aplica los cambios en la base de datos
        $em->flush();

        // Redirecciona a la lista de tareas
        header("Location: http://localhost/UD4/Ejercicio2-Sintocar/public/index.php/lista");
        exit();
    }
}


