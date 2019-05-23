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
    <link rel="icon" href="../img/core-img/fav.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/adminSide.css">
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
                        <a class="nav-brand" href=""><img src="../img/core-img/image002.png" width="500" height="260" alt=""></a>
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
                                    <li><a href="adminSide.html">Inicio</a></li>
                                    <li><a href="crearEvento.html">Eventos</a></li>
                                    <li><a href="mandarCorreo.html">Correo</a></li>
                                    <li class="active"><a href="">Registro</a></li> 
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
            <div class="jumbotron">
                <h2 class="display-6">Lista de maestros</h2>
                <p class="cuerpo">A continuación se muestra una lista de todos los maestros registrados hasta la fecha.</p>
                <table role= "table">
                    <thead role="rowgroup">
                    <tr role="row">
                        <th role="columnheader">Nombre completo</th role="columnheader">
                        <th role="columnheader">Fecha de nacimiento (edad)</th role="columnheader">
                        <th role="columnheader">Genero</th role="columnheader">
                        <th role="columnheader">Correo electrónico</th role="columnheader">
                        <th role="columnheader">Celular</th role="columnheader">
                    </tr role="row">
                    </thead>
                    <tbody role="rowgroup">
                        <?php
                        include("conexion.php");
                        $acentos = $conexion->query("SET NAMES 'utf8'");
                        $consulta = "SELECT * FROM maestrosafiliados ORDER BY Nombre_maestro ASC";
                        $resultado = mysqli_query($conexion, $consulta);
                        while($row = mysqli_fetch_array($resultado)){
                        ?>
                            <tr role="row">
                                <td role= "cell"><?php echo $row['Nombre_maestro'];?></td role= "cell">
                                <td role= "cell"><?php echo $row['FechaNacimiento_maestro'];?></td role= "cell">
                                <td role= "cell"><?php echo $row['Genero_maestro'];?></td role= "cell">
                                <td role= "cell"><?php echo $row['Correo_maestro'];?></td role= "cell">
                                <td role= "cell"><?php echo $row['Celular_maestro'];?></td role= "cell">
                            </tr role="row">
                        <?php
                        }
                        ?>
                    </tbody>
                </table role= "table">

                <table>
                    <tbody>
                        <tr class="row100 body">
                            <td class="cell100 column1">Like a butterfly</td>
                            <td class="cell100 column2">Boxing</td>
                            <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                            <td class="cell100 column4">Aaron Chapman</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Mind & Body</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Adam Stewart</td>
                            <td class="cell100 column5">15</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Crit Cardio</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                            <td class="cell100 column4">Aaron Chapman</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Wheel Pose Full Posture</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">15</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Playful Dancer's Flow</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Zumba Dance</td>
                            <td class="cell100 column2">Dance</td>
                            <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">20</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Cardio Blast</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Pilates Reformer</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Supple Spine and Shoulders</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">15</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Yoga for Divas</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">20</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Virtual Cycle</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">20</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Like a butterfly</td>
                            <td class="cell100 column2">Boxing</td>
                            <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                            <td class="cell100 column4">Aaron Chapman</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Mind & Body</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Adam Stewart</td>
                            <td class="cell100 column5">15</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Crit Cardio</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                            <td class="cell100 column4">Aaron Chapman</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Wheel Pose Full Posture</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">15</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Playful Dancer's Flow</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Zumba Dance</td>
                            <td class="cell100 column2">Dance</td>
                            <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">20</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Cardio Blast</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Pilates Reformer</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">10</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Supple Spine and Shoulders</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">15</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Yoga for Divas</td>
                            <td class="cell100 column2">Yoga</td>
                            <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                            <td class="cell100 column4">Donna Wilson</td>
                            <td class="cell100 column5">20</td>
                        </tr>

                        <tr class="row100 body">
                            <td class="cell100 column1">Virtual Cycle</td>
                            <td class="cell100 column2">Gym</td>
                            <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                            <td class="cell100 column4">Randy Porter</td>
                            <td class="cell100 column5">20</td>
                        </tr>
                    </tbody>
				</table>
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