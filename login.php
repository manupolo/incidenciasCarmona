<?php
   
    session_start();
    
    $_SESSION['sesion'] = $_POST['txtuser'];


    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];

    $conexion = mysqli_connect("79.148.236.236","dam42","0260flm4448glj","dam42_incidencias");
    $consulta = "select * from usuario where correo='$user' and pass='$pass'";
    $resultado = mysqli_query($conexion, $consulta);
    $tipo = "select tipo from usuario where correo='".$user."' and pass='".$pass."'";
    //ob_start();
    $resultadoTipo = mysqli_query($conexion, $tipo);
    $prueba = mysqli_fetch_array($resultadoTipo);
    
    // var_export($prueba);

    // $tab_debug=ob_get_contents();
    // ob_end_clean();
    // $fichero=fopen('indexEmpleado.html', 'w');
    // fwrite($fichero, $tab_debug);
    // fclose($fichero);
    
    $filas = mysqli_num_rows($resultadoTipo);


    if ($filas > 0 and $prueba["tipo"] == 0) {
        // Inicias la sesion 
        //session_start(); 
        // Muestras el contenido de la pagina 
        header("location:indexAdmin.php");
    }else if ($filas > 0 and $prueba["tipo"] == 1){
        header("location:indexEmpleado.php");
        
    }else if ($filas > 0 and $prueba["tipo"] == 2){
        header("location:indexSuperAdmin.php");
		
    }else{
        header("location:login.html");
        echo 'Login incorrecto';
    }

    
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>