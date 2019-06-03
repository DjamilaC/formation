<?php
class Animal
{
    protected function deplacement()
    {
        return "je me deplace";
    }
    public function manger()
    {
        return "je mange chaque jour";
    }
}
//--------------------
class Elephant extends Animal 
{
    public function quiSuisJe()
    {
        return "je suis un élephant et" . $this->deplacement() .'<hr>';
    }
}
//------------------------
class Chat extends Animal 
{
    public function quiSuisJe()
    {
        return "je suis un chat";
    }
    public function manger()
    {
        return "je me goinfre comme un gros chat";
    }
}
$elephant = new Elephant;
echo '<pre>'; print_r(get_class_methods($elephant)); echo'</pre>';
echo $elephant->quiSuisJe().'<hr>';
echo $elephant->manger().'<hr>';

// Créer un objet issu de la classe 'chat' et afficher le resultat des 2 méthodes déclarées à l'interieur

$chat1 = new Chat;
echo '<pre>'; var_dump($chat1); echo '</pre>';
echo $chat1->quiSuisJe(). '<hr>';
echo $chat1->manger() . '<hr>';// affiche "je me goinfre comme un gros chat" !! et non pas "je mange chaque jour" car la méthode a été définie dans la class chat
// l'interpreteur cherche d'abord dans la class 'chat' et seulement si la même méthode n'avait pas été trouvé, il aurait chercher dans la classe dont j'hérite
// il n'est pas possible d'hériter de plusieurs classes en mêmes temps