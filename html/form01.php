
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$mostrar_formulario = true;

if (isset($_GET['texto'])){
    $texto = $_GET['texto'];
    echo "Texto recibido es : ".$texto. "<br>";
    // Ocultar el formulario después de recibir el texto
    $mostrar_formulario = false;
}
?>

    <?php
    if ($mostrar_formulario) {
    ?>
    <form method="GET" action="">
        <label for="texto"> Introduce u texto.</label>
        <input type="text" id="texto" name="texto">
        <button type="submit">Enviar</button>
    </form>
    <?php
    }
    ?>
</body>
</html>
