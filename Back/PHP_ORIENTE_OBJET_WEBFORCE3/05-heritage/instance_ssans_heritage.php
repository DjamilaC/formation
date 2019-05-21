<?php
class A 
{
    public function direBonjour()
    {
        return "Bonjour";
    }
}
//------------------
class B // san heritage 
{
    public $objetA;
    // __construct()  s'execute automatiquement lorsque nous instancions B
    public function __construct()
    {
       
        $this->objetA = new A; // je crée un objet issu de la classe A que je stock dans la proprite nommé $objetA
        echo "s'execute automatiquement et détail: ";
        echo '<pre>'; var_dump($this->objetA);echo'</pre>';
    }
    public function uneMethode()
    {
         return $this->objetA->direBonjour();// dans mon objet B '$b' ($this), je peux appeler des méthodes sur mon objet A '$objetA'
         // Habituellement nous mettons qu'une seule flèche, mais là; $objetA contient un objet une autre flèche est donc possible
    }
}
//--------------
$b = new B;
echo $b->uneMethode() . '<hr>';
echo $b->objetA->direBonjour();