<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

// Definir variables globales para el array y sus parámetros
$array_resultante = [];

// Función para inicializar el array global
function inicializar_array( $numero_de_elementos, $min, $max) {
    global $array_resultante;
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $array_resultante[] = rand($min, $max);
    }
}

// Llamar a la función para inicializar el array global
inicializar_array(5,1,50);

// Imprimir el array resultante
print_r($array_resultante);

?>







    
</body>
</html>