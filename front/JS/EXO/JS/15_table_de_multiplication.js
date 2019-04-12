// alert("bonjour");
var x= prompt("veuillez saisir un nombre");
 

 if( x>=2 && x<=9){ 
     var i; 
   for (i=1; i<=10; i++){
      
       document.write( x + "*" + i + "=" + x*i+ "<br>");
    }
    
   }else{
        document.write("le chiffre doit être entre 2 et 9!");
    } 
      

