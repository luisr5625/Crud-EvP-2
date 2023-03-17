<?php
include("conexion.php");
$con=conectar();

$cod_zapato=$_POST['cod_zapato'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$sql="INSERT INTO zapatos VALUES('$cod_zapato','$marca','$modelo','$color')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: zapatos.php");
    
}else {
}
?>