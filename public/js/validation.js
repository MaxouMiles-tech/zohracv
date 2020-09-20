// validation java du formulaire contact
document .querySelector("#verifcontact").onsubmit = function checkForm(f) 
{
    // variable a true qui sera verfifier à chaque condition
    var check = true;

// creation des variable obligatoire: on recupere les valeurs entrées grace à l'identifiant
    var nom = document.getElementById("nom").value;
    var mail = document.getElementById("mail").value;
    var message = document.getElementById("message").value;

// regex qui accepte tous les caracteres de l'alphabet avec un min d'un caractere
    var filtrealpha = new RegExp (/^[\w\d\s]+$/);

// chaque champ est teste par une expression reguliere et retourne la variable à false
    if (!filtrealpha.test(nom) )
    {
// un message d'erreur est ecrit à la suite du champ      
        document.getElementById("errorNom").innerHTML = "Le Nom doit comporter au moins 1 caractère !";
        check = false; 
    }
    else
    {
// reinitialise le champ erreur         
        document.getElementById("errorNom").innerHTML = "";
    }
 
// regex qui controle la presence d'un @
    var filtremail = new RegExp(/@/);
    if (!filtremail.test(mail))
    {
        document.getElementById("errorMail").innerHTML = "Votre adresse mail doit comporter un '@' !";
        check =  false;
    }
    else
    {
        document.getElementById("errorMail").innerHTML = "";
    }

    if (!filtrealpha.test(message))
    {
        document.getElementById("errorMessage").innerHTML = "Votre message doit comporter au moins 1 caractère !";
        check = false;
    }
    else
    {
        document.getElementById("errorMessage").innerHTML = "";
    }

// si tout se passe bien la variable est retourner sans modification
    return check;
}
