
  <?php echo '<pre>';  print_r($donnees); echo'</pre>';?>

<?php
echo '<div class="col-md-6 text-center mx-auto">'; 
 foreach($donnees as $key => $value)
{
 echo "$key: $value <hr>";
} 
 echo'</div>';