<?php
namespace Controller;
class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \Model\EntityRepository;
    }
    public function handlerRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;
        try
        {
            if($op == 'add' || $op == 'update') $this->save($op);
            elseif($op == 'select') $this->select();
            elseif($op == 'delete') $this->delete();
            else $this->selectAll();
        }
        catch(Exception $e)
        {
            die("Problème dans l'action de l'internaute !!!");
        }
    }
    public function delete()
    {
        $id = isset ($_GET['id']) ? $_GET['id'] : NULL; 
        $r = $this->db->delete($id); 
        $this->redirect('index.php');
    }

    public function select()
    {
        $id = isset ($_GET['id']) ? $_GET['id'] : NULL; 
        $this->render('layout.php', 'details.php', array(
            "title"=>"Détail de l'employé ID : $id",
            "donnees" => $this->db->select($id)
        ));
    }

    public function selectAll()
    {
        $this->render('layout.php', 'donnees.php', array(
            'title' => 'Toute les donnéees', 'donnees' => $this->db->selectAll(),
            'fields'  => $this->db->getFields(),
            'id' => 'id' . ucfirst($this->db->table)
        ));
    }

    public function save($op)
    {
        $title = $op;
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $values = ($op == 'update')? $this->db->select($id): '';

    
    if($_POST)
    {
        $r = $this->db->save(); 
        $this->redirect('index.php');
    }
    $this->render('layout.php', 'donnees-form.php', array(
        "title" => "Donnée : $title",
        "op" => $op,
        'fields'  => $this->db->getFields(),
        "values" => $values,
    ));

     }
     public function render($layout, $template, $parameters = array())
     {
        extract($parameters);
        ob_start();
        require "view/$template";
        $content = ob_get_clean();
        ob_start();

     }
     public function redirect($url)
     {
        header("Location:" . $url); 
     } 
}
