<?php
$perso = array ("m" => "Mario", "l" => "Luigi", "t" => "Toad", "b" => "Browser");
$it1 = new ArrayIterator($perso);
echo '<pre>'; print_r($it1); echo'</pre>';
echo '<pre>'; print_r(get_class_methods($it1)); echo'</pre>';

$it1->rewind();
while($it1->valid())
{
    echo $it1->key(). ' - '. $it1->current() . '<br>';
    $it1->next();
}
/*
    rewind(): permet de se placer au debut du fichier/array/dossier
    valid() : permet de verifier s'il ya des informations à parcourir
    key() : permet d'afficher l'indice
    current() : afficher la valeur
    next() : permet de passer à l'element suivant(comparable à $i++, incrémentation)
*/

$it2 = new SimpleXmlIterator('liste.xml', null, true);
echo '<pre>'; var_dump($it2); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($ti2)); echo '</pre>';

$it2->rewind();
while($it2->valid())
{
    echo $it2->key() . ' - ' . $it2->current() . '<br>';
    $it2->next();
}

//Iterator est ce qu'on appelle un design pattern, qui permet de définir une solution pratique à un problème fréquent

 // Exo: faire la même chose avec la classe DirectoryIterator()
$it3 = new DirectoryIterator('..');
echo '<pre>'; var_dump($it3); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($it3)); echo '</pre>';

while($it3->valid())
{
    echo $it3->key() . ' - ' . $it3->current() . '<br>';
    $it3->next();
}

// Dans les 3 cas, nous avons des données de type differents, mais nous avons la meme structure de code permettant de parcourir les données, les memes methodes sont presentes dans les 3 classes differentes

