<!DOCTYPE html>
<html lang="es">
    <body>
        <?php

        echo "RESOLUCIÓN DE ECUACIONES DE SEGUNDO GRADO\n";
        echo "========================================\n";

        $a = (float) readline("Introduce un número: ");
        $b = (float) readline("Introduce otro número: ");
        $c = (float) readline("Introduce un tercer número: ");

        if ($a == 0) {
            echo "No es una ecuación de segundo grado.\n";
        } 
        
        else {

            // Calculamos el discriminante
            $discriminante = pow($b, 2) - (4 * $a * $c);

            if ($discriminante < 0) {
                echo "No existen soluciones reales.\n";
            } 
            
            else {

                if ($discriminante == 0) {

                    // Una única solución real
                    $x = -$b / (2 * $a);

                    echo "Existe una única solución real:\n";
                    echo "x = " . $x . "\n";

                } 
                
                else {

                    // Dos soluciones reales
                    $raiz = sqrt($discriminante);

                    $x1 = (-$b + $raiz) / (2 * $a);
                    $x2 = (-$b - $raiz) / (2 * $a);

                    echo "Existen dos soluciones reales:\n";
                    echo "x1 = " . $x1 . "\n";
                    echo "x2 = " . $x2 . "\n";
                }
            }
        }
        ?>

    </body>
</html>