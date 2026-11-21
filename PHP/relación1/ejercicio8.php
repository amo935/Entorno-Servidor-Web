<!DOCTYPE html>
<html lang="es">
    <body> 
        <?php

        /* Declaramos un array asociativo con la rúbrica de calificaciones (los valores
        pueden ser cambiados por otros) */
        $rubrica = [
            "inicial" => 0.10,
            "primera" => 0.20,
            "segunda" => 0.30,
            "tercera" => 0.40
        ];

        // 2. Declaramos otro array asociativo con las notas de una persona
        $notas = [
            "inicial" => 6.5,
            "primera" => 7.0,
            "segunda" => 8.0,
            "tercera" => 9.0
        ];

        // 3. Inicializar la nota final
        $notaFinal = 0;

        // 4. Recorrer la rúbrica y calcular la nota final
        foreach ($rubrica as $calificacion => $peso) {

            // Acceder a la nota correspondiente mediante la clave
            $notaFinal += $notas[$calificacion] * $peso;
        }

        // 5. Mostrar las notas y el resultado
        echo "<h3>Notas de la persona:</h3>";

        foreach ($notas as $calificacion => $nota) {
            echo $calificacion . ": " . $nota . "<br>";
        }

        echo "<h3>Nota final:</h3>";

        echo "Nota final: " . number_format($notaFinal, 2) . "<br>";

        // 6. Comprobar si aprueba o suspende
        if ($notaFinal >= 5) {
            echo "Resultado: APROBADO";
        } else {
            echo "Resultado: SUSPENDIDO";
        }

        ?>

    </body>
</html>