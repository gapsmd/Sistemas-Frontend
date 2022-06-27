<?php
require_once 'includes/header.html';
require_once 'ofertaEducativa-controller.php';
$imprimir1erSemestre = imprimir1erSemestre();
$imprimir2doSemestre = imprimir2doSemestre();
$imprimir3erSemestre = imprimir3erSemestre();
$imprimir4toSemestre = imprimir4toSemestre();
$imprimir5toSemestre = imprimir5toSemestre();
$imprimir6toSemestre = imprimir6toSemestre();
$imprimir7moSemestre = imprimir7moSemestre();
$imprimir8voSemestre = imprimir8voSemestre();
$imprimir9noSemestre = imprimir9noSemestre();

$imprimirEspecialidad = imprimirEspecialidad();
require_once 'ofertaEducativa-vista.html';
require_once 'includes/footer.html';
?>