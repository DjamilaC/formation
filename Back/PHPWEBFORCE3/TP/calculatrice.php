<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice</title>
    <!-- link bootstrap -->
    
</head>
<body>
<?php 
// echo'<pre>'; print_r($_POST);echo'</pre>';
if(isset($_POST['calculer']))
{
    if(isset($_POST['nombre1']) && isset($_POST['nombre2']) && isset($_POST['operateur']))
    {
                 // ADDITION
        if($_POST['operateur'] == 'addition')
        {
            echo 'le resultat de l\'addition de ' . $_POST['nombre1'] . ' et '. $_POST['nombre2'] . ' est de :  '; echo $_POST['nombre1'] + $_POST['nombre2'];
        }

                // SOUSTRACTION
        if($_POST['operateur'] == 'soustraction')
        {
            echo 'le resultat de la soustraction de ' . $_POST['nombre1'] . ' et '. $_POST['nombre2'] . ' est de :  '; echo $_POST['nombre1'] - $_POST['nombre2'];
        }

                // DIVISION
        if($_POST['operateur'] == 'division')  
        {
            if($_POST['nombre2'] != 0)
            {
               echo 'le resultat de la division de ' . $_POST['nombre1'] . ' par '. $_POST['nombre2'] . ' est de :  '; echo $_POST['nombre1'] / $_POST['nombre2']; 
            }else       
        
            {
                echo 'On ne peut pas diviser un nombre quelconque par 0, veuillez entrer un nombre different de zero';
            }
        
        }
             // MUTIPLICATION
        if($_POST['operateur'] == 'multiplication')
             {
                 echo 'le resultat de la soustraction de ' . $_POST['nombre1'] . ' et '. $_POST['nombre2'] . ' est de :  '; echo $_POST['nombre1'] * $_POST['nombre2'];
             }
}
}



?>

<form method="post" action="">
   
        
    <label for="nombre1">Nombre1</label>
    <input type="text" class="form-control" id="nombre1" aria-describedby="" placeholder="" name="nombre1">
            
        
    <select class="form-group mt-4 col-md-2" name="operateur" >
                        <option value="addition">+</option>
                        <option value="soustraction">-</option>
                        <option value="division">/</option>
                        <option value="multiplication">*</option>
                    </select>
        
        
    <label for="nombre2">Nombre2</label>
    <input type="text" class="form-control" id="nombre2" aria-describedby="" placeholder="" name="nombre2"> 
    <button type="submit" name="calculer">Calculer</button> 

        

        

</form>



</body>
</html>