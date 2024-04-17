<?php
$nombre="juan";
$edad=35;
$nota=7.5;


// Imprimir mostrando una etiqueta del siguiente valor
//variable nombre=string(4)
//
ob_start ();
var_dump($nombre);
$tiponombre=ob_get_clean();
echo "Variable de Nombre es: $tiponombre";

ob_start ();
var_dump($edad);
$tipoedad=ob_get_clean();
echo "Variable de Edad es: $tipoedad";

ob_start ();
var_dump($nota);
$tiponota=ob_get_clean();
echo "Variable de Nota es: $tiponota";
?>