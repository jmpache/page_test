<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("Location: adminPage.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login City</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet"> 
        <link rel="stylesheet" href="css/stylesLogin.css">
        <link rel="icon" href="img/LogoHotel/logoNegro.png">
    </head>
    <body>
        <div class="container">
            <div class="card mx-auto mt-5" style="width: 18rem;">
                <form action="login/login.php" method="POST" class="text-center shadow-lg">
                    <div id="imgDiv" class="col">
                        <img src="./img/LogoHotel/logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="row card-body">
                        <div class="container">
                            <div class="form-group">
                                <label for="username">usuario</label>
                                <div class="input-group">
                                    <i class="fas fa-user mt-2 mr-2"></i>
                                    <input id="username" class="col" type="text" name="usrnm" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">contraseña</label>
                                <div class="input-group">
                                    <i class="fas fa-key mt-2 mr-2"></i>
                                    <input id="password" class="col" type="password" name="psswrd" />
                                </div>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-secondary btn-sm">sign in</button>
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