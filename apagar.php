<?php
require_once 'crud.php';

$id_forma = $_POST["id_formacao"];

$apagar =delete($pdo, 'formacao', $id_forma);