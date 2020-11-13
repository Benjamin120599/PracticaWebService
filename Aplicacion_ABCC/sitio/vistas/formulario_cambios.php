<?php
    
    session_start();
    if($_SESSION['autenticado'] == false) {
        header("location:login.php");
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>ALTA ALUMNOS</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            require_once('index.html');
        ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Buscar por:</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <select name="campo">
                            <option selected>Num. de control</option>
                            <option >Nombre</option>
                            <option >Primer Ap.</option>
                            <option >Segundo Ap.</option>
                            <option >Edad</option>
                            <option >Semestre</option>
                            <option >Carrera</option>
                        </select>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="../scripts_php/procesar_cambios.php">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="valor" value="<?php echo $valor; ?>">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <form method="POST" action="../scripts_php/procesar_cambios.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Numero Control</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Número de control" name="caja_num_control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nombre</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Solo letras" name="caja_nombre">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Primer Apellido</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="solo letras" name="caja_primer_ap">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Segundo Apellido</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Solo letras" name="caja_segundo_ap">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Edad</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Edad" name="caja_edad">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Semestre</label>
                    <select id="inputState" class="form-control" name="caja_semestre">
                        <option selected>Elige una opción</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Carrera</label>
                    <input type="text" class="form-control" id="inputZip" name="caja_carrera">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </body>

</html>