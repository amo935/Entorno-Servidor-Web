<!DOCTYPE html>
<html>
    <body>
        <?php
        // Variables de $_SERVER que queremos mostrar
        $variables = [
            'DOCUMENT_ROOT',
            'PHP_SELF',
            'SERVER_NAME',
            'SERVER_SOFTWARE',
            'SERVER_PROTOCOL',
            'HTTP_HOST',
            'HTTP_USER_AGENT',
            'REMOTE_ADDR',
            'REMOTE_PORT',
            'SCRIPT_FILENAME',
            'REQUEST_URI'
        ];

        // Mostramos los valores en una lista no numerada
        echo "<h2>Información del servidor (\$_SERVER)</h2>";
        echo "<ul>";

        foreach ($variables as $variable) {
            $valor = $_SERVER[$variable] ?? 'No disponible';

            echo "<li><strong>$variable:</strong> "
            . htmlspecialchars((string)$valor, ENT_QUOTES, 'UTF-8')
            . "</li>";
        }

        echo "</ul>";

        // Volcado de $_SERVER con var_dump()
        echo "<h2>Volcado con var_dump()</h2>";
        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";

        // Volcado de $_SERVER con print_r()
        echo "<h2>Volcado con print_r()</h2>";
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        ?>

    </body>
</html>