<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Produit;
use AppBundle\Entity\DetailsCommande;
use AppBundle\Entity\Commande;
use AppBundle\Entity\Membre;

class AdminController extends Controller
{
    /**
     * @Route("/admin/produit/", name="admin_produit")
     * www.maboutique.com/admin/
     */
    public function adminProduitAction()
    {
        $repo = $this ->getDoctrine() -> getRepository(Produit::class);
        $produit = $repo -> findAll();

        $params = array(
            'produits' => $produit
        );
        return $this -> render('@App/Admin/list_produit.html.twig', $params);
    }

    //************************-----ADD-------************************
    
    /**
     * @Route("/admin/produit/add/", name="admin_produit_add")
     * 
     */
    public function adminProduitAddAction()
    {

        $produit = new Produit;
        // on cree un objet produit de l'entité produit (vide)

        $produit -> setReference('XXX');
        $produit -> setCategorie('pull');
        $produit -> setPublic('m');
        $produit -> setPrix('25.99');
        $produit -> setStock('150');
        $produit -> setTitre('pull maniniere');
        $produit -> setPhoto('marinière.jpg');
        $produit -> setDescription('Super pull façon bretonne');
        $produit -> setTaille('l');
        $produit -> setCouleur('blanc et bleu');

        $em = $this ->getDoctrine() -> getManager(); // on recup le manager
        $em -> persist($produit); // on enregistre dans le système l'objet
        $em -> flush();// vider la chasse enregistrer dans la base de données


        $params = array();
        return $this -> render('@App/Admin/form_produit.html.twig', $params);
    }


//***********************---------UPDATE-----------*************************

    /**
     * @Route("/admin/produit/update/{id}", name="admin_produit_update")
     * 
     */
    public function adminProduitUpdateAction($id)
    {
        $em = $this -> getDoctrine() -> getManager();

        // je recupere le produit à modifier
        $produit = $em -> find(Produit::class, $id);

        // je le modifie
        $produit -> setPrix('1000');

        // je l'enregistre: 
        $em -> persist($produit);
        $em -> flush();

        $params = array(
            'id' => $id
        );
        return $this -> render('@App/Admin/form_produit.html.twig', $params);
    }
    // localhost:8000/admin/produit/update

    //*********************-----------DELETE-------------********************


    /**
     * @Route("/admin/produit/delete/{id}/", name="admin_produit_delete" )
     */
    public function adminProduitDeleteAction($id, Request $request)
    {
        $em = $this -> getDoctrine() -> getManager();
        // on récupère l'objet produit
        
        $produit = $em -> find(Produit::class, $id);

        // je supprime le produit
        $em -> remove($produit);
        $em -> flush();
       
        $request -> getSession() -> getFlashBag() -> add('success', 'le produit n° ' . $id . ' a bien été supprimé');
        return $this -> redirectToRoute('admin_produit'); 
    }
    // test : localhost:8000/admin/produit/delete/12


                //-----------------------------MEMBRE-------------------------

    /**
     * @Route("/admin/membre/", name="admin_membre")
     * www.maboutique.com/admin/membre/
     */
    
    public function adminMembreAction()
    {
        $params = array();
        return $this -> render('@App/Admin/list_membre.html.twig', $params);        
    }

    //************************-----ADD-------************************

    /**
         * @Route("/admin/membre/add/", name="admin_membre_add")
         * 
         */
        public function adminMembreAddAction()
        {
            $params = array();
            return $this -> render('@App/Admin/form_membre.html.twig', $params);
        }

    //***********************-------UPDATE---------*************************

    /**
     * @Route("/admin/membre/update/{id}/", name="admin_membre_update")
     * 
     */
    public function adminMembreUpdateAction($id)
    {
        $params = array(
            'id' => $id
        );
        return $this -> render('@App/Admin/form_membre.html.twig', $params);
    }

    //************************---------DELETE-----------************************
    /**
     * @Route("/admin/membre/delete/{id}/", name="admin_membre_delete" )
     */
    public function adminMembreDeleteAction($id, Request $request)
    {
        $params = array();
        $request -> getSession() -> getFlashBag() -> add('success', 'le membre n° ' . $id . ' a bien été supprimé');
        return $this -> redirectToRoute('admin_membre'); 
    }

                 //-------------------------------COMMANDE---------------------------------/

    /**
     * @Route("/admin/commande/", name="admin_commande")
     * www.maboutique.com/admin/
     */
    public function adminCommandeAction()
    {
        $params = array();
        return $this -> render('@App/Admin/list_commande.html.twig', $params);
    }

    //************************-----ADD-------************************

    /**
     * @Route("/admin/commande/add/", name="admin_commande_add")
     * 
     */
    public function adminCommandeAddAction()
    {
        $params = array();
        return $this -> render('@App/Admin/form_commande.html.twig', $params);
    }

    //*******************-------UPDATE---------**************************

    /**
     * @Route("/admin/commande/update/{id}", name="admin_commande_update")
     * 
     */
    public function adminCommandeUpdateAction($id)
    {
        $params = array(
            'id' => $id
        );
        return $this -> render('@App/Admin/form_commande.html.twig', $params);
    }

    //******************------DELETE-------------*************************

    /**
     * @Route("/admin/commande/delete/{id}/", name="admin_commande_delete" )
     */
    public function adminCommandeDeleteAction($id, Request $request)
    {
        $params = array();
        $request -> getSession() -> getFlashBag() -> add('success', 'le commande n° ' . $id . ' a bien été supprimé');
        return $this -> redirectToRoute('admin_commande'); 
    }


}
