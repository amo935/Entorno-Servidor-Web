<!DOCTYPE html>
<html lang="es">
    <body>  
        <?php

        // 1. Declaración de la clase Fruta
        class Fruta {

            // Atributos privados
            private $nombre;
            private $color;

            // Constructor
            public function __construct($nombre, $color) {
                $this->nombre = $nombre;
                $this->color = $color;
            }

            // Setter: establece el nombre
            public function set_name($nombre) {
                $this->nombre = $nombre;
            }

            // Getter: devuelve el nombre
            public function get_name() {
                return $this->nombre;
            }
        }

        // 2. Crear e inicializar los objetos
        $apple = new Fruta("Apple", "Rojo");
        $banana = new Fruta("Banana", "Amarillo");

        // 3. Mostrar los nombres por pantalla
        echo "Nombre de la primera fruta: " . $apple->get_name() . "<br>";

        echo "Nombre de la segunda fruta: " . $banana->get_name() . "<br>";

        // Modificar los nombres mediante setters
        $apple->set_name("Manzana");
        $banana->set_name("Plátano");

        // Mostrar el nombre actualizado
        echo "Nombre actualizado 1: " . $apple->get_name();
        echo "Nombre actualizado 1: " . $banana->get_name();
        ?>

    </body>
</html>