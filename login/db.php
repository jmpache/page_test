<?php

class DatabaseOp{
    private $servidor = '127.0.0.1';
    private $usuario = 'root';
    private $pass = '';
    private $basedatos = 'cityhotel';

    public function Conectar(){
        $con = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->basedatos) or die ('No conecta');
        return $con;
    }

    public function Login($usu, $pass){
        $sql = "SELECT * FROM usuarios WHERE username = '$usu' AND userpass = '$pass'";
        $con = $this->Conectar();
        $res = mysqli_query($con, $sql);
        if ($res){
            $_SESSION['usuario'] = $usu;
            header('Location:../adminPage.php');
        }else{
            echo 'Usuario inexistente <br>';
            echo '<a href="../index.html">Volver a inicio</a>';
        }
    }

    public function changePrices($type1, $type2){
        $sql = "UPDATE habitaciones 
                SET precio = CASE 
                                WHEN tipo = 'estandar' THEN '$type1' 
                                WHEN tipo = 'superior' THEN '$type2'
                             END
                WHERE tipo IN ('estandar', 'superior')";
        $con = $this->Conectar();
        $res = mysqli_query($con, $sql);
        $alert = false;
        if ($res){
            header('Location:../adminPage.php?alert=true');
        }else{
            echo 'No se pudo insertar <br>';
            echo '<a href="../index.html">Volver a inicio</a>';
        }
    }

    public function getPrices(){
        $sql = "SELECT precio FROM habitaciones";
        $con = $this->Conectar();
        $data = array();
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row["precio"];
            }
        } else
            {
                echo "0 results";
            };
        return $data;
    }
}



?>