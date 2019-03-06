<?php
    include 'db.php';
    session_start();

    $usu = $_POST['usrnm'];
    $pass = $_POST['psswrd'];

    $op = new DatabaseOp();
    $op->Login($usu, $pass);

 ?>