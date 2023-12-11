<?php
function AfficheLogin(){
    require_once('Page_login.php');
}
function AfficheDirecteur(){
    require_once('Page_Directeur.php');
}


function afficherErreur($erreur){
    $contenu='<p>'. $erreur.'</p>
    <p><a href="forum.php"/> Revenir au forum </a></p>';
    require_once('vue/Page_login.php');
}
