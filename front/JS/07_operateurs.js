/**
 l'operateur ET : && ou AND

 ------ si je cumule 2 conditions:
 => prénom === prenomlogin
 => monAge === ageLogin

 pour que les 2 correspondent pour étre validés il faut les associer 
 if((prenomLogin === prenom) && (ageLogin === monAge)){
     /*----code-----*/
     /*-----code-----*/
     // je ne rentre ici que si les 2 conditions vraies
      // } 
      /*
      
      if((A) && (B)) {.....}
      => si A est FAUX et B est VRAI => FAUX
       => si A est FAUX et B est FAUX => FAUX
       => si A est VRAI et B est FAUX => FAUX
       => si A est VRAI et B est VRAI => VRAI
      
      l'operateur OU : || ou OR ( | pipe => alt gr +6)
      
      if((c) || (D)) {.....}

      => si C est FAUX ou D est FAUX => FAUX
       => si C est FAUX ou D est VRAI => VRAI
       => si C est VRAI ou D est FAUX => VRAI
       => si C est VRAI ou D est VRAI => FAUX
     */


     /*------------"!"------------
    
     /*
     L'opérateur "!" signifie le contraire de 
     var utilisateurLog = true;
     if(!utilisateurLog){
         // si l'utilisateur n'est pas loggé.
     }
     // ce qui revient à écrire:
     if ( utilisateurLog == false){
         // si l'utilisateur n'est pas loggé.
     }
     */