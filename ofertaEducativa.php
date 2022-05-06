<?php
require_once 'includes/header.html';
require_once 'modelodata.php';
$imprimir1erSemestre = imprimir1erSemestre();
$imprimir2doSemestre = imprimir2doSemestre();
$imprimir3erSemestre = imprimir2doSemestre();
$imprimir4toSemestre = imprimir2doSemestre();
require_once 'ofertaEducativa-vista.html';
require_once 'includes/footer.html';
?>