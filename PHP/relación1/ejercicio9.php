<!DOCTYPE html>
<html lang="es">
    <body>
        <?php

        // 1. Declarar los tres lados del triángulo
        $lado1 = 5;
        $lado2 = 5;
        $lado3 = 8;

        // 2. Comprobar si los lados forman un triángulo válido
        if (($lado1 + $lado2 > $lado3) and
            ($lado1 + $lado3 > $lado2) and
            ($lado2 + $lado3 > $lado1)) {

            echo "Los lados forman un triángulo.<br>";

            // 3. Clasificar el triángulo
            if (($lado1 == $lado2) and ($lado2 == $lado3)) {

                echo "El triángulo es EQUILÁTERO.";

            } elseif (($lado1 == $lado2) or
                    ($lado1 == $lado3) or
                    ($lado2 == $lado3)) {

                echo "El triángulo es ISÓSCELES.";

            } else {

                echo "El triángulo es ESCALENO.";
            }

        } else {

            echo "Los lados introducidos NO forman un triángulo.";
        }

        ?>

    </body>
</html>