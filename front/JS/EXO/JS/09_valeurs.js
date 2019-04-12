alert("bonjour");
// var nb1 = Number(prompt("Entrez nb1 :"));

// var nb2 = Number(prompt("Entrez nb2 :"));

// var nb3 = Number(prompt("Entrez nb3 :"));


// var nb1=nb2=nb3=4;

// if (nb1 > nb2) {
//     nb1 = nb3 * 2;
// } else {
//     nb1++;

// if (nb2 > nb3) {
//     nb1 = nb1 + nb3 * 3;
// } else {
//     nb1 = 0;
//     nb3 = nb3 * 2 + nb2;
// }
// }
// document.write("valeur finale nb1 = " + nb1 );
// document.write("valeur finale nb2 = " + nb2 );
// document.write("valeur finale nb3 = " + nb3 );

var nb1= 4;
var nb2= 3;
var nb3= 2;
if (nb1 > nb2) {
    nb1 = nb3 * 2;
} else {
    nb1++;

if (nb2 > nb3) {
    nb1 = nb1 + nb3 * 3;
} else {
    nb1 = 0;
    nb3 = nb3 * 2 + nb2;
}
}
document.write("valeur finale nb1 = " + nb1 );
document.write("valeur finale nb2 = " + nb2 );
document.write("valeur finale nb3 = " + nb3 );