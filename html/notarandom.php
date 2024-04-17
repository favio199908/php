<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Crear un array de notas de forma aleatoria
$notas = array();
for ($i = 0; $i < 10; $i++) {
    $nota = rand(0, 10); // Generar una nota aleatoria entre 0 y 10
    $notas[] = $nota; // Agregar la nota al array
}

// Recorrer todas las notas ingresadas
foreach ($notas as $nota) {
    // Mostrar la nota
    echo "Nota: $nota - ";

    // Evaluar la nota utilizando switch
    switch ($nota ) {
        case ($nota < 5):
            echo "Insuficiente";
            break;
        case ($nota >= 5 && $nota < 6):
            echo "Suficiente";
            break;
        case ($nota >= 6 && $nota < 7):
            echo "Bien";
            break;
        case ($nota >= 7 && $nota < 9):
            echo "Notable";
            break;
        case ($nota >= 9 && $nota <= 10):
            echo "Sobresaliente";
            break;
        default:
            echo "Nota fuera de rango";
    }

    echo "<br>";
}
?>

</body>
</html>