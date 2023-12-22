<?php

namespace App\Repository;
use App\Core\AbstractController;
use App\Entity\Emp;
use App\Core\EntityManager;
use Doctrine\Common\Collections\Expr\Value;
// Configuración para mostrar todos los errores
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Importación de clases necesarias

use Doctrine\ORM\EntityRepository;

class EmpRepository extends EntityRepository
{
     // /**
    //  * Elimina una tarea de la base de datos.
    //  *
    //  * @param int $id Identificador único de la tarea a eliminar.
    //  */
    public function del($id)
    {
        // Imprime un mensaje (se podría quitar en producción)
        echo("he estado en delete");

        // Obtiene la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Obtiene la tarea existente mediante su identificador
        $clientsRepository = $em->getRepository(Emp::class);
        $clients = $clientsRepository->find($id);

        
        // Si la tarea existe, la elimina de la base de datos

        if ($clients) {
            $em->remove($clients);
        }else{
            echo"no se ha eliminado";
        }

        // Aplica los cambios en la base de datos
        $em->flush();

        // Redirecciona a la lista de tareas
        header("Location: http://localhost/UD4/Ejercicio3/public/index.php/empleados");
        exit();
    }
     /**
     * Agrega una nueva tarea a la base de datos.
     */
    public function add()
{
    try {
        // Obtiene la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Crea una nueva instancia de la entidad Tarea
        $nuevo = new Emp();

        // Configura los atributos de la tarea desde los datos del formulario ($_POST)
        $nuevo->setEMP_NO($_POST["EMP_NO"]);
        $nuevo->setApellidos($_POST["apellidos"]);
        $nuevo->setOficio($_POST["oficio"]);
        $nuevo->setJefe($_POST["jefe"]);
        $nuevo->setFECHA_ALTA(new \DateTime($_POST["fechaAlta"])); // Ajustar según el formato de fecha esperado
        $nuevo->setSalario($_POST["salario"]);
        $nuevo->setComision($_POST["comision"]);
        $nuevo->setDept_no($_POST["deptNo"]);

        // Persiste la nueva tarea en la base de datos
        $em->persist($nuevo);

        // Imprime un mensaje (se podría quitar en producción)
        echo ("he estado en add");

        // Aplica los cambios en la base de datos
        $em->flush();
    } catch (\Exception $e) {
        echo "Error al persistir: " . $e->getMessage();
    }

    // Redirecciona a la lista de tareas
    header("Location: http://localhost/UD4/Ejercicio3/public/index.php/empleados");
    exit();
}

}