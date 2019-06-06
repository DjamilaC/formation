$(document).ready(function(){
 $('#submit').click(function(event){
     event.preventDefault();
     ajax();
     
 });

 function ajax()
 {
     var id = $('#personne').val(); // on selectionne le selecteur id 'personne' afin de récuperer l'id de l"employé selectionné
     console.log(id);

     var parameters = "id="+id; // on définit les paramètres à envoyer à la requete AJAX 'aller', qui sera transmise à la requete de suppression PHP dans le fichier ajax3.php
     console.log(parameters);
    /*
         post: méthode JQUERY permettant d'envoyer des requêtes AJAX en HTTP
         arguments : 
                     1.l'URL de destination des requêtes AJAX
                     2. Les paramètres envoyés avec la requete AJAX 'aller'
                     3. En cas de succès, on receptionne le résultat de la requête AJAX 'retour'
                     4. Type de transport de données 'JSON'
    */
     $.post("ajax3.php", parameters, function(data){
        $('#employes').html(data.resultat);// on selectionne la div id 'employes' et on remplace le selecteur initial par le selecteur mis à jour, on écrase un selecteur par un autre
        $('#message').html(data.message);
    }, 'json');

        
 }
});