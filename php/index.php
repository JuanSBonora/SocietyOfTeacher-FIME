<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: ../admin/adminSide.php');
} else {
    header('Location: ../admin/index.php'); //El index que se debe de ver, guardado en admin
}

?>