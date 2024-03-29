<!DOCTYPE html>
<html lang="en">
<?php
    include("../php/validarSesion.php");
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
    <link rel="stylesheet" href="../css/formularios.css">
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
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="adminSide.php">Inicio</a></li>
                                    <li class="active"><a href="">Eventos</a></li>
                                    <li><a href="mandarCorreo.php">Correo</a></li>
                                    <li><a href="registroMaestros.php">Registro</a></li> 
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <div style="width: 85%; margin: 0 auto;">
    <a href="index.php" class="btn btn-danger">Cerrar sesión</a> 
    </div>
    <!-- ##### Small Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="crearEvento">
            <form action="../php/crearEvento.php" method="POST" enctype="multipart/form-data">
                <center><h1>Crear un evento</h1></center>
                <div class="form-group">
                    <label for="titulo">Titulo del evento:</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Ej. Evento del día del maestro" name="titulo">
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="lugar">Lugar:</label>
                            <input type="text" class="form-control" id="lugar" placeholder="Ej. Sala Polivalente" name="lugar">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="filtro">Filtro (Hacia quien va dirigido el evento):</label>
                    <select class="form-control" id="filtro" name="filtro">
                        <option value="aTodos" selected>A todos</option>
                        <option value="hombres">Hombres</option>
                        <option value="mujeres">Mujeres</option>
                        <option value="hijos">Maestros con hijos</option>
                        <option value="madres">Maestras que son madres</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" rows="5" name="descripcion"></textarea>
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen">
                </div>

                <input type="submit" type="button" class="btn btn-success pull-right" value="Crear evento">
            </form>
        </div>
        <br><br>
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