// alert("bonjour");
/* les boucles permettent de repeter des actions simplement et rapidement. une boucle peut etre vu comme une version informatique de copier un N lignes ou de faire "X fois quelque chose. Par exemple en JS on peut traduire" 5 pas vers l'Est avec cette boucle:*/
// var pas;
// for( pas = 0; pas < 5; pas++){
    //ceci sera executé 5 fois
    // A chaque execution, la variable "pas" augmente de 1
    // lorsqu'elle sera arrivée à 5, la boucle se terminera
    // console.log("faire un pas vers l'est");
// }
/* il ya differents types de boucles mais elles se ressemplent toutes au sens ou elles rèpètent une action un certain nombre de fois(ce nombre peut etre zero)les differents types de boucles permettent d'utiliser differentes façons de commencer et de terminer une boucle. chaque boucle pourra etre utilisées en fonction de la situation st du problème que l'on chercheà résoudre.*/

/*------------------Les boucles-------------------*/

/*------------------La boucle FOR-------------------*/
//for(3arguments) (l'objet argument est un objet, semblable à un tableau correspondant aux arguments passés à une fonction {
    /*--------code--*/
//}
//1.initialise un compteur à partir de combien je compte( par défaut le compteur est la variable'1')
//2. la condition à vérifier qui doit donc etre vraie (true)
//3. le 'pas' d'incrementation(combien j'ajoute à chaque tour, généralement 1 donc i++)
//4.
// var i;
// for(var i=1; i<=10; i+=2){
//     document.write(" <p>Instruction executée : "+i+"  <p>");
// }
// var i;
// for(i = 1; i <= 10; i += 2){
//    document.write("<p>Instruction éxécutée: " + i + "</p>");
// }
//-----La boucle WHILE  (tant que) --------*/
// trés utilisée quand on ne connait pas le nombre de tours de boucles à l'avance
// var j = 1;
// while(j<=10){
//     document.write("<hr/> <p>Instruction exécutée :"+j+ "</p>" );
    /* 50 lignes de codes*/
//     j++; //j= j+1; ou j = +=1;
// }
/* -------EXERCICE----------*/
// j'ai 1000€ sur mon compte
// chaque mois j'ajoute 50€
// combien de temps me faut il pour avoir 2000€ sur mon compte.

// var i = 1000;
 
// while( i<= 2000){
    
//     document.write("<hr/> <p> Instruction exécutée  :"+i+ "</p>" );
//     i += 50;

//  var i = 1000;
    
//  for( i=1000; i<=2000; i+= 50){
    
//     document.write("<p>Instruction éxécutée: " + i + "</p>");
    
//  }
   /***********CORRECTION********* */
   /**************avec la boucle WHILE****** */
//    var monCompte = 1000;
//    var temps = 0;
//    while(monCompte<2000){
//        monCompte +=50;
//        temps++;
//    }
//    document.write(" <h3> sous sur mon compte: " + monCompte+ "</h3>");
//    document.write(" <h3> jusqu'à 2000€, il me faut: " +temps+ "mois </h3>");
//    document.write(" <h3> jusqu'à 2000€, il me faut: " + temps/12 +"années</h3>");

/**************avec la boucle FOR****** */
var tps = 0;
for( var mesSous = 1000; mesSous<2000; mesSous +=50){
    document.write("<h3> sur mon compte j'ai:" + mesSous + "</h3>");
    tps++;
}
document.write("<h3> il aura fallu" + tps + "</h3>")