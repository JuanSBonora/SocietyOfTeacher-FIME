<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>FIME - Asociacion de Maestros | Miembros</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/fav.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/eventos.css">

</head>

<body>
    <!-- Preloader-->   
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/core-img/fav.png" alt="">
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
                        <a class="nav-brand" href="index.html"><img src="img/core-img/image002.png" width="150" alt=""></a>

                        <!-- Navbar Toggler -->
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
                                    <li><a href="index.html">Inicio</a></li>
                                    <li class="active"><a href="events.php">Eventos</a></li>
                                    <li><a href="#">Miembros</a>
                                        <div class="megamenu align-items-center">
                                            <!-- <ul class="single-mega cn-col-5">
                                            </ul> -->
                                            <ul class="single-mega cn-col-3">
                                                <li class="title align-items-center" class="sub-heading">Miembros</li>
                                                <li><a href="members.html">Miembros del comité</a></li>
                                            </ul> 
                                            <ul class="single-mega cn-col-3">
                                                <li class="title">Aspirantes</li>
                                                <li><a href="aspirantesRequisitos.html">Requisitos</a></li>
                                                
                                            </ul>
                                            <div class="single-mega cn-col-3">
                                                <div class="receipe-slider owl-carousel">
                                                    <a href="#"><img src="img/bg-img/fsw.jpg" alt=""></a>
                                                    <a href="#"><img src="img/bg-img/Electrica.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <!-- <ul class="single-mega cn-col-5"></ul> -->
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contacto</a></li> 
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

    <!-- ##### Small Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="container">
        <?php
        include("php/conexion.php");
        $acentos = $conexion->query("SET NAMES 'utf8'");
        $consulta = "SELECT * FROM eventos ORDER BY Id_evento DESC";
        $resultado = mysqli_query($conexion,$consulta);
        while ($row = mysqli_fetch_array($resultado)) {
            ?>
            <div class="card mb-3" style="">
                <div class="row no-gutters">
                    <div class="col-md-3 contenedor-imagen">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen_evento']); ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['Titulo_evento'];?></h5>
                        <p class="card-text">
                            <small class="text-muted">
                                Lugar: <?php echo $row['Lugar_evento']; ?> <br>
                                Fecha: <?php echo $row['Fecha_evento']; ?>
                            </small>
                        </p>
                        <p class="card-text"><?php echo $row['Descripcion_evento']; ?></p>
                        
                    </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
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
                            <a href="index.html"><img src="img/core-img/logo.gif" width="144" height="65" alt=""></a>
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
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>