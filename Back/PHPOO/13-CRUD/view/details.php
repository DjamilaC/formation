
  <?php echo '<pre>';  print_r($donnees); echo'</pre>';?>

<?php
echo '<div class="col-md-6 text-center mx-auto">'; 
 foreach($donnees as $key => $value)
{
 echo "$key: $value <hr>";
} 
 echo'</div>'; 

 ?> 

<ul class="col-md-4 offset-md-4 list-group text-center mb-4">
    <?php foreach($donnees as $key => $value): ?>
    <li class="List-group-item"><?= $key?> : <?= $value?></li>
    <?php endforeach; ?>
</ul>






