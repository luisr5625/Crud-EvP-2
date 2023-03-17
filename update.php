<?php

include("conexion.php");
$con=conectar();

$cod_zapato=$_POST['cod_zapato'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$sql="UPDATE zapatos SET  marca='$marca',modelo='$modelo',color='$color', WHERE cod_zapato='$cod_zapato'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>