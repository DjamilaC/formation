// alert('js okay'); pour verifier que mon fichierjs est bien relié à mon HTML

/* syntaxe de base*/ 

// deux slash pour faire un commentaire uniligne

/*
ici je peux faire un commentaire
sur plusieurs lignes
*/

//-- 1: Déclaration d'une variable en js
var Prenom;
//-- 2:Affecter une valeur
var Prenom ="Alpha";

//--3: Une instruction se termine TOUJOURS par un point virgule, aussi il est possible d'ecrire plusieurs instructions sur une seule ligne
var instruction_1;
var instruction_2, instruction_3;

//--5: Afficher une boite de dialogue (2facons)
alert("WOW! Tu es sur ma page");
window.alert("WOW Tu es encore sur ma page");

//--Afficher dans la console(ici, la valeur de la variable Prenom)
console.log(Prenom);

//--Afficher du texte dans une page web
document.write('Bonjour a tous  <br> ');

//--7: Demander à l'utilisateur une valeur (2façons)
var retournerValeur = window.prompt("Question: on est quel jour?", "Saisissez le jour de la semaine");

var retournerValeur = prompt("Question: on est quel jour?", "Saisissez le jour de la semaine");

//--8: Attention le JS est sensible à la casse (case sensitive)
// mavariable=/=maVariable




//--9: une variable ne peut pas commencer par un chiffre, ne doit pas contenir que des caractères alphanumériques, et ne peut pas etre un mot( var, for....des éléments natifs du langage JS)
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Mots_r%C3%A9serv%C3%A9s

//--10: Une variable peut étre déclarée de façon explicite:
var prenom="Djamila";
//--ou implicite:
prenom ="Djamila";

//--1.chaine de caractère (string)

var vacances ="Guadalajara";

//--2. Un nombre entier (integer)
var annee = 2017;

//--3. Un nombre décimal (float)
var nombre_a_virgule = -5.32;

//--4. Un booléan (boolean= VRAI/FAUX= TRUE/FALSE)
var unBoolean = false; //-- true

//5.les constantes
//* la déclaration const permet de créer une constante accessible uniquement en lecture.contrairement à une variable, sa valeur ne peut etre modifiée par réaffectation plus bas dans le code. Une constante ne peut pas etre déclarée à nouveau dans le meme script.*/

// par convention les constantes sont en majuscules

/*-------------------------------------------------*/
const PAYS = "France";
typeof(annee);
typeof(destination);
typeof(nombre_a_virgule);
typeof(unBoolean);

console.log(annee);
//Intro JS & Algo
/*================================================================================
                            LA CONCATENATION
=================================================================================*/
// var x = "Auguste";
// console.log('bonjour '+ x + ' Ba + comment allez vous?!!');

// 1er exemple
var annee = 2017;
var mois = " 3";
var calcul = annee + mois;
console.log(calcul);
document.write(calcul + "<br>"); //d'abprd dans le navigateur

// Je réaffecte une valeur à ma variable mois
mois = 7;
var calcul = annee + "/" + mois ;
console.log(calcul);
document.write(calcul + "<br>" );

// 2ème exemple
var DebutDePhrase = "aujourd'hui";
var NombreDeStagiaires = " 9";
var SuitDePhrase = " stagiaires";
var FinDePhrase = " sont presents. <br>";
document.write(DebutDePhrase +NombreDeStagiaires+SuitDePhrase+FinDePhrase );

/* exercice: créez une concaténation*/

var phrase1 ="Je m'appelle ";
var phrase2 = "Sandra et j'ai ";
var age = 375;
var phrase3 = " ans!";
document.write(phrase1+phrase2+age+phrase3);
console.log(phrase1+phrase2+age+phrase3);

/*====================================================================================
                        LES OPERATEURS ARITHMETIQUES            
==================================================================================== */

//###########   L'ADDITION     ################
//---Déclaration de plusieurs variables à la suite
var nb1, nb2, resultat;

nb1 =10;
nb2=5;
//resultat de nb1+nb2 avec l'opérateur "+"
resultat=nb1+nb2;
console.log(resultat);
document.write(resultat + "<br>");

//############ LA SOUSTRACTION ##############
resultat=nb1-nb2;
console.log(resultat);
document.write(resultat + "<br>");

//################## LA MULTIPLICATION#############
resultat=nb1*nb2;
console.log(resultat);
document.write(resultat + "<br>");

//############# LA DIVISION########################
resultat=nb1/nb2;
console.log(resultat);
document.write(resultat + "<br>");

//################# LA MODULO ######################
resultat = nb1%nb2;
console.log(resultat);
document.write(resultat + "<br>");

//################# LES SIMPLIFIEES///////
nb1 = 15;
nb1 = nb1+ 5;
console.log(nb1);

nb1+ 5; //--ce qui equivaut à ecrire nb1= nb1 + 5;
console.log(nb1);
document.write(nb1 +"<br>")
//-- je peux procéder de la même manière pour les autres opérateurs arithmétiques:"+", "-", "/", "*", "%"

var nb1 =1;
nb1= nb1 + 1;
console.log(nb1);
document.write(nb1);

nb1+
console.log(nb1);

nb1=nb1 -1;
console.log(nb1);

nb1--
console.log(nb1);

/*-----------------LES CONDITIONS------------------------*/
var MajoriteFR = 18;
if(MajoriteFR >= 18){
    alert("Bienvenue");
}else{ alert("Allez voir ailleurs!");
}
// Exercice: créer une fonction permettant de verifier l'age d'un visiteur.s'il a la majorité légale, alors je lui souhaite la bienvenue, sinon, je fais une redirection sur google apres lui avoir signalé le soucis.

var retournerValeur = window.prompt("quel age as tu?","<Saisissez votre age>"); 
// var majoritélegale = 18;
if(retournerValeur >= 18){
    alert(" Bienvenue");
    window.alert(" Bienvenue");
}else{ 
    document.location.href = "https://www.google.com/";
}

//*************CORRECTION****************/
//1-- Déclaration de la variable de reception:

var age= prompt("Quel age avez vous?","<Saisissez votre age>");
var age= Number(prompt("Quel age avez vous?","<Saisissez votre age>"));

//2--ma condition
if(age >= 18){
    alert("Bienvenue sur mon site");
} else{
    alert("Vous n'etes pas majeur");
    document.location.href = "https://www.google.com/";
}


