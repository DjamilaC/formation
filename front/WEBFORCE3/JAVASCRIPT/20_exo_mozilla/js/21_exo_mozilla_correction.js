alert('ok!');

//fonction qui va switcher l'image lorsqu'on clique dessus

//on stocke dans la variable moImage la première image du document
//querrySelectorAll récupererait toutes les images

var monImage = document.querySelector('img');
// var monImage = document.querySelectorAll('img')[0];
console.log(monImage);

// On va utiliser la méthode addEventListener pour ajouter un ecouteur de click sur l'image
// addEvenListener attends deux parametres: l'evenement (click) et l'action ( changer la source de l'image)

// alert('click');

monImage.addEventListener("click", function(){
    // recuperer dans une variable maSrc, la valeur actuelle de l'attribut src de monImage. On va utiliser getAttributs(), l'argument attendu pour cette methode est le nom d'un attribut de balise html(ici ça sera src)
    var maSrc = monImage.getAttribute('src');
    console.log(maSrc);

    // Si(la valeur de la variable maSrc = 'image/logo_firefox1.png')
    // Alors
    //alert("je suis l'image 1")
    // sinon
    // alert (maSrc + "n'est pas l'image 1")
    // première version de cette fonction pour tester

    // if(maSrc === "image/logo_firefox_1.png"){
    //     alert("je suis l'image 1, ma source est: " + maSrc);
    // }else{
    //     alert("je ne suis pas l'image 1, ma source est: " + maSrc);
    // }

    // Seconde version: ici on va intervertir les images avec la methode setAttribute qui attend 2 argument:
    // 1- l'attribut ciblé (ici ça sera src)
    // 2- sa nouvelle valeur ( ici ça sera image/logo_firefox_2.png)

    if(maSrc === "image/logo_firefox_1.png"){
    //  alert("je suis l'image 1, ma source est: " + maSrc);
     monImage.setAttribute('src', 'image/logo_firefox_2.png');
     }else{
    //    alert("je ne suis pas l'image 1, ma source est: " + maSrc);
       monImage.setAttribute('src', 'image/logo_firefox_1.png')
    }
    }); // FIN DE LZ FONCTION D4INVERSION DES IMAGES

    // dans le code precedent on a fait:
    // 1- quand on clique sur l'image(dans la fonction addEventListener)
    //2- on a utilisé la structure conditionnelle if else pour voir si la valeur de l'attribt src est égale au chemein de l'image originale
    //3- si c'est le cas, on change la valeur de cet attribut en lui indiquant le cjhemin vers la nouvelle image
    //4- si ça n'est pas le cas (ce qui signifie que l'image a été changée), le valeur de l'attribut src revient à sa valeur initiale

    /* Prochaine recette (fonction): ajouter un message personnalisé
    on va changer le tittre de la page pour inclure un message pour le visiteur du site 
    ce message sera conservé quand l'utilisateur quittera le site et si il y revient plus tard.
    on va conserver ce message dans le cadre du navigateur en utilisant l'API webstorage(API une librairie du navigateur"competences du navigateur") 
    Au final, on ajoutera une option sur le bouton, pour pouvoir changer l'utilisateur et le message d'accueil si besoin
    */
   // 1ère étape: récuperer dans une variable monTitre le 1er h1 de document et l'afficher en console

   var monTitre = document.querySelector('h1');
   console.log(monTitre);

   // 2ème étape : récuperer dans une variable monBouton, la première balise button du document

   var monBouton = document.querySelector('button');
   console.log(monBouton);

   // Prépare la fonction du message d'accueil(qui sera invoquée, déclenchée plus tard)

   function definirNomUtilisateur(){
        var monNom = prompt('Ecris ton prénom');
        localStorage.setItem("nomUtilisateur", monNom);
        monTitre.textContent = "Bienvenue " + monNom;
   }

/*  EXPLICATION DE LA FONCTION
cette fonction utilise la methode prompt() qui affiche une boite de dialogue, un peu comme une alert(), sauf qu'elle permet à l'utilisateur de saisir des données et de les enregistrer dans une variable quand l'utilisateur click sur ok
dans notre exemple on demande à l'utilisateur de saisir son nom
ensuite nous apellons l'API localStorage qui permet de stocker des données dans le navigateur pour pouvoir les reutiliser ulterieurement.
Nous utilisoons la fonction setItem de cet API pour stocker la donnée qui nous interesse dans un conteneur apellé nomUtilisateur. la valeur stockée ici est la valeur de la variable monNom qui contient le nom saisi par l'utilisateur dans le prompt.
Au final on utilise la proprieté textContent du titre pour lui affecter un nouveaucontenu
*/
   // La suite va etre: tester si le nom n'est pas dans le cache. S'il n'y est pas, on demande avec prompt son nom à l'utilisateur (déclenche la fonction definirNomUtilisateur)
   // si il y est, si le nom est deja dans le cache on le récupère et on l'affiche dans le titre
   // Pour tester: vider le localStorage
//    localStorage.clear();
   if(!localStorage.getItem("nomUtilisateur")){
       definirNomUtilisateur();

   }else{
       var nomEnregistre = localStorage.getItem("nomUtilisateur");
       monTitre.textContent = "Bienvenue à nouveau " + nomEnregistre;
   }
   // on va faire ce test aprés

   // au clic sur le boutton, invoquer la fonction definirNomUtilisateur

   monBouton.addEventListener('click', function(){
      definirNomUtilisateur(); 
   })
   /*
   le bloc de la conditionnelle if else utilise l'operateur de négation NON (le point d'exclamation) pour verifier si le navigateur possède une donnée enregistrés apellée nomUtilisateur ou pas.
   sinon, la fonction definrNomUtilisateur() est invoquée pour créer cette donnée
   si elle existe(ce qui correspond au cas ou l'utilisateur est deja venu sur la page), on la recupere avec la méthode getItem(). pour finir on définit le contenu de textContent pour le titre avec une concaténation de chaine suivie du nom de l'utilisateur.
   Enfin, on associe le gestionnaire d'evenements click au boutton. Quand l'utilisateur cliquera sur le bouton, àa declenchara l'execution de la fonction definirNomUtilisateur().
   Ce bouton permet donc à l'utilisateur de modifier son nom s'il le souhaite.
   
   
   
   */
   