<?php
include "conexion.php";
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sqlinsert = "INSERT INTO estudiantes(CED_EST,NOM_EST,APE_EST,TEL_EST,DIR_EST,EST_EST)
VALUES('$cedula','$nombre','$apellido','$telefono','$direccion','I');";

if($conn->query($sqlinsert)===TRUE)
{
    echo json_encode("Se registro correctamente");
}else
{
    echo json_encode("Error al registrar estudiante");
}

?>