
$(document).ready(function(){ // controler que le DOM est completement chargé
      
    
        var prenom = $('#personne').text();// on selectionne le selecteur id 'personne' afin de récuperer l'id de l"employé selectionné
        console.log(prenom);
   
        var parameters = "prenom="+prenom; 
        console.log(parameters);
         
        $.post("ajax4.php", parameters, function(data){
           // on selectionne la div id 'employes' et on remplace le selecteur initial par le selecteur mis à jour, on écrase un selecteur par un autre
           $('#resultat').html(data.resultat);
       }, 'json');
   
           
    

});
