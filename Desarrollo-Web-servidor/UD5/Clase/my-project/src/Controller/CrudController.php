<?php

namespace App\Controllers;
error_reporting(E_ALL);
ini_set("display_errors",1);
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use App\Entity\CLIENTE;
    use App\Entity\EMP;
    use App\Entity\DEPT;
    use App\Core\EntityManager;
    use Doctrine\ORM\EntityRepository;
    use APP\Repository\CLIENTERepository;
    use APP\Repository\EMPeRepository;
    use Doctrine\Persistence\ManagerRegistry;

class CrudController extends AbstractController{

      public function base(){
      $this->render("index.html",[null]);
    }

    public function listadoClients($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $clientsRepository = $em->getRepository(CLIENTE::class);
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
      $empRepository = $em->getRepository(Emp::class);


      
      // Número de tareas por página
      $empPerPage = 5;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $empPerPage;
      // Contar el total de tareas
      $totalemps = count($empRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalemps / $empPerPage);
      // Obtener las tareas paginadas
      $emps = $empRepository->findBy([], null, $empPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("listEmp.html.twig", [
          "resultados" => $emps,
          "currentPage" => $page,
          "totalPages" => $totalPages,
          "type" => "empleados"
      ]);
    }

    public function addClient()
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $clientsDatos = $em->getClassMetadata(CLIENTE::class);
      $Clients = new CLIENTERepository($clientsDatos);
      $Clients->add();
      
    }

    public function addEmp()
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $empDatos = $em->getClassMetadata(Emp::class);
      $emp = new EMPeRepository($empDatos);
      $emp->add();
      
    }

    public function delClient($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $clientsDatos = $em->getClassMetadata(CLIENTE::class);
      $Clients = new CLIENTERepository($clientsDatos);
      $Clients->del($id);

    }
    public function delEmp($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $empDatos = $em->getClassMetadata(Emp::class);
      $emp = new EMPeRepository($empDatos);
      $emp->del($id);

    }

    public function updateClient($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $clientsDatos = $em->getRepository(CLIENTE::class);
      $Clients = $clientsDatos->find($id);
      $this->render("update.html", [
        "clientes" => $Clients,
       
    ]);

    }

    public function updatingClient($id){
      $em = (new EntityManager())->get();
      // Obtener el repositorio de tarea
      $clientsDatos = $em->getClassMetadata(CLIENTE::class);
      $Clients = new CLIENTERepository($clientsDatos);
      echo "hola";
      $Clients->update($id);

    }

    public function detailClient($id){

      $em = (new EntityManager())->get();
      $clientesRepository = $em->getRepository(CLIENTE::class);
      $cliente = $clientesRepository->find($id);
      $a=$cliente->getReprCod();
      if($a==null){

        $this->render("detail.html", [
          "resultados" => $cliente,
          "apellido" => null]);
      }else{
        $EmpRepository = $em->getRepository(Emp::class);
        $emp = $EmpRepository->find($a);
        
        $this->render("detail.html", [
           "resultados" => $cliente,
           "apellido" => $emp]);
          
      }
     
   } 

}

?>