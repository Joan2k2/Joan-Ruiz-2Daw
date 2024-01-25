<?php

namespace App\Repository;

use App\Entity\CLIENTE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Core\EntityManager;

/**
 * @extends ServiceEntityRepository<CLIENTE>
 *
 * @method CLIENTE|null find($id, $lockMode = null, $lockVersion = null)
 * @method CLIENTE|null findOneBy(array $criteria, array $orderBy = null)
 * @method CLIENTE[]    findAll()
 * @method CLIENTE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CLIENTERepository extends ServiceEntityRepository
{

  /**
     * Agrega una nueva tarea a la base de datos.
     */



     private $em;
     public function __construct(EntityManagerInterface $em){
        $this->em=$em;
     }
    
    public function add()
    {
        try {
            // Obtiene la instancia del EntityManager

            // Crea una nueva instancia de la entidad Tarea
            $nuevo = new CLIENTE();

            // Configura los atributos de la tarea desde los datos del formulario ($_POST)
            $nuevo->setNombre($_POST["nombre"]);
            $nuevo->setDIREC($_POST["direc"]);
            $nuevo->setCIUDAD($_POST["ciudad"]);
            $nuevo->setEstado($_POST["estado"]);
            $nuevo->setCODPOSTAL($_POST["codPostal"]);
            $nuevo->setArea($_POST["area"]);
            $nuevo->setTelefono($_POST["telefono"]);
            $nuevo->setReprCod($_POST["reprCod"]);
            $nuevo->setLIMITECREDITO($_POST["limiteCredito"]);
            $nuevo->setOBSERVACIONES($_POST["observaciones"]);

            // Persiste la nueva tarea en la base de datos
            $this->em->persist($nuevo);

            // Imprime un mensaje (se podría quitar en producción)
            echo ("he estado en add");

            // Aplica los cambios en la base de datos
            $this->em->flush();
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

        // Obtiene la tarea existente mediante su identificador
        $clientRepository = $this->em->getRepository(CLIENTE::class);
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
        $this->em->persist($client);

        // Aplica los cambios en la base de datos
        $this->em->flush();

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
        $this->em = (new EntityManager())->get();

        // Obtiene la tarea existente mediante su identificador
        $CLIENTERepository = $this->em->getRepository(CLIENTE::class);
        $CLIENTE = $CLIENTERepository->find($id);

        
        // Si la tarea existe, la elimina de la base de datos

        if ($CLIENTE) {
            $this->em->remove($CLIENTE);
        }else{
            echo"no se ha eliminado";
        }

        // Aplica los cambios en la base de datos
        $this->em->flush();

        // Redirecciona a la lista de tareas
        header("Location: http://localhost/UD4/Ejercicio3/public/index.php/clientes");
        exit();
    }
}
