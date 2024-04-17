<?php
// Generar un número aleatorio (0 o 1)
$resultado = rand(0, 1);

// Configurar el tipo de contenido como imagen SVG
header("Content-type: image/svg+xml");

// Ruta a tus imágenes locales
$cara_path = "img/cara.svg";
$cruz_path = "img/cruz.svg";

// Función para ajustar el tamaño de la imagen SVG
function resize_svg($svg_content, $width, $height) {
    // Remplazar el tamaño original con el nuevo tamaño
    $svg_content = preg_replace('/width="[^"]+"/', 'width="' . $width . '"', $svg_content);
    $svg_content = preg_replace('/height="[^"]+"/', 'height="' . $height . '"', $svg_content);
    return $svg_content;
}

// Tamaño deseado para las imágenes
$width = 200;
$height = 200;

// Mostrar la imagen SVG según el resultado
if ($resultado == 0) {
    // Leer el contenido de la imagen de cara
    $cara_svg = file_get_contents($cara_path);
    // Ajustar el tamaño de la imagen de cara
    $cara_svg_resized = resize_svg($cara_svg, $width, $height);
    echo $cara_svg_resized;
} else {
    // Leer el contenido de la imagen de cruz
    $cruz_svg = file_get_contents($cruz_path);
    // Ajustar el tamaño de la imagen de cruz
    $cruz_svg_resized = resize_svg($cruz_svg, $width, $height);
    echo $cruz_svg_resized;
}
?>
