<!-- declaration de variable pour le souligenment dans la barre de navigation -->
<?php $nav_en_cours = 'career'; ?>
<!--header-->
<?php
include("header.php");
?>
<div class="container-fluid ">

    <!-- titre  -->
    <div id="academic">
        <h1 class="titre mt-4">Parcours Professionel </h1>
    </div>

    <!-- exp 1  -->
    <div class="row justify-content-md-between pl-md-5 ">
        <!-- section titre -->
        <div class="row mt-3">
            <h2 class="d-none d-md-block"><img class="mr-3 iconeTitre" src="public/images/icolab.png" alt="Icone de laboratoire" id="icoLabo" />Stage R&ampD </h2>
            <h2 class="d-block d-md-none"><a href="https://spcmib.univ-tlse3.fr/equipe-monalisa" target="_blank" title=" Equipe MonaLisa">
                    <img class="mr-3 iconeTitre" src=" public/images/logoSpcmib.png" alt="Logo de SPCMIB" id="logoSPCMIB" /></a>Stage R&ampD</h2>
        </div>
        <!-- section presentation -->
        <div class="row">
            <div class="col-12 col-md-8">
                <div>
                    <h4 class="text-left"> Laboratoire de Synthèse et Physico-Chimie de Molécules d'Intérêt Biologique (SPCMIB) </h4>
                    <p class="font-weight-bold">6 mois 2019, Toulouse </p>

                    <p>
                        Synthèse de coumarines à potentiel bioactif
                    </p>

                    <h5><a href="#collapse1" data-toggle="collapse">Missions</a></h5>
                    <div id="collapse1" class="collapse">
                        <ul>
                            <li> Utilisation des outils de recherche. </li>
                            <li> Conception et synthèse multi-étapes.</li>
                            <li> Extraction et purification.</li>
                            <li> Etudes de la relations structure - protéines.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- section image -->
            <div class="d-none d-md-block col-md-4 my-auto">
                <div class="text-center ">
                    <a href="https://spcmib.univ-tlse3.fr/equipe-monalisa" target="_blank" title=" Equipe MonaLisa">
                        <img src=" public/images/logoSpcmib.png" alt="Logo de SPCMIB" id="logoSPCMIB" /></a>
                </div>
            </div>
        </div>
    </div><br>

    <!-- exp 2  -->
    <div class="row justify-content-md-between pl-md-5 ">
        <!-- section titre -->
        <div class="row mt-3">
            <h2 class="d-none d-md-block"><img class="mr-3 iconeTitre" src="public/images/icolab.png" alt="Icone de laboratoire" id="icoLabo" />Stage R&ampD </h2>
            <h2 class="d-block d-md-none"><a href="http://plateforme-pages.univ-lille1.fr/Stagiaires-2018"  target="_blank" title="Plateforme PAGès ">
                    <img class="mr-3 iconeTitre" src=" public/images/logoPages.png" alt="Logo de PAGès"id="logoPages" /></a>Stage R&ampD</h2>
        </div>
        <!-- section presentation -->
        <div class="row">
            <div class="col-12 col-md-8">
                <div>
                    <h4 class="text-left">Plateforme d’Analyses des Glycoconjugués (PAGés)</h4>
                    <p class="font-weight-bold">4 mois 2018, Lille </p>

                    <p>
                        Détection d'acide muramique par GC-MS FID et GC-MS SIM
                    </p>

                    <h5><a href="#collapse2" data-toggle="collapse">Missions</a></h5>
                    <div id="collapse2" class="collapse">
                        <ul>
                            <li> Veille scientifique et technologique. </li>
                            <li> Utilisation d'une grande variété d’appareillages analytiques.</li>
                            <li> Développer et de valider des méthodes analytiques.</li>
                            <li> Mobiliser les connaissances et compétences en milieu professionnel.</li>
                            <li> Planifier et réaliser un projet.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- section image -->
            <div class="d-none d-md-block col-md-4 my-auto">
                <div class="text-center ">
                    <a href="http://plateforme-pages.univ-lille1.fr/Stagiaires-2018" target="_blank" title="Plateforme PAGès ">
                        <img src=" public/images/logoPages.png" alt="Logo de PAGès"id="logoPages" /></a>
                </div>
            </div>
        </div>
    </div><br>
</div>

<!--pied de page-->
<?php
include("footer.php");
?>