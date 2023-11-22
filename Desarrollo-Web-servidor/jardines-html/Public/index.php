<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Acciones</title>
</head>
<body>

<form action="http://localhost/jardines-html/Public/index.php" method="get">
    <label for="action">Selecciona una acción:</label>
    <select name="action" id="action">
        <option value="hello">Hello</option>
        <option value="bye">Bye</option>
        <option value="saying">Saying</option>
        <option value="clients">Clients</option>
        <option value="volver">Volver</option>
    </select>
    <br>
    <label for="n">Valor de n (para Saying):</label>
    <input type="number" name="n" id="n" value="1">
    <br>
    <input type="submit" value="Ir">
</form>

</body>
</html>

<?php

require_once "../vendor/autoload.php";

$action = $_GET["action"];

if ($action === "volver") {
    header("Location: http://localhost/jardines-html/public/");
    exit;
}

/* RUTA: http://localhost/jardines-html/Public/index.php?action=clients */

use app\Controller\{ByeController, ClientsController, HelloController, SayingController, UserController};

switch ($action) { // front controller
    case "hello":
        $controller = new HelloController();
        $controller->hello();
        break;
    case "bye":
        $controller = new ByeController();
        $controller->bye();
        break;
    case "saying":
        $controller = new SayingController();
        $controller->saying($_GET["n"] - 1);;
        break;
    case "clients":
        $controller = new ClientsController();
        $controller->main();
        break;
    default:
}

$userController = new UserController();

//RENDERIZAMOS PLANTILLA

$userController->main();

/* var_dump($userController->main()); */

?>


