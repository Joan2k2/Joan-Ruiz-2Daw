<!DOCTYPE html>
<html lang="en">

<body>


    <?php
    $nombres = array("Roberto", "Davit", "Fernando", "Joan");
    print("cantidad de valores dentro del array " . count($nombres));

    for ($i = 0; $i < count($nombres); $i++) {
        $cadena = $cadena . $nombres[$i];
    }
    print("<br>");
    echo (implode(" ", $nombres)); //implode
    print("<br>");

    asort($nombres);
    print_r($nombres); //Asort
    print("<br>");
    reset($nombres);

    array_reverse($nombres);
    print_r($nombres); //Reverse
    print("<br>");

    print(array_search("Joan", $nombres)); //Posicion de mi nombre
    
    print("<br>");

    $alumnos=array(array("1","Roberto",84),array("2","Fernando",42),array("3","Davit",21),array("4","Joan",21));

    echo "<table border=2px>";

    echo "<tr>";

    echo "<th class=>ID</th>";

    echo "<th class=>NOMBRE</th>";

    echo "<th class=>EDAD</th>";

    echo "</tr>";
        foreach ($alumnos as $alumno) {

            $id=$alumno[0];
            $nombre=$alumno[1];
            $edad=$alumno[2];
            echo "<tr>";

            echo "<td class=>".$id."</td>";
    
            echo "<td class=>".$nombre."</td>";
    
            echo "<td class=>".$edad."</td>";
    
            echo "</tr>";
        }
       

    echo "</table>";// tabla de alumnos
    print("<br>");  

    foreach ($alumnos as $alumno) {

       print_r($alumno[1]." ");
        
    }

    $numeros=array(1,2,3,4,5,6,7,8,9,10);
    print("<br>");  

    print("Suma de todos los numeros " .  array_sum($numeros));






    ?>
</body>

</html>