<?php
require_once 'crud.php';

$id_forma = $_GET["id_formacao"] ?? '';
$id_e = $_GET["id_exp"] ?? '';


if ($id_forma == True) {
    $apagar = delete($pdo, 'formacao', 'id_formacao = '.$id_forma);
}

if ($id_e == True) {
    $apa = delete($pdo, 'experiencias', 'id_exp ='.$id_e);
}



header('Location: index.php');