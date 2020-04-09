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
    <link rel="stylesheet" href="css/index.css">
    <title>Plantes | Acceuil </title>
  </head>

  <body class="background">
    <header>
    <?php include_once 'templates/header.php' ?>
    </header>

    <main>
      <div class="flex  container ">
        <p class="h1 text-center"> Les plantes les plus toxiques de France.</p>
        <p class="text-justify mt-4 text-center "> Ici nous vous présentons les 10 plantes les plus toxiques de France. Pour assurer leur défense que certaines plantes sécrétent du poison. Celles-ci peuvent entrainer la mort, nous vous les présentons ci-dessous.</p>
      </div>

        <div class="d-flex flex-wrap justify-content-center ">
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/tueLoup.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">L'Aconitum napellus</h5>
              <p class="card-text">Les plantes de l’espèce Aconitum napellus sont réputées les plus toxiques du monde.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/laurierRose.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le Laurier rose</h5>
              <p class="card-text">Dans le Midi, le laurier rose est parfois utilisé comme mort au rat. C'est dire...</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/muguet.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le Muguet</h5>
              <p class="card-text">Le muguet, cette plante que l'on aime tant offrir à l'occasion du 1er mai.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/ricin.jpeg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le Ricin</h5>
              <p class="card-text">Le ricin est une plante appréciée des jardiniers, car elle apporte de belles touches de couleurs.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/grandeCigue.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">La grande ciguë</h5>
              <p class="card-text">Dans la Grèce antique, la ciguë était offerte comme dernière boisson aux condamnés à mort.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/lierre2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le Lierre</h5>
              <p class="card-text">Le lierre est une plante grimpante très répandue. Elle est également allergisante...</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/colchique2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le colchique</h5>
              <p class="card-text">Le colchique -- celui quin selon la chanson, pousse dans les prés et marque la fin de l'été.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/gui.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le gui</h5>
              <p class="card-text">Le gui sous lequel on a coutume de s'embrasser au moment des fêtes de fin d'année.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="./img/Belladonne.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">La belladone</h5>
              <p class="card-text">Au Moyen-Âge, la belladone était employée dans des rituels de magie noire.</p>
              <a href="#" class="btn  btn-success stretched-link">En savoir plus</a>
            </div>
          </div>
          <div class="card flex m-2 shadow p-3 mb-5 bg-white rounded " style="width: 18rem;">
            <img src="./img/chèvrefeuille.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Le chèvrefeuille</h5>
              <p class="card-text">Le chèvrefeuille des haies est parfois utilisé comme barrière végétale dans les jardins.</p>
              <a href="#" class="btn btn-success stretched-link ">En savoir plus</a>
            </div>
          </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  
</html>