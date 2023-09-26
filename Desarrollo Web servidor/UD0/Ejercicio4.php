<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    $nombre = "   Joan Ruiz Martinez";
    print(trim($nombre)); // quitamos los espacios
    print("<br>");
    print(strlen($nombre)); //mostrar longitud de cadena de texto
    print("<br>");
    print(strtoupper($nombre)); //Pasar a mayusculas 
    print("<br>");
    print(strtolower($nombre)); //pasar a minuscula
    print("<br>");
    print(strtolower($nombre)); //pasar a minuscula
    print("<br>");
    $prefijo = "Jo";
    if (strpos($nombre, $prefijo)) { //comprobar prefijo
        print("Si que coinciden");
    } else {
        print("No coinciden");
    }
    print("<br>");
    $nombre = strtolower($nombre); //cuenta la cantidad de a que hay en el nombre
    $caracter = "a";
    $contador = substr_count($nombre, $caracter);
    print("la cantidad de a que aparecen en el nombre es de " . $contador);
    print("<br>");

    $busqueda = "a";
    $resultado = stripos($nombre, $busqueda);

    if ($resultado !== false) {
        echo "La letra  '$busqueda' se encuentra en la posicion $resultado del nombre.";
    } else {
        echo "La letra  '$busqueda' no se encuentra en la posicion $resultado del nombre.";
    }
    print("<br>"); //muestra la posición de la primera a

    $nuevoNombre = str_ireplace("o", "0", $nombre);

    print("Este es el nombre despues de sustituir las o por un 0 " . $nuevoNombre);

    ?>
</body>

</html>