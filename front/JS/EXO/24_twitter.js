
alert('coucou');

var tweetText = document.querySelector('#tweetContent');
var tweetCount = document.getElementById('counterBlock');
function count(){
    //la fonction calcule la longueur de la chaine de caractère contenue dans le textarea
    var count = 140 - tweetText.value.length;
    //et afficher cette valeur dans la balise p#counterBlock grâce à innerHTML
    tweetCount.innerHTML = count;

    if(count < 0){
        tweetCount.classList.add('red');
    }else if (count >=0){
        tweetCount.classList.remove('red');
    }
}

tweetText.addEventListener('keyup', count );















// var elt = document.querySelector('p');
//  elt.value('keyup', length);
//  function length()

// // var text= prompt("veuillez saisir du texte");
// document.getElementById("ton_textarea").onkeypress = function(){ 
//     document.getElementById("ton_compteur").innerHTML = document.getElementById("ton_textarea").value.length;
//  }