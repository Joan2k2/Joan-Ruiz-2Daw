<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    class Persona{
        private $nombre;
        private $edad;

        public function getNombre(){
            return $this->nombre;
        }
        public function getEdad(){
            return $this->edad;
        }

        public function __construct($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;


        }

        public function saludar(){
            echo("Hola me llamo $this->nombre y mi edad es $this->edad"."\n");
        }
        


    }

    ?>

</body>

</html>