<?php
    include("validarSesion.php");
    include("conexion.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $genero = $_POST['genero'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];

    $acentos = $conexion->query("SET NAMES 'utf8");
    $consultaActualizar = "UPDATE maestrosafiliados SET ";
    $consultaActualizar .= "Nombre_maestro = '{$nombre}', ";
    $consultaActualizar .= "FechaNacimiento_maestro = '{$fecha}', ";
    $consultaActualizar .= "Genero_maestro = '{$genero}', ";
    $consultaActualizar .= "Correo_maestro = '{$correo}', ";
    $consultaActualizar .= "Celular_maestro = '{$celular}' ";
    $consultaActualizar .= "WHERE Id_maestro= {$id}";
    
    if($conexion->query($consultaActualizar) === TRUE){
        echo "<script>";
        echo "alert('Información actualizada correctamente.');";
        echo "window.location= '../admin/registroMaestros.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('No se pudo actualizar la información.');";
        echo "window.location= '../admin/registroMaestros.php';";
        echo "</script>";
    }
?>