<?php
    class view{

        public function mostrarTareas($tareas){
            echo "<ul>";
                foreach ($tareas as $tarea ) {
                    echo "<li>$tarea</li>";
        
                }
            echo"</ul>";    
        }
        
        public function mostrarFormulario(){
        
            echo "<form method = 'post' action = 'index.php'>";
            echo "<input type = 'text' name = 'tarea' placeholder = 'Nuevo'>";
            echo "<input type = 'submit' value = 'Agreagar'>";
            echo "</form>";
        
        }
        
        }
?>

