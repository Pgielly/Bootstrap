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
                            <img src="img/R1.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/R2.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/R3.jpg" class="d-block w-100 img-fluid" alt="Aconitum napellus 3">
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
                <p class="h1 text-center mt-2"> Le Ricin </p>
            </div>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Son histoire </h5>
                    <p class="mb-3">Le ricin est une plante appréciée des jardiniers, car elle apporte de belles touches de couleurs. Mais elle cache en elle un poison mortel : la ricine. Et sa dangerosité est encore accrue par le fait que la graine de ricin a une saveur de noisette très agréable.</p>

                    <p> Le ricin est une plante ornementale originaire d'Afrique, dont les graines contiennent une toxine appelée « ricine ». La toxicité des graines est plus élevée lorsque celles-ci sont mâchées, car l'enveloppe des graines protège l'intestin de la libération de la ricine pendant la digestion. La ricine contient deux molécules, l'une ouvrant un pore de la membrane cellulaire pour permettre à la seconde d'entrer dans la cellule : cette molécule vient alors perturber le fonctionnement de la cellule visée, entraînant sa mort.</p>

                    <p> L'huile de ricin, extraite des graines, est reconnue pour avoir des propriétés purgatives. Or, en grandes quantités, elle peut aussi être un poison mortel : les Chemises noires de Mussolini faisaient boire de l'huile de ricin, parfois mélangée à de l'essence, aux opposants politiques. </p>
                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">La Racine du Nom et son habitat </h5>
                    <p class="mb-3">En 1978, la ricine fut employée pour assassiner Georgi Markov, un écrivain bulgare dissident. Pendant qu'il attendait son bus à Londres, Markov ressentit une piqûre à la cuisse, alors qu'un homme près de lui ramassait son parapluie. Rapidement, Markov fut hospitalisé, la jambe en sang et enflée. Il mourut quelques jours plus tard : ses reins étaient bloqués, il vomissait du sang et un œdème pulmonaire l'empêchait de respirer. Lors de l'autopsie, on retira une petite boule de sa cuisse. Cette bille, injectée par le parapluie, devait contenir un poison libéré par de minuscules pores. Plus tard, il fut établi que la bille contenait de la ricine. </p>
                    <p> Probablement originaire d'Afrique de l'Est ou de l'Inde, elle est présente sur tous les continents, notamment dans le midi de la France et en Corse. Il est souvent présent dans les terrains vagues, rocailleux et sert de plante ornementale dans les villes.</p>
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