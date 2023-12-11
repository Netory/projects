<?php
require_once('modele/modele.php') ;
require_once('vue/vue.php') ;   

function CtlLogin(){
    AfficheLogin(); // appel de la vue qui va exploiter $discussion et afficher // son contenu
}
function CtlConnexion($login,$mdp){
    $Check=checkUser($login,$mdp);
    if ($Check && isset($Check->categorie)) {
        if ($Check->categorie == 'directeur') {
            AfficheDirecteur();
        } elseif ($Check->categorie == 'conseiller') {
            // Faites quelque chose pour les conseillers
        } elseif ($Check->categorie == 'agent') {
            // Faites quelque chose pour les agents
        }
    } else {
        CtlLogin();
    }
}
function CtlErreur($erreur){
    afficherErreur($erreur);
}





