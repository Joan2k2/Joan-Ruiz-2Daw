<!DOCTYPE html>
<html lang="en">

<body>
    <h2>


        <?php

        function calcularFactorial($a)
        {

            $factorial = 1;

            for ($i = $a; $i > 0; $i--) {
                $factorial = $factorial * $i;
            }
            return $factorial;
        }

        function calcularFactorialDe3()
        {




            $almacen = array(calcularFactorial(7), calcularFactorial(2), calcularFactorial(8));



            $cant = count($almacen);
            for ($i = 0; $i <    $cant; $i++) {

                if ($i == 0) {
                    $min = $almacen[$i];
                    $max = $almacen[$i];
                }

                if ($almacen[$i] > $max) {
                    $max = $almacen[$i];
                }
                if ($almacen[$i] < $min) {
                    $min = $almacen[$i];
                }
            }
            print("El numero menor del factorial es " . $min . " El numero mayor del factorial es " . $max);
        }

        calcularFactorialDe3();


        ?>
    </h2>
</body>

</html>