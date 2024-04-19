<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos Aleatorios</title>
</head>
<body>
    <h2>Generador de Números Primos Aleatorios</h2>

    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function imprimirArrayConIndices($array) {
        echo "<ul>";
        foreach ($array as $indice => $valor) {
            echo "<li>$indice: $valor</li>";
        }
        echo "</ul>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $numeros_primos = [];

        echo "<h3>Números primos generados:</h3>";
        for ($i = 0; $i < $cantidad; $i++) {
            $numero = rand(1, 100); // Genera un número aleatorio entre 1 y 100
            if (esPrimo($numero)) {
                $numeros_primos[] = $numero;
            }
        }
        imprimirArrayConIndices(array_unique($numeros_primos));
        echo "<p>Cantidad de números primos generados: " . count(array_unique($numeros_primos)) . "</p>";
    ?>
    <p><a href="primosQueRepiten.php">Volver a la página de generación de números primos</a></p>
    <?php
    } else {
    ?>
    <form method="POST" action="">
        <label for="cantidad">Ingrese la cantidad de números a generar:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" max="100" required>
        <button type="submit">Generar Números</button>
    </form>
    <?php
    }
    ?>
</body>
</html>
