<?php
namespace Model;

class EntityRepository
{
    private $db;
    public $table;
    public function getDb() 
    {
        if(!$this->db)
        {
            try 
            {
                $xml = simplexml_load_file('app/config.xml');
                $this->table = $xml->table;
                try
                {
                    $this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
                }
                catch(\PDOException $e)
                {
                    die("Problème de connexion BDD !!");
                }
            }
            catch(\PDOException $e)
            {
                die("Problème de fichier XML manquant !!");
            }

        }
        return $this->db;
    }

    public function selectAll()
    {
        $q = $this->getDb()->query("SELECT * FROM " . $this->table);
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
       return $r;
    }

    public function getFields()
   {
       $q = $this->getDb()->query("DESC " . $this->table);  
       $r = $q->fetchAll(\PDO::FETCH_ASSOC);
       return array_splice($r, 1);  
   }

   public function save()
   {
    $id = isset($_GET['id'])? $_GET['id'] : 'NULL';
    $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst($this->table) . ',' . implode(',', array_keys($_POST)) . ')VALUES(' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');
   }
   public function delete($id)
   {
       $q = $this->getDb()->query("DELETE FROM ".$this->table." WHERE id" . ucfirst($this->table) . '=' . (int) $id);
   }
}
$e = new EntityRepository;
$e->getDb();