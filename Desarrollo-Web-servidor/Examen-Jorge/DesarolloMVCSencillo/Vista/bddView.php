<?php

class BddView{
//muestra una despedida
    function mostrarDatosClientes($array){
          //Generamos la tabla tomando de base el array que recibimos de la consulta

          echo '<table border="1">';

        //   echo '<tr>';
  
        //   echo '<th>Título</th>';
  
        //   echo '<th>Descripción</th>';
  
        //   echo '<th>Fecha de Creación</th>';
  
        //   echo '<th>Fecha de Vencimiento</th>';
  
        //   echo '</tr>';
  
     
           //el titulo, descripcion etc son los nombres que estan en el array que coinciden con los de la bdd 
          foreach ($array as $cliente) {
  
              echo '<tr>';
  
              echo '<td>' . $cliente['NOMBRE'] . '</td>';
  
              echo '<td>' . $cliente['CIUDAD'] . '</td>';
  
              echo '</tr>';
  
          }
  
     
  
          echo '</table>';
        

    }

    function mostrarDatosEmpleados($array){
        //Generamos la tabla tomando de base el array que recibimos de la consulta

        echo '<table border="1">';

        // echo '<tr>';

        // echo '<th>Título</th>';

        // echo '<th>Descripción</th>';

        // echo '<th>Fecha de Creación</th>';

        // echo '<th>Fecha de Vencimiento</th>';

        // echo '</tr>';

   
         //el titulo, descripcion etc son los nombres que estan en el array que coinciden con los de la bdd 
        foreach ($array as $empleado) {

            echo '<tr>';

            echo '<td>' . $empleado['APELLIDOS'] . '</td>';

            echo '<td>' . $empleado['OFICIO'] . '</td>';


            echo '</tr>';

        }

   

        echo '</table>';
      

  }

  function mostrarEmpleado($array){
    //Generamos la tabla tomando de base el array que recibimos de la consulta

    echo '<table border="1">';

    // echo '<tr>';

    // echo '<th>Título</th>';

    // echo '<th>Descripción</th>';

    // echo '<th>Fecha de Creación</th>';

    // echo '<th>Fecha de Vencimiento</th>';

    // echo '</tr>';


     //el titulo, descripcion etc son los nombres que estan en el array que coinciden con los de la bdd 
    foreach ($array as $empleado) {

        echo '<tr>';

        echo '<td>' . $empleado['JEFE'] . '</td>';

        echo '<td>' . $empleado['APELLIDOS'] . '</td>';
        echo '<td>' ."FECHA-ALTA:". $empleado['FECHA_ALTA'] . '</td>';
        echo '<td>' ."SALARIO:". $empleado['SALARIO'] . '</td>';
        echo '<td>' ."COMISION:". $empleado['COMISION'] . '</td>';


        echo '</tr>';

    }



    echo '</table>';

    echo'<a href="http://localhost/Examen-Jorge/DesarolloMVCSencillo/router.php?route=employees">Lista Empleados</a>';
  

}

function mostrarCliente($array){
    //Generamos la tabla tomando de base el array que recibimos de la consulta

    echo '<table border="1">';



     //Coincidenlos nombres que estan en el array que coinciden con los de la bdd 
    foreach ($array as $cliente) {

        echo '<tr>';

        echo '<td>' . $cliente['CLIENTE_COD'] . '</td>';

        echo '<td>' . $cliente['NOMBRE'] . '</td>';
        echo '<td>' . $cliente['DIREC'] . $cliente['CIUDAD'] . $cliente['ESTADO'].$cliente['AREA'].'</td>';
        echo '<td>' ."TEL:". $cliente['TELEFONO'] . '</td>';
        echo '<td>' .$cliente['LIMITE_CREDITO'] ."€". '</td>';
        echo '<td>' . $cliente['OBSERVACIONES'] . '</td>';

        echo '</tr>';

    }



    echo '</table>';

    echo'<a href="http://localhost/Examen-Jorge/DesarolloMVCSencillo/router.php?route=clients">Lista Clientes</a>';
  

}

}




?>