alert("bonjour");
var moy = prompt(" La moyenne de l'etudiant ");

if( moy < 10){
    document.write("l'etudiant est: recalé ");
}else if( moy >= 10 && moy < 12){
    document.write("l'etudiant est: reçu ");
}else if( moy >= 12 && moy<= 20){ 
document.write("l'etudiant est: reçu avec mention ");
 } else{ document.write(" la moyenne est invalide"); 
}