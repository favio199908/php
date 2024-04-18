<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$nombres = array(
    "Juan",
    "María",
    "José",
    "Ana",
    "Luis",
    "Laura",
    "Carlos",
    "Sofía",
    "Pedro",
    "Elena"
);

$apellidos = array(
    "González",
    "Rodríguez",
    "Fernández",
    "López",
    "Martínez",
    "Sánchez",
    "Pérez",
    "Gómez",
    "Martín",
    "Jiménez"
);

function generar_nombres_aleatorios($cantidad) {
    global $nombres, $apellidos;
    $nombres_aleatorios = array();

    for ($i = 0; $i < $cantidad; $i++) {
        $nombre_aleatorio = $nombres[array_rand($nombres)];
        $apellido_aleatorio = $apellidos[array_rand($apellidos)];
        $nombre_completo = $nombre_aleatorio . ' ' . $apellido_aleatorio;
        $nombres_aleatorios[] = $nombre_completo;
    }

    return $nombres_aleatorios;
}

// Ejemplo de uso: Generar 5 nombres aleatorios
$nombres_generados = generar_nombres_aleatorios(10);
print_r($nombres_generados);

?>




    
</body>
</html>