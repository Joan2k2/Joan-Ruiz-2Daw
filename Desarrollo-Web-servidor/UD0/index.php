<html>
    <body>
        <h2>
            <?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

            include("./persona.php");
            include("./Estudiante.php");
            include("./Figura.php");
            include("./Forma.php");
            include("./Calculadora.php");
            include("./ClaseDestructor.php");
            include("./Cuadrado.php");
            include("./Trabajador.php");
            include("./Gerente.php");
            include("./Persona.php");
            include("./Empleado.php");
            include("./Menu.php");
            include("./CabeceraPagina.php");
            include("./Tabla.php");
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
           /*$empleado = new Empleado("Roberto","");
            print($empleado->impuestos());*/


            //Ejercicio2-6

           /* $menu = new Menu("inicio","medio","medio2","final");

            $menu->vertical();
            $menu->horizontal();*/

            //Ejercicio3-4

            /* $cab = new CabeceraPagina("ACTIVIDADES","center","red","blue");
            $cab->montarCabezado(); */

            //Ejercicio 5-7-8

            /*$tabla=new Tabla(3,4);
            $tabla->crearTabla();*/

            //Ejercicio 9-10-11-12-13
            
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

            /*$cuadrado = new Cuadrado(20);
                echo "Perimetro: ".$cuadrado->calcularPerimetro();
                echo "<br>";
                echo "Superfice: ". $cuadrado->calcularSuperficie();
                echo "<br>";
                echo "<br>";*/

            //Ejercicio18

            /*
            $personaOriginal = new Persona3("Juan", 25);
            // Clonar la variable
            $personaClonada = clone $personaOriginal;
            print("Edad persona original {$personaOriginal->getEdad()}");
            print("<br>");
            print("Edad persona clonada {$personaClonada->getEdad()}");*/

            //Ejercicio19

            /*$gerenteConMayorSueldo = null;
            $MayorSueldo = 0;

            $empleados = [
                new EmpleadoTrabajador("Empleado1", 30000,34),
                new EmpleadoTrabajador("Empleado2", 35000,34),
                new EmpleadoTrabajador("Empleado3", 32000,34),
                new Gerente("Gerente1", 50000),
                new Gerente("Gerente2", 55000),
            ];
            foreach ($empleados as $trabajador) {
                if ($trabajador instanceof Gerente && $trabajador->getSueldo() > $sueldoMayor) {
                    $gerenteConMayorSueldo = $trabajador;
                    $sueldoMayor = $trabajador->getSueldo();
                }
            }

            print("{$gerenteConMayorSueldo->calcularSueldo()}");*/

            //Ejercicio 20

            /*$objeto = new ClaseDestructor(); // Esto llama al constructor
            
            unset($objeto); // Esto llama al destructor*/

            //Ejercicio21

           /* $calcu=new Calculadora();
            print("{$calcu->sumar(5,5)}");*/
            


            ?>
        </h2>
    </body>
</html>