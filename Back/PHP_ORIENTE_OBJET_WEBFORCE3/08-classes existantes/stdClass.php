<?php
echo '<pre>'; print_r(get_declared_classes()); echo'</pre>';

$tab = array('Mario', 'Yoshi', 'Toad', 'Bowser');
$objet = (object)$tab; // cast : transformation
echo '<pre>'; print_r($objet); echo'</pre>';// un objet fait partie d'une classe STDCLASS (classe standard de PHP) lorsque celui-ci est orphelin et n'a pas été instanciépar un 'new'
echo $objet->{0} . $objet->{1}; // permet d'afficher un element de l'objet

foreach($objet as $key=>$value)
{
    echo "$key - $value<br>";
}