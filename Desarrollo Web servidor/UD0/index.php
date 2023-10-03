<html>
    <body>
        <h2>
            <?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

            //include("./persona.php");
            //include("./Estudiante.php");
            //include("./Figura.php");
            //include("./Forma.php");
            include("./Ejercicios/Cuadrado.php");
            include("./Ejercicios/Trabajador.php");
            include("./Ejercicios/Gerente.php");
            include("./Ejercicios/Persona.php");
            include("./Ejercicios/Empleado.php");
            //include("./Ejercicios/Menu.php");
            //include("./Ejercicios/CabeceraPagina.php");
            //include("./Ejercicios/Tabla.php");
            // include("./Circulo.php");
            
            
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
           /*$empleado = new Empleado("Roberto","");
            print($empleado->impuestos());*/


            //Ejercicio2

           /* $menu = new Menu("inicio","medio","medio2","final");

            $menu->vertical();
            $menu->horizontal();*/

            //Ejercicio3

            /* $cab = new CabeceraPagina("ACTIVIDADES","center","red","blue");
            $cab->montarCabezado(); */

            //Ejercicio 5-7-8

            /*$tabla=new Tabla(3,4);
            $tabla->crearTabla();*/

            //Ejercicio 10-11-12-13
            
           /* $empleado2=new Empleado2("Roberto",89,300);
            print($empleado2->imprimirDatos());
            print($empleado2->imprimirSueldo());*/

            //Ejercicio 14
            /*$persona=new Persona2("Roberto",2);
            print($persona->imprimirDatosPersona2());*/

            //Ejercicio15
           /* $empleadoTrabajador= new EmpleadoTrabajador("Roberto",3,150);
            print($empleadoTrabajador->calcularSueldo());
            print("<br>");
            $gerente= new Gerente("Davit",2000000);
            print($gerente->calcularSueldo());*/

            //Ejercicio16
            /* $empleado2=new Empleado2("Roberto",89,300);
            print($empleado2->imprimirDatos());
            print($empleado2->imprimirSueldo());*/
            /*$persona=new Persona2("Roberto",2);
            print($persona->imprimirDatosPersona2());*/

            //Ejercicio17
            $cuadrado = new Cuadrado(20);
                echo "Perimetro: ".$cuadrado->calcularPerimetro();
                echo "<br>";
                echo "Superfice: ". $cuadrado->calcularSuperficie();
                echo "<br>";
                echo "<br>";


            ?>
        </h2>
    </body>
</html>