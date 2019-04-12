//syntaxe de base
//commentaire sur une seule ligne
/*
 ici je fais un commentaire
 sur plusieurs lignes*/

 //--1: déclarer une variable en js
 // var Prenom;
 //--2: affecter une valeur à une variable.
 //Prenom ="Sandra";
 // var Prenom= "Sandra";
 //--3:une instrucion se termine TOUJOURS par un point virgule,
 // aussi il est possible d'ecrire plusieurs instructions en
 //une seule ligne.
 //inst_1;
 //inst_2; inst_3;
 //--4:afficher une boite de dialogue (2 façons)
//  alert("Super, tu es arrivé sur mon site!");
// window.alert("super tu es encore arrivé sur mon site");
//--5:afficher dans la console(ici, la valeur de la variable
// prenom)
// console.log("Sandra");
//--6: afficher dans la page web
// document.write("A la pause vous aurez des haribos Pik!");
//--7: demander à l'utilisateur une valeur (2 façons)
// window.prompt("Question: quel jour sommes nous?", "jour de la semaine");
// prompt("Question:Quel jour sommes nous?", "jour de la semaine");
//---> et pour manipuler cette valeur, je n'oublie pas de la 
// stocker.
// var jour = prompt("Question: Quel jour sommes nous?", "jour de la semaine ");
// console.log(jour);
//--8: Attention/!\le JS est sensible à la casse "case sensitive"
//mavariable=/=maVariable =/=ma_variable
//              camel case   snake case
//--9: une variable ne peut pas commencer par un chiffre,
// elle ne doit contenir que des caractères ALPHANUMERIQUES, et ne peut pas etre 
//un mot réservé (var, for......des éléments natifs du langage JS)

//--10: Une variable peut etre déclarée de façon explicite:
// var fruit;
// var fruit ="fraise";
// // ou implicite:
// var fruit_2 = "coco";
// haribo = "tagada";

/*-------------------------------------------------------------
################### LES TYPES DE VARIABLES####################
----------------------------------------------------------------*/
//--1. chaîne de caractères (string)
//l'objet global "string" est un constructeur de chaine de caractères
// var vacances= "2017";
//var destination="Australie";
//--2. Un nombre entier (integer oun int)
// var annee = 2017;
//--3. un nombre décimal (float)
// var nombre_a_virgule = -5.32;
//--4. Un Booléen (boolean = VRAI/FAUX = TRUE/FALSE)
//L'objet BOOLEAN est un objet permettant représenter une valeur booléenne
// var un   Booleen = false; //-- TRUE
//--5. Les constantes
/* La déclaration de constantes permet de créer une constante accessible
 uniquement en lecture. contrairement à une variable sa valeur ne peut plus
  étre modifiée par réaffectation plus bas dans le code
  Une constante ne peut pas etre déclarée à nouveau dans le même script*/
  /*-- par CONVENTION les constantes sont en MAJUSCULES.
  const PAYS = "France"; //string
  const AN = '2020'; //string
  const BIRTH = "2020"; //nombre
  */
 /*--6. TYPEOF permet de connaître le type de ma variable.*/
// console.log('vacances');
// console.log(typeof "vacances");
// console.log('annee');
// console.log(typeof 2019);
// En JS les variables sont auto-typées
// on peut convertir une variable de type NUMBER en STRING et aussi STRING 
// en NUMBER avec les fonctions natives de JS
// la fonction parseInt() renvoie un entier à partir d'une chaîne de caractères.(la fonction parseInt analyse
// une chaine de caractères fournie en argument et renvoie un entier dans une base de données).
var unChiffre ="12";
console.log(unChiffre);
console.log(typeof unChiffre);
// string=>NUMBER
unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log( typeof unChiffre);
// je ré-affecte une valeur
unChiffre = "12.22";
console.log(unChiffre);
console.log(typeof unChiffre);
// STRING => FLOAT
/* La fonction parseFloat permet de transformer une chaîne de caract-res en un nombre flottant 
aprés avoir analysé celle-ci (parsing).*/
/* un nobre flottant obtenu à partir de l'analyse de la chaine de caractères. si le premier 
caractère ne permet pas d'obtenir un nombre, ce sera la valeur NAN qui sera renvoyée*/
unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);
// NUMBER=>STRING
var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString() ;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);
/* la methode toString() en JS permet de donner un aperçu d'un objet instancié. c'est à dire que cette
 méthode ve te retourner une chaîne de caractères representant ton objet: affichage de la valeur 
 des proprietes par exemple*/
