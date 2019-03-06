<?php
    session_start();
    if (!isset($_SESSION['usuario']))
    {
      header('Location: logincity.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet"> 
        <link rel="stylesheet" href="css/adminpage.css">
        <link rel="icon" href="img/LogoHotel/logoNegro.png">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand mx-auto" href="#">
                <img src="./img/LogoHotel/logoDef3Footer.png" width="150px;" alt="">
            </a>
        </nav>
        <div id="logout" class="row">
            <span class="badge badge-pill badge-dark mx-auto mt-2 mb-2">
                <a href="login/logout.php" id="logout">Cerrar Sesión</a>
            </span>
        </div>
        <?php 
        if (isset($_GET['alert'])) {
            echo '<div class="alert alert-success text-center alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong class="ml-5">¡Genial!</strong> Has modificado el precio de las habitaciones.
                  </div>';
        }
        ?>
        <div class="container">
            <div class="card mx-auto mt-3 col-12" style="width: 25rem;">
            <form action="./login/changePrices.php" method="POST" class="text-center shadow-lg">
                    <h3 class="mt-3">Cambiar precios:</h3>
                    <div class="card-body">
                        <div class="container">
                            <div class="col">
                                <label for="type1">Estandar</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input  
                                        type="number" 
                                        class="form-control" 
                                        name="estandar" 
                                        id="type1"
                                        placeholder="Ej: $430" />
                                </div>
                            </div>
                            <div class="col">
                                <label for="type1">Superior</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input 
                                        type="number" 
                                        class="form-control" 
                                        name="superior" 
                                        id="type2"
                                        placeholder="Ej: $560" />
                                </div>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-warning btn-sm">Cambiar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>