<html>
    <body>
        <h2>
            <?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

            include("./persona.php");
            include("./Estudiante.php");
            //include("./Figura.php");
            include("./Forma.php");
            include("./Ejercicios/Empleado.php");
            include("./Ejercicios/Menu.php");
            include("./Ejercicios/CabeceraPagina.php");
            include("./Ejercicios/Tabla.php");
            include("./Circulo.php");
            
            /*$maria = new Persona("Maria",20);
            $robertoEstudiante = new Estudiante("Roberto",20,"Mariconchis");
            $maria->saludar();
            echo"<br>";
            $robertoEstudiante->estudiar();
            echo"<br>";
            print($robertoEstudiante->getCurso());
            $robertoEstudiante->setCurso("Marichonchis2 El retorno de los calvos");
            echo"<br>";
            print($robertoEstudiante->getCurso());
            echo("<br>");
            $circulo = new Circulo(6);
            
            echo("Area del circulo {$circulo->calcularArea()} ")*/


            //-------------------------------

            //Ejercicio 1
           /* $empleado = new Empleado("Roberto", 5000);
            print($empleado->impuestos());*/


            //Ejercicio2

           /* $menu = new Menu("inicio","medio","medio2","final");

            $menu->vertical();
            $menu->horizontal();*/

            //Ejercicio3

            /* $cab = new CabeceraPagina("ACTIVIDADES","center","red","blue");
            $cab->montarCabezado(); */

            //Ejercicio 5-7-8

            $tabla=new Tabla(3,4);
            $tabla->crearTabla();

            ?>
        </h2>
    </body>
</html>