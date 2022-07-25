<?php
include "conexion.php";
$cedula=$_GET['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sqlinsert = "UPDATE estudiantes
SET NOM_EST='$nombre',APE_EST='$apellido',TEL_EST='$telefono',DIR_EST='$direccion'
WHERE CED_EST='$cedula'";

if($conn->query($sqlinsert)===TRUE)
{
    echo json_encode("Se actualizo correctamente");
}else
{
    echo json_encode("Error al actualizar estudiante");
}

?>