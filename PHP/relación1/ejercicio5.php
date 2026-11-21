
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Temperaturas semanales</title>

        <style>
            table {
                border-collapse: collapse;
                width: 50%;
            }

            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: lightblue;
            }
        </style>
    </head>
    <body>

        <?php

        // Array asociativo constante
        const TEMPERATURAS = [
            "Lunes" => 22.5,
            "Martes" => 24.3,
            "Miércoles" => 23.8,
            "Jueves" => 25.6,
            "Viernes" => 26.2,
            "Sábado" => 27.4,
            "Domingo" => 24.9
        ];

        // 1. Temperatura del primer día
        echo "<h3>Temperatura del primer día:</h3>";

        $primerDia = array_key_first(TEMPERATURAS);
        echo $primerDia . ": " . TEMPERATURAS[$primerDia] . " ºC";


        // 2. Temperaturas secuencialmente
        echo "<h3>Temperaturas de todos los días:</h3>";

        foreach (TEMPERATURAS as $dia => $temperatura) {
            echo $dia . ": " . $temperatura . " ºC<br>";
        }


        // 3. Lista numerada
        echo "<h3>Lista numerada de temperaturas:</h3>";

        echo "<ol>";

        foreach (TEMPERATURAS as $dia => $temperatura) {
            echo "<li>" . $dia . ": " . $temperatura . " ºC</li>";
        }

        echo "</ol>";

        // 4. Tabla de temperaturas
        echo "<h3>Tabla de temperaturas:</h3>";

        echo "<table>";
        echo "<tr><th>Día</th><th>Temperatura máxima</th></tr>";

        foreach (TEMPERATURAS as $dia => $temperatura) {
            echo "<tr>";
            echo "<td>" . $dia . "</td>";
            echo "<td>" . $temperatura . " ºC</td>";
            echo "</tr>";
        }

        echo "</table>";

        // 5. Acumulación de temperaturas
        $total = 0;

        foreach (TEMPERATURAS as $temperatura) {
            $total += $temperatura;
        }

        echo "<h3>Temperatura acumulada:</h3>";
        echo $total . " ºC";

        ?>

    </body>
</html>
