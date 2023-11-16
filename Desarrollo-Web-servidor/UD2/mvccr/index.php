<?php
#Puedes acceder a la lista de tareas visitando index.php?route=list y agregar nuevas tareas visitando
# index.php?route=add. Esto facilita la expansión de la aplicación con más rutas y controladores según
#sea necesario.
#http://localhost/ud2/mvcsencillo3/index.php?route=add
#http://localhost/ud2/mvcsencillo3/index.php?route=list

#solucion 1
#header("Location: router.php?".$_SERVER['QUERY_STRING']);


#solucion 2
#$route = $_GET['route'];
#header("Location: router.php?route=".$route);


#solucion 3
require_once './router.php';
?>