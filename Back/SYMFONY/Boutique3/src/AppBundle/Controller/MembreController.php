<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Membre;
use AppBundle\Form\MembreType;

class MembreController extends Controller
{

    //-------------------INSCRIPTION----------------------------

/** 
 * @Route("/inscription/", name="inscription")
 * 
 */
public function inscriptionAction(Request $request)
    {
        $membre = new Membre;

        $form = $this -> createForm(MembreType::class, $membre);

        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid())
        {       
            $em = $this ->getDoctrine() -> getManager(); 
            $em -> persist($membre); 
            $membre -> setStatut('0');

            $request -> getSession() -> getFlashBag() -> add('success', 'votre inscription est validée !!');
            return $this -> redirectToRoute('inscription');
        }

        $params = array(
            'membreForm' => $form -> createView(),
            'title' => 'INSCRIPTION '
        );
        return $this -> render('@App/Membre/inscription.html.twig', $params);
    }

    //-------------------CONNEXION----------------------------
    
    /** 
     * @Route("/connexion/", name="connexion")
     * 
     */
    public function connexionAction()
    {
        $params = array();
        return $this -> render('@App/Membre/connexion.html.twig', $params);
    }

      //-------------------PROFIL----------------------------
    
/** 
 * @Route("/profil/", name="profil")
 * 
 */
public function profilAction()
{
    $params = array();
    return $this -> render('@App/Membre/profil.html.twig', $params);
}  

}
