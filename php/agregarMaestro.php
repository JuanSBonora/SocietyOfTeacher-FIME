<?php
header("Content-Type: text/html;charset=utf-8");
include("validarSesion.php");
include("conexion.php");
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$genero = $_POST['genero'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];

$acentos = $conexion->query("SET NAMES 'utf8");
$consultaAgregar = "INSERT INTO maestrosafiliados ";
$consultaAgregar .= "(Nombre_maestro, FechaNacimiento_maestro, Genero_maestro, ";
$consultaAgregar .= "Correo_maestro, Celular_maestro) VALUES ('{$nombre}', ";
$consultaAgregar .= "'{$fecha}', '{$genero}', '{$correo}', '{$celular}')";

if($conexion->query($consultaAgregar) === TRUE){
    echo "<script>";
    echo "alert('El maestro fue agregado exitosamente.');";
    echo "</script>";
} else{
    echo "<script>";
    echo "alert('No se pudo agregar al maestro.');";
    echo "</script>";
}
echo "<script>";
echo "window.location='../admin/registroMaestros.php'";
echo "</script>";
?>