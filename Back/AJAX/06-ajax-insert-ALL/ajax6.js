
$(document).ready(function(){ // controler que le DOM est completement chargé
    $('#submit').click(function(event){
        event.preventDefault();
        ajax();
    }); 
    function ajax()
 {
    // var id_employe = $('#id_employe').val();
    // console.log(id);
    // var parameters = "id_employe="+id_employe;

     var prenom = $('#prenom').val();
     

    var nom = $('#nom').val();
     

     var sexe = $('#sexe').val();


     var date_embauche= $('#dateembauche').val();
     

    var service = $('#service').val();
     

    var salaire = $('#salaire').val();
     

     var parameters = "prenom="+prenom+"&nom="+nom+"&sexe="+sexe+"&date_embauche="+date_embauche+"&service="+service+"&salaire="+salaire;

    console.log(parameters);
     
    $.post("ajax6.php", parameters, function(data){
       // on selectionne la div id 'employes' et on remplace le selecteur initial par le selecteur mis à jour, on écrase un selecteur par un autre
       $('#resultat').html(data.resultat);
       $('#message').html(data.message);
        
   }, 'json');
  $('#form')[0].reset();

 }  

});
