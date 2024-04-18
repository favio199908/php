<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
<?php

// Array asociativo
$capitales = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);
ksort($capitales);
// Convertir las claves a mayúsculas
$capitales = array_change_key_case($capitales, CASE_UPPER);

// Convertir los valores a mayúsculas
$capitales = array_map('strtoupper', $capitales);
// Mostrar los elementos del array siguiendo el patrón
foreach ($capitales as $pais => $capital) {
    echo "La capital de $pais es $capital\n";
}
echo "<br>";
// Obtener una clave aleatoria
$clave_aleatoria = array_rand($capitales);

// Mostrar el elemento correspondiente a la clave aleatoria
echo "La capital de $clave_aleatoria es " . $capitales[$clave_aleatoria];
?>



</body>
</html>