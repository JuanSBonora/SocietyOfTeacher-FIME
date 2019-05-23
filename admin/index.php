<!DOCTYPE html>
<html lang="en">
<?php session_start();
if(isset($_SESSION['usuario'])){
    
    session_destroy();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>FIME - Asociacion de Maestros | Miembros</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/fav.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="../img/core-img/fav.png" alt="">
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">FACULTAD DE INGENIERIA MECANICA Y ELECTRICA</a></li>
                                    <li><a href="#">ASOCIACION DE MAESTROS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href=""><img src="../img/core-img/image002.png" width="150" alt=""></a>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Small Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="container-login">
            <div class="login-page">
                <div class="form-login">
                    <form class="login-form-login" action="../php/login.php" method="POST">
                    <input type="text" placeholder="Usuario" name="usuario"/>
                    <input type="password" placeholder="Contraseña" name="password"/>
                    <input type="submit" value="Ingresar" class="ingresar">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Small Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">

                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <div>
                            <a href=""><img src="../img/core-img/logo.gif" width="144" height="65" alt=""></a>
                        </div>
                    </div>
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="#" target="_blank">FIME</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>

</html>