// alert("vive javaScript");
/*Linstruction "if" exécute une instruction si une condition donnée est vrai. Si la condition n'est pas vérifiées, il est possible d'utiliser une autre instruction.*/
//----------------STRUCTURE DE BASE IF---------------//
// if(true){ /*par defaut la condition à verifier le "if" verifie si elle est vrai*/
/*------ici le code-------*/
// }
// var nb1 = 10;
// if(nb1 < 50){
//     console.log("nb1 est bien inferieur à 50");
// }
// if(true){
//     /*........le code ......si  c'est vrai....*/
// }else{
//     /*............le code si c'est faux.....*/
// }
// if(nb1 > 50){
//     console.log("nb1 est bien inferieur à 50");
// }else{
//     console.log("nb1 n'est pas inferieur à 50");
// }
/*-------------EXERCICE---------------------
on utilise le if pour verifier l'ge de l'internaute
=> si il est majeur je lui souhaite la bienvenue.
=> si il est mineur je :
-1 lui signele et 2: le renvoie vers un autre site*/
//--je declare la majorité légale
//-- demander l'age en s'asssurant que nous avons un Number
// je verifie si mon internaute est majeur
// si il est mineur je le lui signele
//et en suite je le redirige vers le site de mon choix

var majorite= 18;
var age= parseInt( prompt("Itroduisez votre age")) ;
if(age>=majorite){
    alert("Bienvenue dans mon site");
}else{
    alert("Vous n'etes pas autorisé");
    document.location.href = "https://www.google.com/";
   
}


