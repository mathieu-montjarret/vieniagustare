<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Vieni a gustare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Vieni a gustare">
    <meta name="description" content="Restaurant Italien situé à 20 minutes de Paris">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="container-fluid">

    <header>

        <div class="backgroundSlide">
            <div class="image-slide" style="background-image:url(assets/img/header1.jpg)"></div>
            <div class="image-slide" style="background-image:url(assets/img/header2.jpg)"></div>
            <div class="image-slide" style="background-image:url(assets/img/header3.jpg)"></div>
        </div>

        <?php require_once('include/nav.inc.php') ?>

        <div class="hero d-flex align-items-center text-center row text-align">
            <h1 class="col-12 text-light reveal-1">Vieni A Gustare</h1>
        </div>

    </header>


    <main class="container">

        <section class="row justify-content-around zone1">

            <div class="col-md-5 d-flex justify-content-center align-items-center flex-column">
                <h2 class="text-center reveal-1">Benvenuti a Vieni a gustare</h2>
                <p class="text-justify reveal-2">Situé à <strong>ANTONY</strong>, dans un cadre plein de charme, nous vous accueillons dans une atmosphère chaleureuse et conviviale, propice aux repas intimes, aux fêtes familiales, amicales ou encore aux repas d’affaires. <br><br>Notre établissement bénéficie d’une très belle terrasse et d’un panorama exceptionnel. <br><br>En terrasse ou dans l’une de nos salles de restauration, vous pourrez découvrir une cuisine inventive et « <strong>fait Maison</strong> » exclusivement à partir de <strong>produits frais</strong> et de saison au service d’une <strong>cuisine traditionnelle à l'italienne</strong>. <br><br>Du mardi au samedi, vous avez le choix de notre carte aux plaisirs variés ou de nos suggestions de la semaine pour votre déjeuner. <br><br>Le Dimanche, nous vous proposons un brunch sous forme de buffet, qui enchantera les papilles.</p>
                <p class="text-center reveal-2"><br><b>PENSEZ À RESERVER !</b></p>
            </div>

            <div class="col-md-5 reveal-2">
                <img class="imgzone1" src="assets/img/interieur restaurant.jpg" alt="restaurant">
            </div>

        </section>


        <section>

            <h2 class="text-center title-zone2 reveal-1 mt-4">Nos offres</h2>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="carouselExampleIndicators" class="carousel slide reveal-2" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/entrees.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Nos Entrées</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/pizzas.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Nos Pizzas</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/pates.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Nos Pâtes</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/desserts.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Nos Desserts</h3>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

        </section>


        <section>

            <h2 class="text-center title-zone3 reveal-1 mt-4">Horaires</h2>
            <div class="row justify-content-around reveal-2">
                <article class="my-3 mx-2 col-8 col-md-5 col-lg-2 schedules-item d-flex flex-column justify-content-center align-items-center">
                    <h4>LUNDI</h4>
                    <p>Fermé</p>
                </article>
                <article class="my-3 mx-2 col-8 col-md-5 col-lg-2 schedules-item d-flex flex-column justify-content-center align-items-center">
                    <h4>MAR - JEU</h4>
                    <p>12h00 - 14h30<br>19h00 - 23h00</p>
                </article>
                <article class="my-3 mx-2 col-8 col-md-5 col-lg-2 schedules-item d-flex flex-column justify-content-center align-items-center">
                    <h4>VEN - SAM</h4>
                    <p>12h00 - 14h30<br>19h00 - 00h00</p>
                </article>
                <article class="my-3 mx-2 col-8 col-md-5 col-lg-2 schedules-item d-flex flex-column justify-content-center align-items-center">
                    <h4>DIMANCHE</h4>
                    <p>12h00 - 14h30</p>
                </article>
            </div>

        </section>

    </main>

    <?php require_once('include/footer.inc.php') ?>