<?php

class Autoload 
{
    public static function chargement()
    {
        require('controller/' . $class . '.php');
        // require('Controller/User.php');
    }

}
//-----------------------
spl_autoload(array('Autoload', 'chargement'));
// s'xecute à chaque fois que le mot 'new' apparait.
// il va apporter en argument de notre fonction ce qui suit après le 'new'

new user;
require('user.php');

/*
$a = new Autoload;
$a -> chargement();
Autoload::chargement();
*/