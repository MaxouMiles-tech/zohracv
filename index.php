<!--header-->
<?php
include("header.php");
?>
<div class="container-fluid ">

    <!-- caroussel -->

    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/car1.png" class="d-block w-25" alt="slide 1">
            </div>
            <div class="carousel-item">
            <img src="public/images/car2.png" class="d-block w-25 " alt="slide 2">
        </div>
            <div class="carousel-item">
                <img src="public/images/car3.png" class="d-block w-25 " alt="slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>





</div>


<!--pied de page-->
<?php
include("footer.php");
?>