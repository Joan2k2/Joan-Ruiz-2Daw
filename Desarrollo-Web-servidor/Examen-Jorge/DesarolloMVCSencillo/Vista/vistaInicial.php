<?php

class VistaInicial{
//carga el inicio con desplegable
    public function muestraIniio(){

      echo'<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
      </head>
      <body>
          <form name="formulario1" method="post" action="">
              <label>MIS SITIOS</label>
              <select name="destinos" onchange="location.href=formulario1.destinos.value;">
              <option value="http://localhost/Examen-Jorge/DesarolloMVCSencillo/router.php?route=clients">clientes</option>
              <option value="http://localhost/Examen-Jorge/DesarolloMVCSencillo/router.php?route=employees">empleados</option>

              </select>
              </form>
        </form>
      </body>
      </html>';



    }
}


?>