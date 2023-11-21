<?php

class Vista{



    public function mostrar($array){

        require __DIR__ ."/vendor/autoload.php";
        $loader=new \Twig\Loader\FilesystemLoader("templates");
        $twig=new \Twig\Environment($loader);
        foreach ($array as $user) {
           
            echo $twig->render("index.html.twig",["nombre"=>$user["name"], "edad"=>$user["edad"], "estilo"=>$user["estilo"]]);
        }
        

    }
}


?>