<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>NeoNess</title>
</head>

<header>
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-5 offset-4 h1Header">NEONESS</h1>
            <h3 class="col-4 offset-5 h3Header">Salle de sport</h3>
        </div>

        <div class="row">
            <div class="col-2 offset-1">
                <a href ="/"><button class="btn buttonHeader">Home</button></a>
            </div>
            <div class="col-2">
                <a href ="/users/affichage_inscription"><button class="btn buttonHeader">Inscription</button></a>
            </div>
            <div class="col-2">
                <a href="/users/affichage_connexion"><button class="btn buttonHeader">Connexion</button></a>
            </div>
    </div>

</header>

<main class = "bcg">
    <?= $content ?>
</main>

<footer>
<div class="row">
    <div class="col-2 offset-1"><h6 class = "h6Footer">Copyright</h6></div>
    <div class="col-2"><h6 class = "h6Footer">Yannick Lejosne<br> <span style = "color :yellowgreen">Header/Footer</span> : Adeline Trilles</h6></div>
    <div class="col-1"><h6 class = "h6Footer">*NeoNess Sport*</h6></div>
</div>

</footer>
