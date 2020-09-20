<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Zohra Boussouf</title>
    <!-- <link rel="icon" href="img/favicon.png" /> -->
    <!-- Bootstrap CSS -->
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
    <link rel="stylesheet" href='public/css/app.css' />
</head>

<body>


    <div class="site-header sticky-top">
        <!-- banniere -->
        <div class="d-flex justify-content-center" id="banniere">
            <img src="public/images/logozb.png" alt="Zohra Boussouf" id="logozb">
        </div>

        <!-- barre de navigation  -->

        <nav id="navtop" class="navbar navbar-expand-md bg-vert rounded mx-2">

            <!-- titre pour le referencement -->
            <a class="d-none navbar-brand" href="index.php">
                <h1 hidden>Boussouf Zohra </h1>
            </a>

            <!-- bouton hambuger -->
            <button id="btnmenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon " id="togglerIcon"></span>
            </button>

            <!-- menu  -->
            <div id="navbarContent" class="collapse navbar-collapse  justify-content-center ">
                <ul class="navbar-nav" id="menu">
                    <li class="nav-item ">
                        <a class="nav-link text-white" <?php if ($nav_en_cours == 'presentation') {
                                                            echo ' id="en-cours"';
                                                        } ?> href="index.php#presentation"> Présentation </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" <?php if ($nav_en_cours == 'academic') {
                                                            echo ' id="en-cours"';
                                                        } ?> href="academic.php"> Parcours Scolaire </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" <?php if ($nav_en_cours == 'career') {
                                                            echo ' id="en-cours"';
                                                        } ?> href="career.php"> Parcours Professionnel </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" <?php if ($nav_en_cours == 'hobby') {
                                                            echo ' id="en-cours"';
                                                        } ?> href="hobby.php"> Activités </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" <?php if ($nav_en_cours == 'contact') {
                                                            echo ' id="en-cours"';
                                                        } ?> href="contact.php"> Contact </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>