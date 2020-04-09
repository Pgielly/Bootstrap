<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/info.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/description.css">
    <title>Plantes | Description</title>
  </head>

    <body class="background">
        <header>
        <?php include_once 'templates/header.php' ?>
        </header>
        <main>
        <?php if (isset($_SESSION['mail'])) :?>
            <div class="container">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Li1.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Li2.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Li3.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 3">
                        </div>
                    <div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <figcaption class="figure-caption text-right">Photo internet.</figcaption>
            <div class="container">
                <p class="h1 text-center mt-2"> Le Lierre </p>
            </div>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Son histoire </h5>
                    <p class="mb-3">Le lierre est une plante grimpante très répandue. Elle est également allergisante... et particulièrement toxique. L'ingestion de ses baies notamment, peut entraîner des vomissements et des diarrhées importantes et même provoquer des hallucinations, des convulsions et la mort par asphyxie.</p>

                    <p> LPlantes grimpantes jusqu'à 30-50 m de long avec des racines crampons pouvant atteindre 20 m seulement sur les rameaux fructifères, pas sur les florifères.
                    Feuilles simples vertes foncées, luisantes, coriaces et persistantes, triangulaires à 3-5 lobes sur rameaux stériles et ovales sur rameaux fertiles, pointues au sommet sur les rameaux fructifères. <br>
                    Fleurs jaune-verdâtre en septembre-octobre, disposées en ombelles simples et hémisphériques, à rayons pubescents et souvent les ombelles sont réunies en grappes. L'ombelle terminale est la plus vigoureuse.</p>

                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">La Racine du Nom et son habitat </h5>
                    <p class="mb-3">Localement, le lierre a été utilisé dans les brûlures, ulcères et certaines parasitoses (teignes, gale). <br>
                    Les fruits ont pu être utilisés en tant que purgatifs et fébrifuges. </p>
                    <p> Le lierre commun est une plante grimpante sur les arbres, murs et maisons ou rampante sur le sol : bois, jardins. La plante préfère le climat tempéré : Europe sauf grand nord.</p>
                </div>
            </div>
            <?php else: ?>
                <div class="container">
                <p class="h2 text-danger"> VEUILLEZ VOUS CONNECTER POUR ACCÉDER À CETTE PAGE…</p>
                </div>
            <?php endif ?>
        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>