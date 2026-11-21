<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>

    <?php
    // Texto normal
    echo "Hello World";

    // Encabezado de nivel 2
    echo "<h2>Hello World</h2>";

    // Párrafo con estilo
    echo "<p style='color:blue; font-size:28px; text-align:center;'>Fusce 
    purus dolor, imperdiet eget lacinia at, mattis eget nibh. Integer 
    consequat risus felis, ut commodo nunc placerat vitae. Praesent 
    scelerisque eros sed rutrum scelerisque. Fusce odio massa, scelerisque 
    vel sapien eu, scelerisque rutrum lorem. Fusce pretium tempor quam, in 
    commodo dui maximus at. Mauris tristique nunc orci, non bibendum tortor 
    posuere a. Aenean maximus ante nunc, sit amet gravida odio rhoncus eu. 
    Nulla pharetra metus quis ante viverra rutrum. Ut molestie facilisis 
    mauris, vel rhoncus urna bibendum ut. Nam nulla dolor, vulputate et 
    ultrices non, scelerisque ac magna. Vestibulum faucibus dapibus mollis. 
    Aliquam ut tempor ipsum, sed elementum purus.</p>";

    // Salto de línea entre palabras
    echo "Hello<br>World";

    // Versión de PHP
    echo "<h2>Versión de PHP</h2>";
    echo phpversion();

    // Información de PHP
    echo "<h2>Información de PHP</h2>";
    phpinfo();

    // Fecha y hora
    echo "<h2>Fecha y hora</h2>";
    date_default_timezone_set("Europe/Madrid");
    echo date("d/m/Y H:i:s");
    ?>

</body>
</html>

