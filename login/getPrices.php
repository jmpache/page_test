<?php
include './login/db.php';
$op = new DatabaseOp();
$prices = $op -> getPrices();
for ($i=0; $i < count($prices); $i++) { 
    $estandar = $prices[0];
    $superior = $prices[1];
}
?>