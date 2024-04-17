<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$edades = array("juan" => 0, "maria" => 0, "paco" => 0, "pedro" => 0, "jose" => 0);

// Agregar 5 elementos de edades de forma aleatoria (solo números impares entre 20 y 80)
foreach ($edades as $nombre => $edad) {
    $edad = rand(20, 80); // Generar una edad aleatoria entre 20 y 80
    if ($edad % 2 != 0) { // Verificar si la edad es impar
        $edades[$nombre] = $edad; // Asignar la edad al nombre correspondiente
    } else {
        // Generar una nueva edad hasta obtener un número impar
        do {
            $edad = rand(20, 80);
        } while ($edad % 2 == 0);
        $edades[$nombre] = $edad; // Asignar la edad al nombre correspondiente
    }
}

// Mostrar las edades asignadas a cada nombre
foreach ($edades as $nombre => $edad) {
    echo "Nombre: $nombre - Edad: $edad <br>";
}
?>
</body>
</html>
