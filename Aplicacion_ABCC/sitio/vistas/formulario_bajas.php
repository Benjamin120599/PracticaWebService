<?php

    session_start();
    if($_SESSION['autenticado'] == false) {
        header("location:index.php");
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>BAJAS ALUMNOS</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel='stylesheet' type='text/css' media='screen' href='../estilos/tabla.css'>
    
    </head>

    <body>
        <?php
            require_once('index2.html');
        ?>
        
        <table id="customers">
            <tr> 
                <th>Num. Control</th> 
                <th>Nombre</th> 
                <th>Primer Ap.</th> 
                <th>Segundo Ap.</th> 
                <th>Edad</th> 
                <th>Semestre</th> 
                <th>Carrera</th> 
                <th>Acciones</th>
            </tr>

            <?php

                include('../scripts_php/conexion_bd.php');

                $con = new ConexionBD();
                $conexion = $con->getConexion();
                //var_dump($conexion);
                $sql = "SELECT * FROM Alumnos";

                $res = mysqli_query($conexion, $sql);
                //var_dump($res);

                if(mysqli_num_rows($res)>0) {
                    while( $fila = mysqli_fetch_assoc($res)) {
                        printf(
                            "<tr><td>".$fila['Num_Control']."</td>".
                            "<td>".$fila['Nombre']."</td>".
                            "<td>".$fila['Primer_AP']."</td>".
                            "<td>".$fila['Segundo_AP']."</td>".
                            "<td>".$fila['Edad']."</td>".
                            "<td>".$fila['Semestre']."</td>".
                            "<td>".$fila['Carrera']."</td>".
                            "<td> <a href='../scripts_php/procesar_baja.php?nc=%s'> ELIMINAR </a> </td></tr>",$fila['Num_Control']
                        );
                    }
                } else {
                    echo "<script> alert('No hay datos'); ";
                }

            ?>
        </table>
    </body>

</html>