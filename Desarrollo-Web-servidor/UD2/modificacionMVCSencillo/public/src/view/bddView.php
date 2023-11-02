<?php

class BddView{
//muestra una despedida
    function mostrarDatos($array){
        
        foreach ($array as $contenido) {
            echo"<h1>{$contenido}</h1>";
        }
        
        

    }

    
}




?>