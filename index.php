<!-- declaration de variable pour le souligenment dans la barre de navigation -->
<?php $nav_en_cours = 'presentation'; ?>

<!--header-->
<?php
include("header.php");
?>
<div class="container-fluid ">

    <!-- caroussel -->
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <!-- les slides  -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/car1.png" class="d-block mx-auto my-4 img-fluid" alt="slide 1">
            </div>
            <div class="carousel-item">
                <img src="public/images/car2.png" class="d-block mx-auto my-4 img-fluid"" alt=" slide 2">
            </div>
            <div class="carousel-item">
                <img src="public/images/car3.png" class="d-block mx-auto my-4 img-fluid"" alt=" slide 3">
            </div>
        </div>
        <!-- controle droites/gauches  -->
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
    
    <!-- texte  -->
    <div id="presentation">
        <h1 class="titre"> Présentation </h1>
    </div>

    <div class="row justify-content-md-between " id="1">
        <!-- section presentation -->
        <div class="col-12 col-md-8 mt-3 ">
            <div>
                <p> Diplômée en chimie organique et passionnée par le Digital. Je suis dynamique, rigoureuse et spontanée. </p>

                <p> De part mes différentes expériences dans l’économie sociale et solidaire, j'ai beaucoup été amenée à intervenir
                    au niveau de la <strong>communication</strong> et de la <strong>gestion de projet</strong>.</p>

                <p> Aujourd'hui je suis prête pour de <strong>nouvelles aventures</strong> !</p>

                <p> En reconversion professionnelle, je recherche un stage <strong>non remunénéré</strong> en tant que <strong>Concepteur/ Développeur Web</strong>
                    après une première formation en tant que développeuse web. Une façon, pour moi de combiner mes
                    compétences scientifiques et mon appétence pour le monde du numérique.</p>
            </div>
        </div>
        <!-- section image -->
        <div class="col-12 col-md-4 my-auto">
            <p class="text-center">
                <img class="img-fluid" src="public/images/newadventure.png" alt="newadventure" id="newadventure" />
            </p>
        </div>
    </div>

</div>


<!--pied de page-->
<?php
include("footer.php");
?>