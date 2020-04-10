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
    <link rel="stylesheet" href="css/footer.css">
    <title>Plantes | Description </title>
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
                            <img src="img/A1.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/A2.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/A3.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 3">
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
                <p class="h1 text-center mt-2"> L'Aconitum napellus </p>
            </div>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Son histoire </h5>
                    <p class="mb-3">L'aconit contient des alcaloïdes, dont l'aconitine. Cette plante est aussi appelée « herbe aux loups », car elle était employée pour tuer les loups. L'espèce Aconitum napellus est particulièrement dangereuse, notamment par ses feuilles et ses racines : 2 à 4 g de racine peuvent tuer un adulte ! </p>

                    <p> L'ingestion d'aconit conduit à des sensations de brûlure et des picotements, suivis de vomissements, d'une faiblesse et d'une syncope. Les convulsions peuvent provoquer des anomalies du rythme cardiaque qui entraînent le décès de l'individu.</p>

                    <p> Dans le mythe de Jason et des Argonautes, Médée utilise de l'aconit pour essayer de tuer Jason. Hannibal se serait suicidé avec un mélange d'aconit et de ciguë pour éviter d'être livré aux Romains. L'aconit n'est pas seulement utilisé comme poison : il est aussi un antidote au venin des scorpions. </p>
                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">La Racine du Nom et son habitat </h5>
                    <p class="mb-3">Du Grec « Aconiton » : nom d’une plante ayant servi à empoisonner les loups et du latin « napellus » dérivé de « Napus » : Navet, par allusion à la forme du tubercule. On l'a trouve plus généralement dans les lieux humides, bas marais et pâturages de montagnes. Cela dépend de la répartition des sous-espèces. </p>
                    <p> L’Aconit napel est une des plantes les plus dangereuses de France par sa très forte toxicité.
                    C’est une grande plante vivace qui forme souvent des grandes colonies dans les zones humides et leurs abords.
                    Malgré son aspect vénéneux, cette plante égaie ses milieux par son abondance et par la couleur violette à bleue de ses inflorescences.</p>
                </div>
            </div>
            <?php else: ?>
                <div class="container">
                <p class="h2 text-danger"> VEUILLEZ VOUS CONNECTER POUR ACCÉDER À CETTE PAGE…</p>
                </div>
            <?php endif ?>
        </main>    
        <footer class="page-footer font-small bg-success pt-4">
            <?php include_once 'templates/footer.php' ?>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>