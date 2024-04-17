<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$edades = array("juan" => "0","maria" => "0","paco" => "0","pedro" => "0","jose" => "0",);
for ($i = 0; $i < 10; $i++) {
    $nota = rand(0, 10); // Generar una nota aleatoria entre 0 y 10
    $notas[] = $nota; // Agregar la nota al array
}
foreach ($edades as $clave => $valor) {
    echo "clave:". $clave."-valor:".$valor;
    echo "<br>";
    # code...
}
?>
</body>
</html>
