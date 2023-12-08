<?php

namespace App\Repository;

use App\Core\AbstractController;
use App\Entity\Tarea;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;


trait RenderTrait
{
    public function render($template, $data)
    {
        // Implementa la lógica para renderizar la plantilla
        // Puedes personalizar esto según tu estructura
        // Por ejemplo, asumiendo que AbstractController tiene el método render
        $abstractController = new AbstractController();
        $abstractController->render($template, $data);
    }
}
class TareaRepository extends EntityRepository
{
    use RenderTrait;

    public function del($id)
    {
       echo("he estado en delete");
       $em = (new EntityManager())->get();
       $tareaRepository = $em->getRepository(Tarea::class);
       $tarea = $tareaRepository->find($id);
       if ($tarea) $em->remove($tarea);
       
       $em->flush();
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
       $usersRepository = $em->getRepository(Tarea::class);
       $this->render("list.html.twig", [
          "resultados" => $usersRepository->findAll()
       ]);
    }
 


}


