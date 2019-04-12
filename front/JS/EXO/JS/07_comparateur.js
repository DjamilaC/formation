

// alert("bonjour");


// var nb1 = prompt("introduire la première valeur");
// var nb2 = prompt("introduire la deuxième valeur");

//  if( nb1==nb2){
//      document.write( nb1 + " est égal à " + nb2);

//  }else if( nb1 >nb2){
//     document.write(  nb1 + " est plus grand que " + nb2);

//  }else if( nb1<nb2){
//     document.write(  nb1 + " est plus petit que " + nb2);
//  }


 //------------Correction---------//

 var nb1 = prompt("introduire la première valeur");
var nb2 = prompt("introduire la deuxième valeur");
if(isNaN(nb1) && !isNan(nb2)){
    if(nb1 < nb2){
        document.write("votre premier nombre: " + nb1 + " est plus petit que: " + nb2 );
    }else if(nb1 > nb2){
        document.write("votre premier nombre: " + nb1 + " est plus grand que: " + nb2 );
    }else{ 
        document.write("votre premier nombre: " + nb1 + " est égal à : " + nb2 );
    } 
}else{ 
    document.write(" Vous n'avez pas saisi de chiffre" );
}  