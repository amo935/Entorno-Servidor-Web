<!DOCTYPE html>
<html>
<body>

    <h1>Tipos de datos PHP</h1>

    <?php

        // Creamos una variable booleana con valor verdadero
        $bool = true;
        echo "<h2>Boleano</h2>";
        var_dump($bool); // Comprobamos el valor y tipo de dato de la vaiable
        printf("%d", $bool); // Mostramos el valor como número

        /* Creamos una variable con un número entero, comprobamos su 
        contenido y lo mostramos */
        $int = 25;
        echo "<h2>Número entero</h2>";
        var_dump($int); 
        printf("%d", $int); // Mostramos el número entero

        /* Creamos una variable que contiene texto, comprobamos su 
        contenido y mostramos el número con dos decimales */
        $float = 15.5;
        echo "<h2>Número decimal</h2>";
        var_dump($float); 
        printf("%.2f", $float); 

        /* Creamos una variable que contiene texto, comprobamos su 
        contenido y lo mostramos */
        $string = "Hello World";
        echo "<h2>Texto</h2>";
        var_dump($string); 
        printf("%s", $string); 

    ?>

</body>
</html>