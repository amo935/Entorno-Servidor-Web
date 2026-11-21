<!DOCTYPE html>
<html lang="es">
    <body> 

        <?php

        // 1. Declaramos las notas iniciales
        $nota1 = 7.5;
        $nota2 = 6.5;

        // 2. Declaramos el número de faltas sin justificar
        $faltas = 3;

        // 3. Calcular la media de las dos notas
        $media = ($nota1 + $nota2) / 2;

        // 4. Descontamos 0.25 puntos por cada falta a la media realizada anteriormente
        $notaFinal = $media - ($faltas * 0.25);

        // 5. Mostramos los resultados
        echo "Primera nota: " . $nota1 . "<br>";
        echo "Segunda nota: " . $nota2 . "<br>";
        echo "Media inicial: " . $media . "<br>";
        echo "Faltas sin justificar: " . $faltas . "<br>";
        echo "Nota final: " . $notaFinal . "<br>";

        // 6. Comprobamos si aprueba o suspende
        if ($notaFinal >= 5) {
            echo "Resultado: APROBADO";
        } 
        
        elseif ($notaFinal < 5) {
            echo "Resultado: SUSPENDIDO";
        }

        ?>

    </body>
</html>