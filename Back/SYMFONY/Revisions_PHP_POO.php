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

    - composer.json : Content la liste de toutes les dépendances dont on a besoin. "dépendances = les fichiers créer par sension labs et dont on va s'en servir"
