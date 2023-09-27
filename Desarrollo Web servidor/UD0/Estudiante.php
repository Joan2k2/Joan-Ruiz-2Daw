    <?php
    class Estudiante extends Persona{
        private $curso;
        
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso=$curso;


        }

        public function __construct($nombre,$edad,$curso){
            parent:: __construct($nombre,$edad);
            $this->curso = $curso;

        }

        public function estudiar(){
            echo("Hola me llamo {$this->getNombre()} y mi edad es {$this->getEdad()} y estoy cursando {$this->curso}");
        }
        


    }

    ?>
