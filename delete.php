<?php

include("conexion.php");
$con=conectar();

$cod_zapato=$_GET['id'];

$sql="DELETE FROM zapatos  WHERE cod_zapato='$cod_zapato'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: zapatos.php");
    }
?>