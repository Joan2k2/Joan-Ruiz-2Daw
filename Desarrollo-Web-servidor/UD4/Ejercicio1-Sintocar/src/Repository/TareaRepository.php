<?php

namespace App\Repository;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Entity\Tarea;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;
use App\Core\AbstractController;


class TareaRepository extends EntityRepository 
{
    private $abs;

    public function __construct(AbstractController $abs)
    {
        $this->abs = $abs;
    }

public function add()
{
   
   $em = (new EntityManager())->get();
   $nuevo = new Tarea();
   $nuevo->setTitulo("nuevaTarea");
   $nuevo->setFecha_creacion(new \DateTime('2021-10-24'));
   $em->persist($nuevo);
   echo("he estado en add");
   $em->flush();
}
public function listado($page = null)
{
   
   $em = (new EntityManager())->get();
   echo"1";
   $usersRepository = $em->getRepository(Tarea::class);
   echo"2";
   $this->abs->render("list.html.twig", [
      "resultados" => $usersRepository->findAll()
   ]);
}

   // public function update($id)
   // {
   //    echo("he estado en update");
   //    $em = (new EntityManager())->get();

   //    $tareaRepository = $this->repo;
   //    $tarea = $tareaRepository->find($id);

   //    $tarea->setTitulo("Pepe");
   //    $tarea->setFecha_creacion(new \DateTime('2021-10-22'));

   //    $em->persist($tarea);
      
   //    $em->flush();
   // }
   // public function del($id)
   // {
   //    echo("he estado en delete");
   //    $em = (new EntityManager())->get();
   //    $tareaRepository = $this->repo;
   //    $tarea = $tareaRepository->find($id);
   //    if ($tarea) $em->remove($tarea);
      
   //    $em->flush();
   // }

}




