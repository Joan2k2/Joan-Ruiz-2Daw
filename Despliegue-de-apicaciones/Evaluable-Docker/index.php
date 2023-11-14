<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de la Base de Datos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Configuración de la base de datos
$servidor = "172.23.0.2";
$usuario = "root";
$contrasena = "root";
$base_datos = "bddjoanevaluable";

// Conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if (!$conexion) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}

// Consulta SQL
$consulta = "SELECT id, name FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);

// Verificar si la consulta fue exitosa
if (!$resultado) {
    die("Error al ejecutar la consulta: " . mysqli_error($conexion));
}
?>

<!-- Mostrar resultados en una tabla HTML -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Mostrar registros
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['name'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
// Cerrar la conexión
mysqli_close($conexion);
?>

</body>
</html>
