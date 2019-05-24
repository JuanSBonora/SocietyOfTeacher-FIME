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
    <link rel="stylesheet" href="../css/adminSide.css">
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
                                    <li class="active"><a href="">Inicio</a></li>
                                    <li><a href="crearEvento.php">Eventos</a></li>
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

    <!-- ##### Small Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="modificar-info">
            <form action="../php/guardarCambios.php" method="POST">
            <?php
            $identificacion = $_POST['editar'];
            header("Content-Type: text/html;charset=utf-8");
            include("conexion.php");
            $acentos = $conexion->query("SET NAMES 'utf8'");
            $consulta = "SELECT * FROM maestrosafiliados WHERE Id_maestro=".$identificacion;
            $resultado = mysqli_query($conexion,$consulta);
            while($row = mysqli_fetch_array($resultado)){?>
                <div class="form-group">
                    <label for="id">Clave unica de identificación:</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['Id_maestro'];?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['Nombre_maestro'];?>">
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $row['FechaNacimiento_maestro'];?>">
                </div>

                <div class="form-group">
                    <label for="genero">Genero:</label>
                    <select class="form-control" id="genero" name="genero">
                        <option value="Hombre" <?php echo $row['Genero_maestro'] == "Hombre" ? "selected": "";?>>Hombre</option>
                        <option value="Mujer"  <?php echo $row['Genero_maestro'] == "Mujer"  ? "selected": "";?>>Mujer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $row['Correo_maestro'];?>">
                </div>

                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $row['Celular_maestro'];?>">
                </div>

                <input type="submit" type="button" class="btn btn-success pull-right" value="Guardar cambios">
                <br>
            <?php
            }
            ?>
            </form>
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