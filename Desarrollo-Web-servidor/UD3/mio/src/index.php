<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

require_once "../vendor/autoload.php";
use Joan\App\modelo\ClaseA;
use Joan\App\pepito\ClaseB;
$miclase=new ClaseA();
$miclase->mostrar();

$miclase2=new ClaseB();
$miclase2->mostrar();


echo"Hola";

?>