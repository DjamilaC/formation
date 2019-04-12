// // alert("bonjour");
// var i = prompt("entrez du texte");
// if ((i=== "oui") || (i=== "non")){
// prompt("le jeu est fini");

// }else if((i!=="oui") && (i!=="non")){
//     prompt("saisir un autre texte");

// }

/**********correction sandra**********/

var disMoi = "";
var i=0;
while((disMoi !== "oui") && (disMoi!== "non")){
    disMoi = prompt("alors on joue au Ni oui Ni non?");
    document.write(disMoi + "pour la" + i + "° fois, dis moi oui ou non! <br>");
    i++
}
document.write("<h1 style='background-color:cyan; text-align: center;'>Fini");