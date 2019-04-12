/*Le mode strict de ECMAScript 5 permet de choisir une variante restrictive de
JavaScript.Le mode strict n'est pas seulement un sous-ensemble de JavaScript :
il possède intentionnellement des sémantiques différentes du code normal.
Les navigateurs ne supportant pas le mode strict exécuteront le code d'une façon
légèrement différente de ceux le supportant, il ne faut donc pas compter sur
le mode strict pour éviter des tests sur les navigateurs qui ne le supportent pas.
Les codes en mode strict et en mode non - strict peuvent coexister, ce qui permet
de réécrire les scripts en mode strict de façon incrémentale.
Le mode strict apporte quelques changements à la sémantique « normale » de JavaScript:
Le mode strict élimine quelques erreurs silencieuses de JavaScript en les changeant
en erreurs explicites(une exception sera levée).
Le mode strict corrige les erreurs qui font qu'autrement il est difficile pour les
moteurs JavaScript d'effectuer des optimisations.
Le code sera donc exécuté plus rapidement en mode strict, sans changer une seule
ligne si cela n'est pas nécessaire.
Le mode strict interdit les mot - clés susceptibles d'être définis dans les futures
versions de ECMAScript.*/



'use strict';   // Mode strict du JavaScript

// Déclaration de trois variables.
var computer;
var player;
var random;


// Récupération du choix du joueur.
player = window.prompt('Que choisissez-vous : pierre, feuille ou ciseau ?');


// Récupération d'un nombre aléatoire entre 0 et 1 inclus.
random = Math.random();

//test du random
console.log(random);

if(random <= 0.33)
{
    computer = 'pierre';
}
else if(random <= 0.66)
{
    computer = 'feuille';
}
else
{
    computer = 'ciseau';
}

document.write("<p>Choix de l'ordinateur : " + computer + '</p>');


if(computer == player)
{
    document.write('<p>Vous avez choisi la même chose : égalité !</p>');
}
else
{
    // Le joueur et l'ordinateur n'ont pas choisi la même chose, la bataille commence !

    switch(computer)
    {
        case 'ciseau':
        if(player == 'pierre')
        {
            document.write('<p>La pierre écrase le ciseau : vous gagnez !</p>');
        }
        else // player == 'feuille'
        {
            document.write('<p>La feuille est découpée par le ciseau : vous perdez !</p>');
        }
        break;

        case 'feuille':
        if(player == 'pierre')
        {
            document.write('<p>La pierre est enveloppée par la feuille : vous perdez !</p>');
        }
        else // player == 'ciseau'
        {
            document.write('<p>Le ciseau découpe la feuille : vous gagnez !</p>');
        }
        break;

        case 'pierre':
        if(player == 'feuille')
        {
            document.write('<p>La feuille enveloppe la pierre : vous gagnez !</p>');
        }
        else // player == 'ciseau'
        {
            document.write('<p>Le ciseau est écrasé par la pierre : vous perdez !</p>');
        }
        break;
    }
}