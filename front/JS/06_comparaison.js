
// alert(" coucou");
/* javascript fournit trois operations permettant de comparer des valeurs:
=> l'égalité stricte ( ou identité ou << triple egal>>) utilisant "===", 
=> l'égalité faible ( ou << double égal>>) utilisant ==,
=> Objet.js () ajouté avec ECMAScript 2015*/
// l'operateur de comparaison == signifie 'égale à'
// il permet de vérifier que les valeurs de 2 variables sont identiques.
// var nb1 = 123;
// var nb2= 123;
// console.log( nb1 == nb2);

// l'opérateur de comparaison === signifie 'strictement égal à'
// il permet de vérifier la VALEUR et le type
//  console.log( nb1===nb2);
 // l'opérateur != signifie 'différent de .... en VALEUR'
//  console.log(nb1!=nb2);
 // l'opérateur !== signifie 'strictement différents de.....'
 // en VALEUR et en type
//  console.log( nb1!==nb2); // retourne FALSE

 /*--------------EXERCICE------------------ */
 /* j'arrive sur un espace sécurisé au moyen du prénom et de l'âge
 je dois saisir mon prénom et mon âge pour être authentifié sur le site ( les infos sont en BDD, ici dans mes variables prénom et âges)
 en cas d'echecs une alerte m'informe du problème.
 si tout se passe bien, un message de bienvenue m'acceuille*/

// var monPrenom = "djamila";
//     monAge = 38;
//     var MDP = "Emma2";
//  var prenom=  prompt( "veuillez saisir votre prénom");
//  var age  = prompt( "veuillez saisir votre age");
// var motDePasse= prompt( " saisir le mot de passe");
 
//    if( prenom===monPrenom && age===monAge && motDePasse===MDP )
//    {alert( " vous etes le bienvenu"); } 
// else {   
//          alert(" vous n'etes pas authentifié");
//          }
   
           
if(prenomLogin === prenom) {
    // alert('test')
    // 2a. Si tout est ok, je continue la vérification avec l'age.
    //2a1. Je demande à mon utilisateur de rentrer son age (prompt)
    var ageLogin = parceInt (prompt('Votre age?'));
    if(ageLogin === monAge) {
        alert('Bienvenue' + prenomLogin);
    }else {
        // 2a2. Si les ages ne correspondent pas, je lance une ALERT.
        alert("Erreur d'age");
    }
 }else {
    // 2b. Sinon, les prenoms ne correspondent pas, je lance une alerte.
    alert("Attention, prénom non reconnu");
 }
 
 var prenom, monAge;
 prenom = "Iuliia";
 monAge = 24;
 mdp = 'herisson';
 var prenomLogin = prompt('Quelle est votre prénom?');
 if(prenomLogin === prenom) {
    var ageLogin = parseInt(prompt('Votre age?'));
    if(ageLogin === monAge) {
        var mdpLogin = prompt('Quelle est votre mot de passe?');
        if(mdpLogin === mdp){
            alert('bienvenue' + prenomLogin);
        }else{
            alert('Problème avec votre mot de passe!');
        }
    }alse{
        alert('Erreur dage');
    }
 }else{
    alert('Attention, prénom est pas reconnue');
 }
  


      