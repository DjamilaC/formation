<?php 

namespace AppBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
/** 
 * Produit
 * 
 * @ORM\Table(name="produit")
 * Correspond à la table produit dans la BDD
 * 
 * @ORM\Entity()
 * Cette classe est une Entity
 */

class Produit
{
    /** 
     * 
     * @ORM\Column(name="id_Produit", type="integer", nullabla=false)
     * @ORM\Id  
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;
	private $reference; 
	private $categorie; 
	private $titre; 
	private $description; 
	private $couleur; 
	private $taille; 
	private $public; 
	private $photo;
	private $prix;
	private $stock; 
	
	

    public function getId()
    {
        return $this->id;
    }


    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }
 
    public function getReference()
    {
        return $this->reference;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
   
    public function getDescription()
    {
        return $this->description;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
	}
	
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    public function getTaille()
    {
        return $this->taille;
    }

    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    public function getPublic()
    {
        return $this->public;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }
}