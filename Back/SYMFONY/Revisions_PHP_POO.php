Programme: 

1/ Révision PHP POO : 
Autoload - Namespace - Interface - 

2/ MVC 

SYMFONY : 
INTRO : que'est ce que SYMFONY 

ETAPE 1 : Installation de sf 3.4 
<!-- LTS : Long Time Support -->
ETAPE 2 : Les bundles
ETAPE 3 : Les routes et les controllers
ETAPE 4 : Créer la boutique sur SF
ETAPE 5 : TWIG (moteur de recherche)
ETAPE 6 : Les assets
ETAPE 7 : Entités 
ETAPE 8 : DOCTRINE 
ETAPE 9 : Les formulaires
ETAPE 10: Validation des données 
ETAPE 11: Zssociation Mapping 
ETAPE 12: Sécurité et utilisateurs 
ETAPE 13: Installation et boutique sur SF 4.3 
Bonus : Formulaire de contact 

-----------------------------------------------------------
INTRO : Qu'est-ce que Symfony 
-----------------------------------------------------------

1/ Quel intérêt d'utiliser un Framework 
    A. Une organisation optimisée
    B. Fonctionnalités communes à tous les projets(ex:si on doit intervenir dans un projet,il y a les modules utilisateur)
    C. Service disponibles (Routing, Sécurité, BDD,Moteur de template,formulaire...)
    D. Communauté



2/ Le choix du Framework
    A. Propre Framework (pédagogie)
    B. Les framework fullstack (Symfony, Zend, Laravel, Cake ...)
    C. Les mini Framework (Silex, Slim, CodeIgniter, Lumen ...)


3/ Symfony

    ->Framework Français créé par sensiolabs
    ->versions:
    LTS (Long Time Support) : 
        v2.8
        v3.4 : 2.8  plus souple (moins rigide), avec des Fonctionnalités
        v4.4 : 3.4 BundleLess, Flex, Encore (webpack), Maker, PHP7.1

-----------------------------------------------------------------------------------
ETAPE 1 : Installation de SF 3.4
Sommaire :
1 . Installer Composer
2 . Installer SF3.4
3 . Arborescence des dossiers et fichiers
4 . Lancement de l'application 
------------------------------------------------------------------------------------- 

1 . Installer Composer

Composer est un outils de dépendance.
Il permet de télécharger et de mettre à jour tous les outils (services, composants, dépendances) dont on a besoin.

    - Télécharger : https://getcomposer.org/download/
    composer-Setup.exe

    - Installer : Suivre les étapes (en décochant)

2 . Installer SF3. 4

    - Dans le dossier Symfony
    - MAJ + clic-droit : Ouvrir une fenêtre powershell ici

    <cmd>
    composer create-project symfony/framework-standard-edition test

    ==> A ce stade, un dossier test a été créé. C'est un nouveau projet SF.

3. Arborescence des dossiers et fichiers

    - app/  : contient toue la configuration de l'app (BDD, sécurité, routes...)
    - bin/  : les éxécutable de l'app (de SF)
    - src/  : le dossier dans lequel nous allons coder notre MCV
    - var/  : les fichiers écrits par SF au fur et à mesure (cache,logs)
    - tests/ : Les tests unitaires.
    - web/  : Repertoire WEB (app.php ou app_dev.php,(équivalent de index) img/css/js/fonts)
    - vendor/ : Le coeur de SF (les fichiers codés par les sensio Labs)

    - composer.json : Contient la liste de toutes les dépendances dont on a besoin. "dépendances = les fichiers créer par sension labs et dont on va s'en servir"

