<!DOCTYPE html>
<html>
    <body>

        <?php
        // Declaramos un array constante con los días de la semana
        const DIAS_SEMANA = [
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sábado",
            "Domingo"
        ];

        // 1. Mostramos el primer día de la semana
        echo "<h3>Primer día de la semana:</h3>";
        echo DIAS_SEMANA[0];

        // 2. Mostramos todos los días secuencialmente
        echo "<h3>Días de la semana:</h3>";

        foreach (DIAS_SEMANA as $dia) {
            echo $dia . "<br>";
        }

        // 3. Mostramos los días en una lista numerada
        echo "<h3>Días en una lista numerada:</h3>";

        echo "<ol>";

        foreach (DIAS_SEMANA as $dia) {
            echo "<li>" . $dia . "</li>";
        }

        echo "</ol>";

        ?>

    </body>
</html>