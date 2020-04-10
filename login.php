<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Plantes | Connexion</title>
</head>
<body>
    <header> <?php include_once './templates/header.php' ?></header>
    <main >
        <div class="container bg-light mt-5 p-3 rounded" id="first">
            <p class="h1 text-center"> Connexion</p>
            
            <form action="./controllers/log.php" method="post">
                <div class="form-group ">
                    <label for="exampleInputEmail1">Adresse Mail :</label>
                    <input type="email" name="mail"class="form-control" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre e-mail à quelqu'un d'autre.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe :</label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary"> Connexion </button>
                <small class="form-text text-muted"> Vous n'avez pas encore de compte ?<span id="switchForm"class="text-primary"> Inscrivez-vous.</span></small>
            </form>
        </div>
        <div class="container bg-light mt-5 p-3 rounded d-none" id="second">
        <p class="h1 text-center"> Inscription </p>

            <form action="./controllers/log.php" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword1">Prénom :</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Adresse Mail :</label>
                    <input type="email" name="mail"class="form-control" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre e-mail à quelqu'un d'autre.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe :</label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmation du mot de passe :</label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary"> Connexion </button>
                <small class="form-text text-muted"> Vous avez déjà un compte ?<span id="switchForm"class="text-primary"> Connectez-vous.</span></small>
            </form>
        </div>
    </main>
    <footer class="page-footer font-small mt-5 opacity pt-4">
        <?php include_once 'templates/footer.php' ?>
    </footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>