<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/lucky/aviso')]
    public function aviso(): Response
    {
        $aviso = "Jorge me da error cuando creo el contenedor porque me dice acceso denegado a la bdd con el usuario que pongo";

        return new Response(
            '<html><body>Aviso: '.$aviso.'</body></html>'
        );
    }
}   