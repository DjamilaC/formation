alert("coucou");
/*--------------------LA CONCATENATION
--------------------*/
/* concatener signifie mettre boutà bout deux chaines de caractères afin d'en former une troisième, nouvelle.
concatener c'est donc additionner des chaines de caractères en javascript on va pouvoir concatener grâce à l'opérateur*/
var année = 2017;
var futur = 3;
var calcul = année + futur;
console.log(calcul) ;
document.write( calcul+ "<br>");
var mois = "7";
var calcul2 = année + " " + mois;
console.log(calcul2);
document.write(calcul2 + "<br>");

var DebutPhrase = "Aujourd'hui ";
var NbStagiaire = 9;
var SuitePhrase =" stagiaires";
var FinPhrase =" sont presents.";
// afficher la phrase en un seul morceau avec la concatenation

var calcul3 = DebutPhrase + NbStagiaire + SuitePhrase + FinPhrase;
console.log(calcul3);
document.write(calcul3);

