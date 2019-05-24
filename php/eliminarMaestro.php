<?php
include("validarSesion.php");
include("conexion.php");
$id = $_POST['eliminar'];

$acentos = $conexion->query("SET NAMES 'utf8");

$consultaEliminar = "DELETE FROM maestrosafiliados WHERE Id_maestro=". $id;
if($conexion->query($consultaEliminar) === TRUE){
    echo "<script>";
    echo "alert('Maestro eliminado correctamente.');";
    echo "window.location= '../admin/registroMaestros.php';";
    echo "</script>";
} else{
    echo "<script>";
    echo "alert('No se pudo eliminar al maestro seleccionado.');";
    echo "window.location= '../admin/registroMaestros.php';";
    echo "</script>";
}
?>