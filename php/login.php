<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: redirect.php');
}

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    //$password = hash('sha512', $password);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=amfime','root','');
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Usuario = :usuario AND Password = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' =>$password));
    $resultado = $statement -> fetch();
    if($resultado == true){
        $_SESSION['usuario'] = $usuario;
        header('Location: redirect.php');
    } else {
        echo "<script>";
        echo "alert('No se encontraron coincidencias, favor de volver a intentarlo.');";
        echo "window.location= '../admin/index.php'";
        echo "</script>";    
    }
}
?>