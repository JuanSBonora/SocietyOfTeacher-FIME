<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conexion = mysqli_connect("localhost", "root", "", "amfime");
$consulta = "SELECT * FROM usuarios WHERE Usuario = '{$usuario}' AND Password='{$password}'";
$resultado = mysqli_query($conexion, $consulta);

$coincidencias = @mysqli_num_rows($resultado);

if($coincidencias>0){
    header("location:adminSide.html");
}
else{
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    echo "<script>";
    echo "alert('No se encontraron coincidencias, favor de volver a intentarlo.');";
    echo "window.location= 'index.html'";
    echo "</script>";
}
?>