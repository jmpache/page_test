<?php
include 'db.php';

$type1 = $_POST['estandar'];
$type2 = $_POST['superior'];

$op = new DatabaseOp();
$op -> changePrices($type1, $type2);

?>