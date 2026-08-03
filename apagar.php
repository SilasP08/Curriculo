<?php
require_once 'crud.php';

$id_forma = $_POST["id_formacao"];

$apagar =delete($pdo, 'formacao', 'id_formacao = '.$id_forma);

header('Location: index.php');