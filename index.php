<?php 
    include './login/getPrices.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>City Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300i|Playfair+Display:700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/loader.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="icon" href="img/LogoHotel/logoNegro.png">
</head>
<body>
    <div class="loader">
        <div class="backImg">
        </div>
    </div>

    <header>
        <div id="topDarkMargin"></div>
        <nav id="navTop" class="navbar navbar-light">
            <div class="container">
                <span class="navbar-text">
                    Lamadrid 701, Río Cuarto, Córdoba, Argentina - Reservas (+54) 3584634503 
                </span>
                <!--<div id="dropdown" class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Seleccione idioma
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <img src="./img/flags/001-united-states.png" class="mr-1" alt="">
                            English
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="./img/flags/002-argentina.png" class="mr-1" alt="">
                            Español
                        </a>
                    </div>
                </div>-->
            </div>
        </nav>       
    </header>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow bg-white nopadding">
        <a class="navbar-brand" href="index.php">
            <img src="img/LogoHotel/logoDef3.png" width="190" height="70" class="d-inline-block align-top ml-2" alt="">
        </a>
        <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent" class="navbar-collapse collapse">
            <ul id="navlinks" class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#anchorHome">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#anchorServices">servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html" target="_blank">galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#anchorUbication">cómo llegar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#anchorContact">contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carousel">
        <div id="btspCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="100">
                    <img id="firstImg" class="d-block w-100" src="img/carousel/2.jpg" alt="First slide">
                </div>
                <div class="carousel-item" data-interval="100">
                    <img id="secondImg" class="d-block w-100" src="img/carousel/3.jpg" alt="Second slide">
                </div>
                <div class="carousel-item" data-interval="100">
                    <img id="thirdImg" class="d-block w-100" src="img/carousel/5.jpg" alt="Third slide">
                </div>
                <div class="carousel-item" data-interval="100">
                    <img id="fourthImg" class="d-block w-100" src="img/carousel/6.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item" data-interval="100">
                    <img id="fifthImg" class="d-block w-100" src="img/carousel/7.jpg" alt="Fifth slide">
                </div>
                <a class="carousel-control-prev" href="#btspCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#btspCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <section class="anchor" id="anchorHome"></section>

    <div id="home">
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <span class="testimonial"> Bienvenido a </span>
                <h2 id="welcomeTitle" class="mt-1">City Hotel</h2>
                <hr id="separator" class="mt-5">
                <p  class="mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quae aspernatur blanditiis commodi adipisci at et alias atque eius! Ad consequuntur dolor quaerat animi inventore quibusdam temporibus, laboriosam alias ullam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus incidunt porro ipsam aut accusantium omnis inventore veniam ullam aspernatur cumque corporis quis, amet quia sed soluta id natus consequatur harum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit, dolor quas natus quod quasi inventore nulla illo corporis sint, ex numquam molestias magnam dignissimos possimus quos earum. Aliquam, officia?</p>
            </div>
        </div>
    </div>

    <section class="anchor" id="anchorServices"></section>

    <div id="services">
        <div class="dropdown-divider mb-5"></div>
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <span class="testimonial"> nuestras habitaciones </span>
                <h2 id="roomsTitle" class="mt-2">Simples & Confortables </h2>
                <hr id="separator" class="mt-5">
            </div>
            <!-- CARDS HABITACIONES -->
            <div class="card-group row justify-content-md-center">
                <div class="col-12 col-sm-1 col-md-6 col-lg-5">
                    <div class="card shadow text-center">
                        <div id="btspCarouselCard1" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img class="d-block w-100" src="img/rooms/4-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="d-block w-100" src="img/rooms/1-1.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="d-block w-100" src="img/rooms/3-1.jpg" alt="Third slide">
                                </div>
                                <a class="carousel-control-prev" href="#btspCarouselCard1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#btspCarouselCard1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title ml-3">Estándar</h5>
                            <div class="dropdown-divider"></div>
                            <p class="card-text uno mt-3">Cochera cubierta, wi-fi, televisión por cable, water closet, desayuno, servicio de emergencias, atención las 24 horas.</p>
                            <div class="dropdown-divider"></div>
                            <div class="row mt-3">
                                <span class="col card-text float-left mt-2 text-muted">
                                    Desde:
                                </span>
                                <span class="col priceSpan float-right">
                                    <strong>$<?php echo $estandar; ?></strong>/<span class="priceSpanSmall"><strong> noche</strong></span>
                                </span>
                            </div>
                        </div>
                        <div class="card-footer text-muted row no-gutters">
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/car4.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/wifi-white.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/tv.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/coffee-cup.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/24hours.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-1 col-md-6 col-lg-5">
                    <div class="card shadow text-center">
                    <div id="btspCarouselCard2" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img class="d-block w-100" src="img/rooms/1-2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="d-block w-100" src="img/rooms/2-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="d-block w-100" src="img/rooms/5-2.jpg" alt="Third slide">
                                </div>
                                <a class="carousel-control-prev" href="#btspCarouselCard2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#btspCarouselCard2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Superior</h5>
                            <div class="dropdown-divider"></div>
                            <p class="card-text dos mt-3">Cochera cubierta, wi-fi, televisión por cable, water closet, aire acondicionado, desayuno, servicio de emergencias, atención las 24 horas.</p>
                            <div class="dropdown-divider"></div>
                            <div class="row mt-3">
                                <span class="col card-text float-left mt-2 text-muted">
                                    Desde:
                                </span>
                                <span class="col priceSpan float-right">
                                    <strong>$<?php echo $superior ?></strong>/<span class="priceSpanSmall"><strong> noche</strong></span>
                                </span>
                            </div>
                        </div>
                        <div class="card-footer text-muted row no-gutters">
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/car4.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/wifi-white.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/tv.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/coffee-cup.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/air-conditioner.png" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="badges">
                                    <img src="img/icons/24/24hours.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </br>
    </br>
    </div>        

    <div id="reviews">
        <div class="dropdown-divider nopadding"></div>
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <span class="testimonial"> Testimonios </span>
                <h2 id="reviewTitle" class="mt-1">Reseña del Pasajero</h2>
            </div>

            <hr id="separator">

            <div id="carouselText" class="carousel slide mb-5" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- FIRST REVIEW -->
                    <div class="carousel-item text-center p-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i><p id="reviewText" class="mt-5">
                            Muy agradable y reparador. Amplio lugar para obtener un buen descanso. Historia viva de un lujoso pasado.
                        </p></i>
                        <span id="reviewAuthor">
                            A. Gabriel Roldan 
                        </span>
                        -
                        <span id="passenger">
                            Pasajer@
                        </span>
                    </div>
                    <!-- SECOND REVIEW -->
                    <div class="carousel-item text-center p-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i><p id="reviewText" class="mt-5">
                            Lugar que se quedó en el tiempo, muy bello y la atención del personal es excelente.
                        </p></i>
                        <span id="reviewAuthor">
                            Gabriel Gosparo 
                        </span>
                        -
                        <span id="passenger">
                            Pasajer@
                        </span>
                    </div>
                    <!-- THIRD REVIEW -->
                    <div class="carousel-item active text-center p-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i><p id="reviewText" class="mt-5">
                            Atención cálida, respetuosos.
                            Lugar sencillo, pero limpio, ordenado.
                            Un placer haber estado ahí...
                        </p></i>
                        <span id="reviewAuthor">
                            Cecilia Coraglia 
                        </span>
                        -
                        <span id="passenger">
                            Pasajer@
                        </span>
                    </div>
                    <!-- FOURTH REVIEW -->
                    <div class="carousel-item text-center p-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i><p id="reviewText" class="mt-5">
                            Excelente relación precio-calidad. Hotel familiar, limpio, cómodo, y en ubicacion céntrica. 
                            Recomendado para viajeros por trabajo.
                        </p></i>
                        <span id="reviewAuthor">
                            Belén Rojo 
                        </span>
                        -
                        <span id="passenger">
                            Pasajer@
                        </span>
                    </div>
                    <!-- FIFTH REVIEW -->
                    <div class="carousel-item text-center p-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i><p id="reviewText" class="mt-5">
                            Antiguo pero muy buena atencion. Habitaciones remodeladas. Limpio.
                        </p></i>
                        <span id="reviewAuthor">
                            Gerardo Scolari 
                        </span>
                        -
                        <span id="passenger">
                            Pasajer@
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="anchor" id="anchorUbication"></section>

    <div id="ubication">
        <div class="dropdown-divider mb-5"></div>
        <div class="container">
            <div class="row">
                <span id="howto" class="testimonial text-center ml-5"> ¿Cómo llegar al hotel? </span>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 text-center">
                    <p class="mt-3">
                        Para llegar hasta nosotros puedes utilizar el mapa de rutas o también
                        hacerlo escaneando el código QR.
                    </p>
                    <div id="map" class="col">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1UcpNnlyo8DsiaPPIoVSiJxQY6iD741Lt" width="400" height="300"></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <h4 class="mt-3">indicaciones</h4>
                    <hr id="smallDivSeparator">
                    <p class="mt-5"><a href="https://www.google.com/maps/dir/Ciudad+de+C%C3%B3rdoba,+Provincia+de+C%C3%B3rdoba/City+Hotel,+R%C3%ADo+Cuarto,+Provincia+de+C%C3%B3rdoba/@-32.2683294,-65.4215332,8z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x9432985f478f5b69:0xb0a24f9a5366b092!2m2!1d-64.1887761!2d-31.4200833!1m5!1m1!1s0x95d2000ea3ddf0b1:0xed12419941210c3f!2m2!1d-64.344242!2d-33.1244293!3e0" target="_blank">Desde Córdoba</a></p></hr>
                    <p><a href="https://www.google.com/maps/dir/San+Luis,+Provincia+de+San+Luis/City+Hotel,+R%C3%ADo+Cuarto,+Provincia+de+C%C3%B3rdoba/@-33.3436776,-65.9037235,9z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x95d43954196ca6cd:0x7fc2e3b4d49ecc83!2m2!1d-66.3377522!2d-33.3017267!1m5!1m1!1s0x95d2000ea3ddf0b1:0xed12419941210c3f!2m2!1d-64.344242!2d-33.1244293!3e0" target="_blank">Desde San Luis</a></p></hr>
                    <p><a href="https://www.google.com/maps/dir/Santa+Rosa,+La+Pampa/City+Hotel,+R%C3%ADo+Cuarto,+Provincia+de+C%C3%B3rdoba/@-34.85194,-66.6019269,7z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x95c2cd07f7558a33:0x7bda8c2a7b70fd81!2m2!1d-64.2912369!2d-36.620922!1m5!1m1!1s0x95d2000ea3ddf0b1:0xed12419941210c3f!2m2!1d-64.344242!2d-33.1244293!3e0" target="_blank">Desde Santa Rosa</a></p></hr>
                    <p><a href="https://www.google.com/maps/dir/Rosario,+Provincia+de+Santa+Fe/City+Hotel,+R%C3%ADo+Cuarto,+Provincia+de+C%C3%B3rdoba/@-33.0657751,-63.6210639,8z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x95b6539335d7d75b:0xec4086e90258a557!2m2!1d-60.6505388!2d-32.9442426!1m5!1m1!1s0x95d2000ea3ddf0b1:0xed12419941210c3f!2m2!1d-64.344242!2d-33.1244293!3e0" target="_blank">Desde Rosario</a></p></hr>
                    <p><a href="https://www.google.com/maps/dir/Buenos+Aires,+CABA/City+Hotel,+R%C3%ADo+Cuarto,+Provincia+de+C%C3%B3rdoba/@-33.856555,-63.6119177,7z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x95bcca3b4ef90cbd:0xa0b3812e88e88e87!2m2!1d-58.3815591!2d-34.6036844!1m5!1m1!1s0x95d2000ea3ddf0b1:0xed12419941210c3f!2m2!1d-64.344242!2d-33.1244293!3e0" target="_blank">Desde Buenos Aires</a></p>
                </div>
                <div id="qrContainer" class="col-12 col-md-6 col-lg-4 text-center mb-4">
                    <p class="mt-3">Escanee el siguiente QR y obtenga las indicaciones desde Google Maps.</p>
                    <img src="img/qr/qrmaps.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="gallery" class="row">
        <div class="col-2 nopadding">
            <img src="img/misc/3.jpg" class="card-img-top" alt="...">
        </div>
        <div class="col-2 nopadding">
            <img src="img/carousel/2.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-2 nopadding">
            <img src="img/carousel/7.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-2 nopadding">
            <img src="img/carousel/3.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-2 nopadding">
            <img src="img/misc/13.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-2 nopadding">
            <img src="img/carousel/5.jpg" class="img-fluid" alt="...">
        </div>
        <div id="galleryTitle" class="mt-5">
            <a href="gallery.html" target="_blank">
                <button class="btn-6 mt-5 shadow-lg">
                    <span class="gallerySpan">
                        GALERÍA
                    </span>
                </button>
            </a>
        </div>
    </div>

    <section class="anchor" id="anchorContact"></section>

    <footer>
        <div class="container mt-3">
            <div class="row">
                <div id="footerinfo" class="col-12 mt-5 mb-5 col-lg-5">
                    <img src="img/LogoHotel/logoDef3Footer.png" width="150" height="55" class="d-inline-block align-top mb-4" alt="">
                    <p><i class="fas fa-mobile-alt mr-2"></i> (+54) 3584634503 - 3584175574</p>
                    <p><i class="fas fa-envelope mr-2"></i> info@cityhotelriocuarto.com.ar</p>
                    <p><i class="fas fa-map-marker-alt mr-2"></i> Lamadrid 701, Río Cuarto, Córdoba, Argentina</p>
                </div>
                <div id="contact" class="emailForm col-12 col-lg-6 shadow rounded">
                    <form action="sendEmail.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="emailInput">Dirección de correo</label>
                                <input type="email" class="form-control form-control-sm" id="emailInput" name="email" aria-describedby="emailHelp" placeholder="correo@ejemplo.com" required>
                                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su dirección de correo.</small>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="phoneNumberInput">Teléfono</label>
                                <input type="text" class="form-control form-control-sm" id="phoneNumberInput" name="phone" aria-describedby="phoneInputHelp" placeholder="ej: +54 0358-15XXXXXXX" pattern="[0-9]{1,30}" required>
                                <small id="emailHelp" class="form-text text-muted">No olvides ingresar los prefijos.</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailTextInput">Envíenos su consulta</label>
                            <textarea class="form-control" id="emailTextInput" rows="3" name="message" placeholder="Escriba aqui su consulta" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="btn-group">
                                    <button type="submit" class="col-12 btn btn-secondary text-center">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="home" class="dropdown-divider mt-4"></div>    
            <div class="mt-4 text-center">
                <p>CITY HOTEL - Río Cuarto. Design by <a href="https://github.com/jmpache/">@jmpache</a></p>
            </div>
        </div>
    </footer>

</body>
<script>
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>