<?php
require_once './TodoModel.php';
require_once './TodoController.php';
require_once './TodoView.php';

$model = new TodoModel();
$controller = new TodoController($model);
$view = new TodoView();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
    $controller->addTodo($_POST['title']);
}

$todos = $model->getTodos();

$view->showTodos($todos);
$view->showAddForm();
?>