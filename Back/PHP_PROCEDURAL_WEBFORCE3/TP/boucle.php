<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
                    <!--Boucle n° 1  --> 
<h1> Boucle n° 1</h1>
<?php 

   for ($i=1; $i <= 100 ; $i++)
   {
    echo '<div class="col-md-12">'. $i .'</div>' . '<br>';      
   }      
?>
                     <!--Boucle n° 2  -->    


<h1> Boucle n° 2</h1>

<?php 
 for ($i=1; $i <= 100 ; $i++)
 {
     if($i !=50)
 { 
    echo '<div class="col-md-12">'. $i .'</div>' . '<br>';
     
 }else
 {   
    echo '<div class="col-md-12 text-danger">'. $i .'</div>' . '<br>' ;
 }
}

?>
              <!--Boucle n° 3  --> 

<h1> Boucle n° 3</h1>

 <?php 
 for ($i=2000; $i >= 1930 ; $i--)
 {      
    echo '<div class="col-md-12">'. $i .'</div>' . '<br>';
      
 }
?>
            <!--Boucle n° 4  --> 
            <h1> Boucle n° 1</h1>
<?php 

   for ($i=1; $i <= 100 ; $i++)
   {
    echo 'titre à afficher 100 fois' . '<br>';      
   }      
?>
          <!--Boucle n° 5  --> 
          <h1> Boucle n° 1</h1>
<?php 

   for ($i=1; $i <= 100 ; $i++)
   {
    echo 'titre à afficher '. $i .' ième'.' fois'  . '<br>';      
   }      
?>



    
</body>
</html>