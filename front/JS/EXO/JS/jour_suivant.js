// alert("bonjour");

var jour = prompt(" saisir un nom de jour de la semaine");
 
if(jour === "lundi"){
    document.write(" Le jour suivant est: mardi" );
}else if ( jour === "Mardi"){
   document.write(" Le jour suivant est: Mercredi");
}else if( jour === "Mercredi"){
    document.write(" Le jour suivant est: Jeudi");
}else if(jour === "Jeudi "){
    document.write(" Le jour suivant est: Vendredi");
}else if( jour === "Vendredi"){
    document.write(" Le jour suivant est: Samedi");
}else if( jour ==="Samedi"){
    document.write(" Le jour suivant est: Dimanche");
}else if( jour === "Dimanche"){
    document.write(" Le jour suivant est: Lundi");
}else{
    document.write("ceci n'est pas un jour valable" );
}

var  jour = prompt("quel jour sommes nous ?");
switch(jour){
    case "Lundi":
    document.write("demain nou serons lundi");
    break;
    case "Mardi":
    document.write("demain nou serons Mardi");
    break;
    case "Mercredi":
    document.write("demain nou serons Mercredi");
    break;
    case "Jeudi":
    document.write("demain nou serons Jeudi");
    break;
    case "Vendredi":
    document.write("demain nou serons Vendredi");
    break;
    case "Samedi":
    document.write("demain nou serons Dimanche");
    break;
    case "Dimanche":
    document.write("demain nou serons lundi");
    break;
    
}