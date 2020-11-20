<?php

    session_start();

    include('alumnoDAO.php');

    $nc = $_POST['caja_num_control'];
    $n = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $e = $_POST['caja_edad'];
    $s = $_POST['caja_semestre'];
    $c = $_POST['caja_carrera'];

    //Validación de numero de control
    $datos_validos = false;
    if(strlen($nc)>0 && is_numeric($nc)) {
        $datos_validos = true;
    } else {
        $datos_validos = false;
        $_SESSION['errorNumControl'] = "* ¡Dato Incorrecto (no letras)!";
        $_SESSION['datoNumControl'] = $nc;
    }

    //Validación de nombre
    if(strlen($n)>0 && ctype_alpha($n)) {
        $datos_validos = true;
    } else {
        $datos_validos = false;
        $_SESSION['errorNombre'] = "* ¡Dato Incorrecto (no números)!";
        $_SESSION['datoNombre'] = $n;
    }

    if($datos_validos) {
        $aDAO = new AlumnoDAO();
        $aDAO->agregarAlumnos($nc, $n, $pa, $sa, $e, $s, $c);
    } else {
        //Cerrar conexión
        $_SESSION['datoNumControl'] = $nc;
        $_SESSION['datoNombre'] = $n;
        
        header('location:../vistas/formulario_altas.php');
    }

?>