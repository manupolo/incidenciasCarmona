<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Incidencias Carmona</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <link rel="stylesheet" href="../css/asignaciones.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="black">
    <div class="contenido">

        <div class="navbar-fixed">

            <ul id="dropdown1" class="dropdown-content">
                <li><a href="administracion.php">Administracion</a></li>
                <li class="divider"></li>
                <li><a href="../graficos.php">Gráficos</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content">
                <li><a href="administracion.php">Administracion</a></li>
                <li><a href="../graficos.php">Gráficos</a></li>
            </ul>

            <nav>
                <div class="nav-wrapper z-depth-5 yellow accent-2">
                    <a href="#!" class="brand-logo"><img class="logo" src="../imagenes/logo.png"></a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse btn btn-floating pulse"><i class="material-icons black-text">menu</i></a>

                    <ul class="left hide-on-med-and-down cabecera">
                        
                        

                        <li><a href="../indexAdmin.php">Planning</a></li>
                        <li><a href="../usuarios.php">Usuarios</a></li>
                        <li><a href="prestamoAdmin.php">En prestamo</a></li>
                        <li><a href="../historial.php">Historial</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Empresa<i class="material-icons right">arrow_drop_down</i></a>

                        </li>

                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="../miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
                        <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                </div>
            </nav>
        </div>

        <ul class="side-nav yellow accent-2 fondosidenav" id="mobile-demo">
            <li><a href="../indexAdmin.php">Planning</a></li>
            <li><a href="../usuarios.php">Usuarios</a></li>
            <li><a href="prestamoAdmin.php">En prestamo</a></li>
            <li><a href="../historial.php">Historial</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="../miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
            <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
        </ul>

        <div class="container incidencias">

            <div class="bloqueAsignacion">
                <div>
                    <h2>Herramientas</h2>
                </div>
            
                <div class="white contenedorTabla">                                    
                      <?php 
                            $link = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");
                            $result2 = mysqli_query($link, "SELECT * FROM usuarioinventario");
                            
                            echo '<table class="centered responsive-table highlight bordered">'; 
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Dni</th>';
                            echo '<th>Nombre</th>';
                            echo '<th>IdHerramienta</th>';
                            echo '<th>Herramienta</th>';
                            echo '<th>Fecha</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysqli_fetch_row($result2)){
                                $result3 = mysqli_query($link, "SELECT * FROM usuario WHERE dni='$row[1]'");
                                $result4 = mysqli_query($link, "SELECT * FROM inventario WHERE idHerramienta=$row[0]");
                                while ($row2 = mysqli_fetch_row($result3)){
                                    while ($row3 = mysqli_fetch_row($result4)){

                                        echo "<tr><td>$row[1]</td><td>$row2[5] $row2[6]</td><td>$row[0]</td><td>$row3[1]</td><td>$row[2]</td></tr> \n ";
                                    }
                                
                                }
                            } 
                            echo "</table> \n"; 
                            
                            ?> 


                </div>
            </div>
            
            <div class="bloqueAsignacion">
                <div>
                    <h2>Vehiculos</h2>
                </div>
            
                <div class="white contenedorTabla">                                    
                   <?php 
                            $link = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias"); 
                            $result2 = mysqli_query($link, "SELECT * FROM usuarioVehiculo");
                            echo '<table class="centered responsive-table highlight bordered">'; 
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Dni</th>';
                            echo '<th>Nombre</th>';
                            echo '<th>Matricula</th>';
                            echo '<th>Fecha</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysqli_fetch_row($result2)){
                                $result3 = mysqli_query($link, "SELECT * FROM usuario WHERE dni='$row[1]'");
                                while ($row3 = mysqli_fetch_row($result3)){
                                    
                                    echo "<tr><td>$row[0]</td><td>$row3[5] $row3[6]</td><td>$row[1]</td><td>$row[2]</td></tr> \n "; 
                                }
                            } 
                            echo "</table> \n"; 
                            
                            ?> 

                </div>
            </div>
            
        </div>



       
        
    </div>

    <!--Footer-->
        <footer class="page-footer yellow accent-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="black-text">Sobre nosotros</h5>
                            <p class="grey-text black-text">Somos una empresa que se encarga de: <br> - Mantenimiento de infraestructuras urbanas. - Limpieza viaria. - Recogida y eliminación de Sólidos Urbanos. - Limpieza y mantenimiento de Edificios Públicos. - Mantenimiento de Parques y Jardines. - Mantenimiento del Alumbrado Público. - Puntos limpios. - Recogida selectiva (vidrio,</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="black-text">Enlaces de interes</h5>
                        <ul>
                            <li><a class="blue-text" href="http://www.carmona.org/limancar/limancar.htm">Contacto</a></li>
                            <li><a class="blue-text" href="http://www.carmona.org/limancar/limancar.htm">Twitter Limancar</a></li>
                            <li><a class="blue-text" href="http://www.carmona.org/">Ayto.Carmona</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />Este obra está bajo una</a> <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de Creative Commons Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional</a>
                </div>
            </div>
        </footer>
    <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/asignaciones.js"></script>

</body>

</html>