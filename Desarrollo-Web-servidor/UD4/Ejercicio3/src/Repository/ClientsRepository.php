<?php

namespace App\Repository;

// Configuración para mostrar todos los errores
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Importación de clases necesarias
use App\Core\AbstractController;
use App\Entity\Clients;
use App\Core\EntityManager;
use Doctrine\Common\Collections\Expr\Value;
use Doctrine\ORM\EntityRepository;

class ClientsRepository extends EntityRepository
{
    /**
     * Agrega una nueva tarea a la base de datos.
     */
    public function add()
    {
        try {
            // Obtiene la instancia del EntityManager
            $em = (new EntityManager())->get();

            // Crea una nueva instancia de la entidad Tarea
            $nuevo = new Clients();

            // Configura los atributos de la tarea desde los datos del formulario ($_POST)
            $nuevo->setCLIENTE_COD($_POST["clienteCod"]);
            $nuevo->setNombre($_POST["nombre"]);
            $nuevo->setDireccion($_POST["direc"]);
            $nuevo->setCiduad($_POST["ciudad"]);
            $nuevo->setEstado($_POST["estado"]);
            $nuevo->setCodigo($_POST["codPostal"]);
            $nuevo->setArea($_POST["area"]);
            $nuevo->setTelefono($_POST["telefono"]);
            $nuevo->setReprCod($_POST["reprCod"]);
            $nuevo->setLimite($_POST["limiteCredito"]);
            $nuevo->setObserbaciones($_POST["observaciones"]);

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
        header("Location: http://localhost/UD4/Ejercicio3/public/index.php/clientes");
        exit();
    }

    // /**
    //  * Actualiza una tarea existente en la base de datos.
    //  *
    //  * @param int $id Identificador único de la tarea a actualizar.
    //  */
    public function update($id)
    {
        // Imprime un mensaje (se podría quitar en producción)
        echo("he estado en update");

        // Obtiene la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Obtiene la tarea existente mediante su identificador
        $clientRepository = $em->getRepository(Clients::class);
        $client = $clientRepository->find($id);

        // Actualiza los atributos de la tarea desde los datos del formulario ($_POST)

            $client->setNombre($_POST["nombre"]);
            $client->setDireccion($_POST["direc"]);
            $client->setCiduad($_POST["ciudad"]);
            $client->setEstado($_POST["estado"]);
            $client->setCodigo($_POST["codPostal"]);
            $client->setArea($_POST["area"]);
            $client->setTelefono($_POST["telefono"]);
            $client->setReprCod($_POST["reprCod"]);
            $client->setLimite($_POST["limiteCredito"]);
            $client->setObserbaciones($_POST["observaciones"]);

        // Persiste la tarea actualizada en la base de datos
        $em->persist($client);

        // Aplica los cambios en la base de datos
        $em->flush();

        // Redirecciona a la lista de tareas
        header("Location: http://localhost/UD4/Ejercicio3/public/index.php/clientes");
        exit();
    }

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
        $clientsRepository = $em->getRepository(Clients::class);
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
        header("Location: http://localhost/UD4/Ejercicio3/public/index.php/clientes");
        exit();
    }
}
