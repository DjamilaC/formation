

$(document).ready(function()
{
    $('#action').click(function(event){
        event.preventDefault();
        ajax();
           
    });
    function ajax(){
        var resultat = $('#resultat').val();
        console.log(resultat);
        var parameters = "resultat="+resultat;
        $.post('exo_ajax.php', parameters, function(data){
            $('#resultat').html(data.resultat);
        }, 'json');
    }
    
});
