
alert("bonjour");  

/****************1- VARIABLES****************** */
// recherche du bouton dans l'arbre DOM
//le DOM: Document Object Model est une interface de programmation d'application
// (API) pour des documentsHTML valides et XML bien formés. il définit la structure logique d'un document(au sens large du terme) et la manière d'y accéder et de le manipuler.
var bouton= document.getElementById("toggle-rectangle");
var rectangle= document.getElementById.querySelector(".rectangle");
/****************2- FONCTIONS************************ */
/*
1- fonction au click sur le boutton
*/
// La méthode .toggle() va ajouter ou supprimer la class(tel un intérrupteur)
function surClicBouton(){
    rectangle.classList.toggle('hide');
}
/*
2- fonction au double click sur le rectangle
*/
function auDoubleClicRectangle(){
    rectangle.classList.toggle('good');
}
/*
3-A l'entrée au survol de la souris
*/
// la methodr .add() va ajouter la class css.
function auSurvolSourisRectangle(){
    rectangle.classList.add('important');
}
/*
4- A la sortie du survol de la sourie
*/
// La méthode .remove() va ajouter la class css.
function aSortieSourisrectangle(){
    rectangle.classList.remove('good');
    rectangle.classList.remove('important');
}
/*************************3- ECOUTEURS D4EVENEMENT***********/
/************- paramètre: l'evenement**********
 * *********2nd paramètre: la fonction à executer*****
 */

 /*1- Installation d'un gestionnaire d'evenements au clic sur le boutton*/
 bouton.addEventListener('click', surClicBouton);
 /*
 2-Installation d'un gestionnaire d'evenements au double clic sur le rectangle
 */
rectangle.addEventListener('dblclick', auDoubleClicRectangle);
/*
3-Installation d'un gestionnaire d'evenements au survol sur le rectangle
*/
rectangle.addEventListener('mouseover', auSurvolSourisRectangle);
/*
4-Installation d'un gestionnaire d'evenements a la sortie du survol sur le rectangle
*/
rectangle.addEventListener('mouseout', aSortieSourisrectangle);
        


// CORRECTION

// // 1 - va supprimer la class
// function surClicBouton(){
//     rectangle.classList.toggle('hide');
//  }
 
//  // 2 - fonction au double click
//  function auDoubleClickRectangle(){
//     rectangle.classList.toggle('good');
//  }
 
//  // 3 - survol rectangle
//  function auSurvolSourisRectangle(){
//     rectangle.classList.add('important');
//  }
 
//  // 4- A la sortie du survol
//  function aSortieSourisRectangle() {
//     rectangle.classList.remove('good');
//     rectangle.classList.remove('important');
//  }
//  /***************** 3 ECOUTEURS EVENEMENTS *************************************/
//  // paramètre évenement - au click du bouton
//  boutton.addEventListener('click', surClicBouton);
 
//  //  2 instalation géstionnaire évenement  au double click
//  rectangle.addEventListener('dblclick', auDoubleClickRectangle);
 
//  //  3 - instalation géstionnaire évenement  au survol rectangle
//  rectangle.addEventListener('mouseover', auSurvolSourisRectangle);
 
//  //  3 - instalation géstionnaire évenement  à la sortie
//  rectangle.addEventListener('mouseout', aSortieSourisRectangle);