<?php
header("Content-Type: text/html;charset=utf-8");
include("conexion.php");
$titulo = $_POST['titulo'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];
$filtro = $_POST['filtro'];
$descripcion = $_POST['descripcion'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$acentos = $conexion->query("SET NAMES 'utf8'");
$consultaInsertar = "INSERT INTO eventos (Titulo_evento, Descripcion_evento, Fecha_evento, Lugar_evento, Objetivo_evento, Imagen_evento) VALUES ('{$titulo}', '{$descripcion}', '{$fecha}', '{$lugar}','{$filtro}','{$imagen}')";

if($conexion->query($consultaInsertar) === TRUE){
    echo "<script>";
    echo "alert('Evento creado exitosamente.');";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('No se pudo crear el evento.');";
    echo "</script>";
}
echo "<script>";
echo "window.location= 'crearEvento.html'";
echo "</script>";
?>