<?php
require_once("connect.php");
function getConnect(){
    $connexion=new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->query('SET NAMES UTF8');
    return $connexion;
}
function checkUser($login,$mdp){
    $connexion=getConnect();
    $requete="SELECT categorie from employe where login='$login' and mdp='$mdp'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $categorie=$resultat->fetch();
    $resultat->closeCursor();
    return $categorie;
}
   