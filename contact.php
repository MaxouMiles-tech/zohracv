<!-- declaration de variable pour le souligenment dans la barre de navigation -->
<?php $nav_en_cours = 'contact';
 ?>

<!--header-->
<?php
include("header.php");
?>

<!-- corps du site  -->
<div class="container-fluid ">
    <div class="row">
        <!-- section a gauche  -->
        <div class="col-12 col-md-6 col-lg-4 my-4">
            <div class="d-flex justify-content-center mb-5">
                <img src="public/images/favicon.png" alt="Initiales Zohra Boussouf" id="zb">
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public\images\icoAnniv.png" alt="Icone Anniversaire"> 34 ans</img>
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public\images\icoTel.png" alt="Icone Telephone">07.69.61.49.29</img>
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public\images\icoComposerEmail.png" alt="Icone Composer un Email">
                <a id="emailzb" href="mailto:boussouf.zohra@gmail.com">boussouf.zohra@gmail.com</a></img>
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public\images\icoAdresse.png" alt="Icone Ville">Amiens (80000), France</img>
            </div>
            </img>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public\images\icoVehicule.png" alt="Icone Voiture">Véhiculée et mobile</img>
            </div>
        </div>

        <!-- fomulaire de contact a droite  -->
        <div class="col-lg-8 col-12 col-md-6 mt-4">
            <form action="public/php/mail.php" method="post" name="verifcontact" id="verifcontact" class="col-md-10 col-lg-7 col-12 mx-auto my-3">
                <!-- carte  -->
                <div class="card mt-3 rounded ">
                    <!-- titre  -->
                    <div class="card-header p-0 text-center py-2">
                        <h3><img class="icoInfo" src="public/images/icoComposerEmail" alt="Icone Composer Message">Contactez moi</h3>
                    </div>
                    <!-- corps  -->
                    <div class="card-body p-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend ">
                                <div class="input-group-text py-0 px-1">
                                    <img class="icoInfo" src="public/images/icoUser" alt="Icone Personne">
                                </div>
                            </div>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom et Prénom" required value="<?php if (isset($_POST['nom'])) {
                                                                                                                                echo $_POST['nom'];
                                                                                                                            } ?>" />
                        </div>
                        <p id="errorNom" class="text-danger"></p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text py-0 px-1">
                                    <img class="icoInfo" src="public/images/icoArobaz.png" alt="Icone Composer mail">
                                </div>
                            </div>
                            <input type="text" class="form-control" id="mail" name="mail" placeholder="Abc@example.com" required value="<?php if (isset($_POST['mail'])) {
                                                                                                                                    echo $_POST['mail'];
                                                                                                                                } ?>" />
                        </div>
                        <p id="errorMail" class="text-danger"></p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text py-0 px-1">
                                    <img class="icoInfo" src="public\images\icoChat.png" alt="Icone Conversation">
                                </div>
                            </div>
                            <textarea class="form-control" placeholder="Envoyez moi votre message :)" rows="10" cols="40" id="message" name="message" required value="<?php if (isset($_POST['message'])) {
                                                                                                                                                                    echo $_POST['message'];
                                                                                                                                                                } ?>" /></textarea>
                        </div>
                        <p id="errorMessage" class="text-danger"></p>

                        <div class="text-center">
                            <button type="submit" class="btn bg-vert text-white btn-block rounded py-2" value="Envoyer" name="contactform" id="envoyer">Envoyer <img class="icoInfo " src="public\images\icoEnvoyer.png" alt="Icone Envoyer"></button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- script js -->
<script src="public\js\validation.js"></script>

<!--pied de page-->
<?php
include("footer.php");
?>