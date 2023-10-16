<?php
class TodoController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addTodo($title) {
        $this->model->addTodo($title);
    }
}

?>