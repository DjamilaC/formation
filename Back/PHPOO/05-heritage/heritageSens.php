<?php
class A 
{
    public function test1()
    {
        return "test1<hr>";
    }
}
//---------------

class B extends A 
{
    public function test2()
    {
        return "test2<hr>";
    }
}
//---------------

class C extends B
{
    public function test3()
    {
        return "test3<hr>";
    }
}
//---------------
// Exo: Creer un objet de la classe C et afficher les methodes issues de celle-ci et faire les affichages des methodes

$c = new C;
echo '<pre>'; var_dump(get_class_methods($c));echo'</pre>';
echo $c->test1();
echo $c->test2();
echo $c->test3();

// Si la classe B hérite de A et que la classe C herire de B alors la classe C herite de A
