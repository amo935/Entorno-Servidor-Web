<!DOCTYPE html>
<html lang="es">
    <body>

        <?php

        /**
         * Lee un coeficiente y valida que sea numérico y finito.
         */
        function leerCoeficiente(string $nombre): float
        {
            do {
                $entrada = trim(readline("Introduce el coeficiente $nombre: "));

                if (!is_numeric($entrada)) {
                    echo "Error: introduce un valor numerico valido.\n";
                    $valido = false;
                } 
                
                else {
                    $valor = (float) $entrada;

                    if (!is_finite($valor)) {
                        echo "Error: el valor debe ser finito.\n";
                        $valido = false;
                    } 
                    
                    else {
                        $valido = true;
                    }
                }
            } while (!$valido);

            return $valor;
        }

        /**
         * Resuelve ax² + bx + c = 0.
         */
        function resolverEcuacion(float $a, float $b, float $c): void
        {
            echo "\nEcuacion: {$a}x^2 + {$b}x + {$c} = 0\n";

            // NIVEL 1: Comprobar si es una ecuacion de segundo grado
            if ($a == 0) {

                // NIVEL 2: Ecuacion lineal o degenerada
                if ($b != 0) {
                    $x = -$c / $b;

                    echo "Ecuacion de primer grado.\n";
                    echo "Solucion: x = $x\n";

                } else {

                    // NIVEL 3: Comprobar si es imposible o indeterminada
                    if ($c == 0) {
                        echo "Infinitas soluciones.\n";
                    } else {
                        echo "No existe solucion.\n";
                    }
                }

            } 
            
            else {

                // NIVEL 2: Ecuacion de segundo grado
                if ($b == 0) {

                    // NIVEL 3: No existe termino de primer grado
                    $valor = -$c / $a;

                    if ($valor >= 0) {
                        $raiz = sqrt($valor);

                        $x1 = -$raiz;
                        $x2 = $raiz;

                        echo "Raices simetricas:\n";
                        echo "x1 = $x1\n";
                        echo "x2 = $x2\n";

                    } 
                    
                    else {
                        echo "No existen soluciones reales.\n";
                    }

                } 
                
                else {

                    // NIVEL 3: Comprobar si c es cero
                    if ($c == 0) {

                        // Sacamos factor comun: x(ax + b) = 0
                        $x1 = 0;
                        $x2 = -$b / $a;

                        echo "Resolucion sacando factor comun:\n";
                        echo "x1 = $x1\n";
                        echo "x2 = $x2\n";

                    } 
                    
                    else {

                        // NIVEL 4: Caso general
                        $discriminante = pow($b, 2) - (4 * $a * $c);

                        if ($discriminante < 0) {
                            echo "No existen soluciones reales.\n";

                        } 
                        
                        else {

                            if ($discriminante == 0) {
                                $x = -$b / (2 * $a);

                                echo "Una raiz real doble:\n";
                                echo "x = $x\n";

                            } 
                            
                            else {
                                $raiz = sqrt($discriminante);

                                $x1 = (-$b + $raiz) / (2 * $a);
                                $x2 = (-$b - $raiz) / (2 * $a);

                                echo "Dos raices reales:\n";
                                echo "x1 = $x1\n";
                                echo "x2 = $x2\n";
                            }
                        }
                    }
                }
            }
        }

        // PROGRAMA PRINCIPAL

        echo "====================================\n";
        echo " RESOLUTOR DE ECUACIONES DE SEGUNDO GRADO\n";
        echo "====================================\n";

        $a = leerCoeficiente("a");
        $b = leerCoeficiente("b");
        $c = leerCoeficiente("c");

        resolverEcuacion($a, $b, $c);

        ?>

    </body>
</html>