4 . lancement de l'application
    - Méthode 1 : 
    localhost/formation/back/symfony/test/web/app.php
    localhost/formation/back/symfony/test/web/app_dev.php

    - Methode 2: 
    on va dans le dossier test 
    <cmd> 
    php bin/console server:run
    =====> A ce stade notre application affiche le message de bienvenue. Cela signifie que tout va bien 
    -------------------------------------
    ETAPE 2 : Les bundles
    Sommaire : 
    1/ Le concept des BundleLess
    2/ création  de notre premier Bundle 
    ------------------------------------
    1/ Le concept des Bundles 
        - Les bundles sont des briques de notre application .
        UserController  (C)
        UserModel (M)
        View : inscription/ connexion/profil... 
        Avec la nouvelle version de SF (4), on considère qu'il est préférable de crer un seul bundle (AppBundle).

    2/ Création de notre premier Bundle 
        On va créer un Bundle : POLES/TestBundle 
        <cmd> 
        php bin/console generate:bundle 
        -> Yes 
        -> POLES/TestBundle 
        ->POLESTestBundle 
        ->src/
        ->annotation

        ==> Notre Bundle a été créé, mais il faut l'enregistrer. 
        <code>composer.json
        "psr-4": {
            "AppBundle\\": "src/AppBundle",
            "POLES\\": "src/POLES"
        },

        -Mise à jour 
        <cmd> 
        composer update

        ===> Notre Bundle existe dans src/POLES/Bundle, Il est composé de 4 dossiers: 
            - Controller: les controllers du bundle
            - DependencyInjection : Les controllers du bundle  
            - Resources : Vues et routes (YML) et eventuellement JS 
            - Test : Test liés aux fonctionnalité du Bundle 

        ===> A ce stade le Bundle est fonctionnel, mais il ya une petite erreur qu'on va coriger.
        -src/POLES/TestBundle/Controller/DefaultController.php

       return $this->render('POLESTestBundle:Default:index.html.twig');
       Devient:
        return $this->render('@POLESTest/Default/index.html.twig');

        ===> A ce stade la page d'accueil affiche "Hello World";

        ETAPE 3 : Les routes et les controllers 
        Sommaire : 
        1/ création de routes 
        2/ L'objet Request 
        3/ L'objet Response
        4/ Redirection
        5/ Message
        ----------------------------------
        1/ création de routes 
            ("/")->route simple homepage 
            ("/bonjour/")->route echo 'erreur'
            ("/bonjour2/")->route response + params URL 
            ("/hello/{prenom}")->route render de vue + 2 params 
            ("/hola{prenom}")->route de vue
            ("/ciao/{prenom}/{age}") -> route render de vue + 2 params URL
            ("redirect/") -> route avec redirection (RedirectResponse)
            ("/redirect2") -> route avec redirection (redirectToRoute())
            ("/message/") -> route avec redirect et message en session 

2/ L'objet Request
    <code>
    use Symfony\Component\HttpFoundation\Request;

    Correspond à la partie requete de la requete HttpFoundation

    <ex code>
    $session = $request -> getSession();
    -> récupère la session ($_SESSION)

    Autres exemples:
    
    $session -> set('prenom','Yakine');
    echo $session ->get('prenom');
    autre methode : 
    $request -> session -> set('prenom', 'yakine');
    Autres utilités de $request: 
    index.php?argument_url=toto
    $request ->query -> get('argument_url');
    $request -> request -> get('champs_form');
    $request -> cookie -> get('cookie'); 
    $request -> server -> get('server'); **Récuperer les infos dans le serveur**

3/ L'objet Response 
    - correspond à la partie réponse d'une reqyuete HTTP 
    <code> 
    use symfony\Component\HttpFoundation\Response.
    Toute action (fonction) doit avec une reponse
    return newResponse ('toto')
    même la fonction render est une réponse

    return $this -> render();
    return $this -> getTemplating() -> renderResponse();

4/ Redirection 

5/ Message 
    <code> 
    $session -> getFlashBag() -> add();
    ->permet d'enregistrer des messages qui seront disponibles dans d'autres pages (messagesde félicitations, ou d'erreurs)
     -> app.session : qui permet en twig de recuperer les infos en session 
     -> app.user : qui nous permet en twig de recuperer les infos de l'utilisateur actuellement connecté
