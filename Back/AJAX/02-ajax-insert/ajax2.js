$(document).ready(function(){
    // on selectionne le bouton submit auquel on associe l'évenement 'click'
    // 'event' représente l'evenement 'click'
    $('#submit').click(function(event){
        event.preventDefault();// preventDefault() fonction prédéfinie, permet d'annuler le comportement du bouton submit qui a pour role de recharger le code / la page
        ajax();// fonction utilisateur executée ci-dessous
    });
    function ajax()
    {
        var personne = $('#personne').val(); // on selectionne le champs input afin de recuperer la valeur saisie dans le champs pour la transmettre à la requete 'aller' AJAX
        console.log(personne);

        var parameters = "personne="+personne;// on definie le paramètre à envoyer avec la requête 'aller' AJAX
        // "personne=" permet de definir où le paramètre va être envoyé dans le fichier PHP ($personne)
        console.log(parameters);
        // la méthode 'post' de jquery permet d'envoyer des requetes HTTP, AJAX, plusieurs paramètres:
        /*
            1. L'URL de destination des requetes AJAX
            2. Les paramètres à fournir à la requête
            3. En cas de succés, function(data) récupère les données de la requete 'retour', tout se trouve dans 'data'
            4. Type de transport de données : JSON
          */ 
        $.post("ajax2.php", parameters, function(data){
            $('#resultat').html(data.resultat);// on selectionne la div id 'resultat' et on accroche le message d'erreur ou de validation à l'interieur
            // data.resultat--> resultat correspond à l'indice 'resultat' du tableau array $tab['resultat'] du fichier ajax2.php
            $('#personne').val(''); // permet de vider le champs input une fois le formulaire validé
        }, 'json');
    }
});