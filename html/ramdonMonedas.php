<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamiento de Monedas</title>
</head>
<body>
    <h2>Lanzamiento de Monedas</h2>
    <form method="POST" action="">
        <label for="num_monedas">Selecciona el número de monedas (1-20):</label>
        <input type="number" id="num_monedas" name="num_monedas" min="1" max="20" required>
        <br>
        <label for="tipo_moneda">Selecciona el tipo de moneda:</label>
        <select id="tipo_moneda" name="tipo_moneda" required>
            <option value="Dólar Estadounidense">Dólar Estadounidense</option>
            <option value="Euro">Euro</option>
            <option value="Yen japonés">Yen japonés</option>
            <option value="Libra esterlina">Libra esterlina</option>
            <option value="Franco suizo">Franco suizo</option>
        </select>
        <br>
        <button type="submit">Lanzar Monedas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_monedas = $_POST["num_monedas"];
        $tipo_moneda = $_POST["tipo_moneda"];
            
        echo "<h3>Resultados del lanzamiento de $num_monedas monedas de $tipo_moneda:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= $num_monedas; $i++) {
            $resultado = rand(0, 1); // 0 para cara, 1 para cruz
            echo "<li>Moneda $i: " . ($resultado == 0 ? "Cara" : "Cruz") . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
