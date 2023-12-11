<?php
require_once('controleur/controleur.php'); // charge les méthodes du contrôleur
try {
    if (isset($_POST['connexion'])){ // si on a cliqué sur Envoyer
        $login=$_POST['login'];
        $mdp=$_POST['mdp'];
        CtlConnexion($login,$mdp);
    }
    else CtlLogin(); // on vient d'arriver sur la page et on appelle le contrôleur qui gère
}
catch(Exception $e) {// une erreur est survenu dans le bloc try
    $msg = $e->getMessage() ; // on récupère son code
    CtlErreur($msg); // on appelle le contrôleur qui gère les erreurs.
}