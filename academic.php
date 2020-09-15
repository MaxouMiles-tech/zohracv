<!-- declaration de variable pour le souligenment dans la barre de navigation -->
<?php $nav_en_cours = 'academic'; ?>
<!--header-->
<?php
include("header.php");
?>
<div class="container-fluid ">

    <!-- texte  -->
    <div id="academic">
        <h1 class="titre mt-4">Parcours Scolaire </h1>
    </div>

    <div class="row justify-content-lg-between " id="1">
        <!-- section presentation -->
        <div class="col-12 col-lg-8 mt-3 my-lg-5">
            <div>
                <h1> <img src="public/images/icoschool.png" alt="Catégorie Ecole" id="icoSchool" /> AFPA </h1>
                <h2> Concepteur Développeur d'applications </h2>
                <h3> En cours : 2020 - 2021 </h3>

                <p>
                    Le développeur d’application a pour mission de créer des sites dynamiques grâce à un langage de programmation.<br />
                    Le concepteur développeur informatique est aussi capable de développer une application, une page web ou une base de données à partir d’un cahier des charges ou d’un scénario utilisateur.
                </p>

                <h4>Objectifs de la formation : </h4>
                <ul>
                    <li> Analyser un cahier des charges. </li>
                    <li> Concevoir l’architecture technique d’une application.</li>
                    <li> Créer des application web dynamiques grâce à Java.</li>
                    <li> Communiquer avec une base de données.</li>
                    <li> Développer de manière professionnelle grâce au framework Spring.</li>
                </ul>

            </div>
        </div>
        <!-- section image -->
        <div class="col-12 col-lg-3 my-auto bg-vert">
            <div class="text-center">
                <a   href="https://www.afpa.fr/formation-qualifiante/concepteur-developpeur-informatique" target="_blank" title=" Détails de la formation">
                    <img " src="public/images/logoafpa.jpg" alt="Logo AFPA " id="logoAFPA" /> </a>
            </div>
        </div>
    </div>

</div>



<!--pied de page-->
<?php
include("footer.php");
?>