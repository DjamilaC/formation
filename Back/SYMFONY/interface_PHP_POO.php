
<?php 

// interface.php
interface Mouvement 
{
    public function start();
    public function turnLeft();
    public function turnRight();
}

// Aurelia
class Avion extends Vehicule implements Mouvement
{
    public function start(){

    }
    public function turnLeft(){

    }
    public function turnRight(){

    }

}
//Iuliia
class Bateau extends Vehicule implements Mouvement
{
    public function start(){

    }
    public function turnLeft(){

    }
    public function turnRight(){

    }

}