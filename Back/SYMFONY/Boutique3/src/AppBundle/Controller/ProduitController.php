<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Produit;
class ProduitController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        //1: Recuperer les données
        $repo = $this -> getDoctrine() -> getRepository(Produit::class);
        $produits = $repo-> findAll();

        //2: Retourner une vue
        $params = array(
            'produits' => $produits
        );
        return $this -> render('@App/Produit/index.html.twig', $params);
    }


    /**
     * @Route("/produit/{id}", name="produit")
     * www.maboutique.com/produit/12
     */
    public function produitAction($id)
    {
        // Méthode 1 : Repository
        // $repo = $this -> getDoctrine() -> getRepository(Produit::class);
        // $produit = $repo -> find($id);

        // Méthode 2 : EntityManager
        $em = $this -> getDoctrine() -> getManager();
        $produit = $em -> find(Produit::class, $id);


        $params = array(
            'id' => $id,
            'produit' => $produit
        );
        return $this -> render('@App/Produit/show.html.twig', $params);
    }
     /**
     * @Route("/categorie/{cat}", name="categorie")
     * www.maboutique.com/categorie/tshirt
     * 
     */ 
    public function categorieAction($cat)
    {
        $repo = $this ->getDoctrine() -> getRepository(Produit::class);
        $produits = $repo -> findBy(array('categorie' => $cat));

        // 2 : afficher la vue
        $params = array(
            'produits' => $produits
        );
        return $this -> render('@App/Produit/index.html.twig', $params);
    } 
    
}
