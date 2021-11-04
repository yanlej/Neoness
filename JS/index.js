// Fonction pour calculer l'imc au moment de l'inscription
$(document).ready(function (){

    $('#bouton_imc').click(function (){

        var poids = $('#id_poids').val();
        var taille = $('#id_taille').val();

        if(poids == '' || taille == ''){

            $('#imc').text("Veuillez remplir les champs Poids et Taille pour calculer votre IMC !");

        }else if(poids == 0 || taille == 0){

            $('#imc').text("Etes-vous un fantôme ?");

        }else{

            var imc = poids / ((taille/100)*(taille/100));

            if(imc < 18.49){

                $('#imc').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en maigreur !");

            }else if(18.50 < imc && imc < 24.99){

                $('#imc').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous avez un poids 'normal' !");

            }else if(25 < imc && imc < 29.99){

                $('#imc').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en surpoids !");

            }else if(30 < imc && imc < 34.99){

                $('#imc').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en obésité modérée !");

            }else if(35 < imc && imc < 39.99){

                $('#imc').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en obésité sévère !");

            }else{

                $('#imc').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en obésité massive (morbide) !");
            }
        }
    });
});

//Fonction pour cacher / voir le mdp taper par l'utilisateur
$(document).ready(function() {
    var checkbox = $("#checkbox");
    var password = $("#password");
    checkbox.click(function() {
        if(checkbox.prop("checked")) {
            password.attr("type", "text");
        } else {
            password.attr("type", "password");
        }
    });
});

$(document).ready(function (){

    var poids = $('#modif_poids').val();
    var taille = $('#modif_taille').val();

    var imc = poids / ((taille/100)*(taille/100));

    if(imc < 18.49){

        $('#imcPagePerso').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en maigreur !");

    }else if(18.50 < imc && imc < 24.99){

        $('#imcPagePerso').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous avez un poids 'normal' !");

    }else if(25 < imc && imc < 29.99){

        $('#imcPagePerso').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en surpoids !");

    }else if(30 < imc && imc < 34.99){

        $('#imcPagePerso').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en obésité modérée !");

    }else if(35 < imc && imc < 39.99){

        $('#imcPagePerso').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en obésité sévère !");

    }else{

        $('#imcPagePerso').text("Votre IMC est de " +imc.toFixed(2)+ " . Un IMC normal est compris entre 18.5 et 25. Vous êtes en obésité massive (morbide) !");
    }
});