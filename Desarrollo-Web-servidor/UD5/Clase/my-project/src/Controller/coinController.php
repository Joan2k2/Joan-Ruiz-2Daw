<?php
// src/Controller/coinController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class coinController 
{
    
    #[Route('/coin/coiner')]
    public function number(): Response
    {
        $number = random_int(0, 1);
        $bol=false;
        if($number===1){
            $bol=true;
        }else{
            $bol=false;
        }

        return new Response(
            '<html><body>Coin face: '.(($bol) ? "cara" : "cruz").'</body></html>'
        );
    }


}


?>