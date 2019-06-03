<?php
final class Application
{
    public function lancementApplication()
    {
        return "l'appli se lance comme cela";
    }
}
//-----------------------------------------------------------
//final permet de verouiller une classe ou une methode
$app = new Application; // une classe finale
echo '<pre>'; var_dump($app); echo'</pre><hr>';
echo $app->lancementApplication(). '<hr>';

class Application2
{
    final public function lancementApplication()
    {
        return "l'appli se lance comme cela";
    }
}
//-----------------------------------------
class Extension extends Application2
{
    // public function lancementApplication()
    // {
        // /!\ erreur!! en cas d'héritage, il n'est pas possible de redéclarer une méthode 'final', elle est verouillé, on ne peut plus la surcharger, l'ameliorer
    // }
}
//-----------------------------------------------
$ext = new Extension;
 echo $ext->lancementApplication();
 //------------------------------------
// L'interet de mettre le mot clé 'final' sur une méthode est de vérouiller afin d'empecher tout sous-classe de la redéfinir (quand nous voulons que le comportement d'une methode soit réservé durant l'héritage)