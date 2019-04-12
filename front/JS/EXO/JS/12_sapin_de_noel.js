alert("bonjour");
var branche=prompt("choix du nombre d\'étages du sapin");
// on ière le nombre d'etages du sapin

for ( var etage=1; etage<=branche; etage++){
    // pour chaque étage e, nous avons i=e+3 lignes
    for(var i=0; i<etage+3; i++){
        // 2.pour chaque ligne i, nous avons ((etage+i)*2)-1 etoiles
        for(var nb_etoile=1; nb_etoile<=((etage+i)*2)-1; nb_etoile++){
            document.getElementById('sapin').innerHTML+='*';
        sapin.style.color="green"; 
        }
       document.getElementById('sapin').innerHTML+='</br>';
    }  /*fin de lignes  */ 

} /*fin etage*/

// on affiche le pierd
for(var s=1; )