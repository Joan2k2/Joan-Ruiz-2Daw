<?php
require_once './TodoModel.php';
require_once './TodoController.php';
require_once './TodoView.php';

// Inicializamos el modelo, controladores y vista
$model = new TodoModel();
$controller = new TodoController($model);
$view = new TodoView();

$route = isset($_GET['route']) ? $_GET['route'] : 'add';

switch ($route) {
    case 'list':
        $todos = $model->getTodos();
        $view->showTodos($todos);
        break;
    case 'add':
        $view->showAddForm();
        break;
    default:
        echo "Ruta no válida.";
}
