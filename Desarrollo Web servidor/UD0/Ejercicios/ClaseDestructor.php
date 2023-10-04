<?php
//ejemplo de como funciona un constructor y un destructor
class ClaseDestructor {
    public function __construct() {
        echo "El constructor se ha ejecutado";
    }

    public function __destruct() {
        echo "El destructor se ha ejecutado";
    }
}





?>