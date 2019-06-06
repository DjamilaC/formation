<?php
// le fichier controller.php contient toute les actions et les méthodes a executées. Par exemple si je souhaite afficher des informations 10 par 10, c'est dans ce fichier que l'on fera ce traitement 
namespace Controller;

class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \Model\EntityRepository; // permet de récupérer une connexion à la BDD qui se trouve dans le fichier EntityRepository.php
    }
    public function handlerRequest() // cette méthode permet de definir l'action de l'utilisateur par exemple, si l'utilisateur veut ajouter un employé dans ce cas là c'est la méthodde "save" qui sera executée
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL; // si 'op' est défjint dans l'URL, on le stock dans une variable sinon on stock 'NULL'

        try
        {
            if($op == 'add' || $op == 'update') $this->save($op); // si on ajoute ou modifie un employé, on appal la méthode save()
            elseif($op == 'select') $this->select(); // si on selectionne 1 employé, on fait appel à la méthode select()
            elseif($op == 'delete') $this->delete(); // si on supprime un employé, on fait appel à la méthode delete()
            else $this->selectAll(); // permet d'afficher l'ensemble des employés
        }
        catch(Exception $e)
        {
            die("Problème dans l'action de l'internaute !!!");
        }
    }

    public function delete()
    {
        $id = isset ($_GET['id']) ? $_GET['id'] : NULL; // on contrôlr que l'id a bienv été passé dans l'url et on le stock
        $r = $this->db->delete($id); // on fait appel à la methode delete() du fichier EntityRepository
        $this->redirect('index.php');
    }
    public function select()
    {
        $id = isset ($_GET['id']) ? $_GET['id'] : NULL; 
        $this->render('layout.php', 'details.php', array(
            "title"=>"Détail de l'employé ID : $id",
            "donnees" => $this->db->select($id) // on appelle la methode select() du fichier entiryRepository.php
        ));
    }

    public function selectAll()
    {
        // echo 'Méthode selectAll !!';
        // $r = $this->db->selectAll();
        // // db --> représente un objet issu de la classe EntityRepository
        // // db->selectAll() : on pointe sur la méthode selectAll() déclarée dans la classe EntityRepository 
        // echo '<pre>'; print_r($r); echo '</pre>';
        $this->render('layout.php', 'donnees.php', array(
        'title' => 'Toute les donnéees', 'donnees' => $this->db->selectAll(),// on pointe sur la méthode déclarée dans EntitYRepository.php
        'fields'  => $this->db->getFields(),// on pointe sur la méthode déclarée dans EntitYRepository.php
        'id' => 'id' . ucfirst($this->db->table)// affiche idEmploye, cela servira à pointer sur l'indice idEmploye du tableau de données envoyé dans le layout pour les liens modifier/ voir/ supprimer 

    ));
    }

    public function save($op)
    {
        $title = $op; // permet de récuperer la donnée envoyée dans l'URL et de la stocker dans $title
        $id = isset($_GET['id']) ? $_GET['id'] : NULL; // il permet de controler si ya un id envoyé dans l'url, dans ce cas on le stock dans la variable $id.

        $values = ($op == 'update')? $this->db->select($id): ''; // si on a envoyé un 'id' dans l'url, on l'envoi en argument de la methode select() de EntityRepository.php, cela permettra de selectionner toutes les données de l'emploter pour la modification

        if($_POST)
        {
            $r = $this->db->save(); // lorsque l'on valide le formulaire d'ajout, on execute la methode save() du fichier EntityRepository.php
             $this->redirect('index.php');  // une fois l'insertion ou la modification executée, on redirige vers la page index.php
        }
        $this->render('layout.php', 'donnees-form.php', array(
        "title" => "Donnée : $title",
        "op" => $op,
        'fields'  => $this->db->getFields(),
        "values" => $values,
             
        // permet de récuperer toute les données de l'employe en cas de modification
        ));
    }
    public function render($layout, $template, $parameters = array())
    {
        extract($parameters); // permet d'avoir les indices du tableau comme variable
        ob_start(); // commence la temporisation

        require "view/$template";
        // $content = require "view/$template";// on aura que des chaines de caractères, pas le fichier en entier, le fichier template sera stocké dans $content, et on le recupère avecob_get_clean();  

        $content = ob_get_clean(); // tout ce qui se trouve dans la template sera stockée dans $content grace à la fonction ob_get_clean();

        ob_start(); // temporise la sortie de l'affichage
        require "view/$layout";
        return ob_end_flush() ; // permet de liberer l'affichage et fait tout apparaitre sur la page
        

    }

    public function redirect($url)// methode permettant d'effectuer une redirection aprés une modification ou un ajout
    {
        header("Location:" . $url);
    }
}



