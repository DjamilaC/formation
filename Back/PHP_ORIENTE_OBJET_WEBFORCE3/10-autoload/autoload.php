<?php
function inclusionAutomatique($nomDeLaClasse)
{
    echo $nomDeLaClasse . '<hr>';
    require_once( $nomDeLaClasse.  '.class.php');
    echo "on passe dans inclusionAutomatique() <hr>";
    echo "require_once($nomDeLaClasse. '.class.php') <hr>";
}


spl_autoload_register( 'inclusionAutomatique');
$a = new A;
?>