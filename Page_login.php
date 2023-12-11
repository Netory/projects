<!DOCTYPE html>
<html lang="fr">
  <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="vue/style/style.css" />
	  
  </head>

  <body>
    <form id="monForm1" action="forum.php" method="post">
      <p><label> Login : </label><input type="text" name="user" /></p>
      <p><label> Mot de passe : </label><input type="text" name="mdp" /></p>
      <p> <input type="submit" value="Envoyer votre msg" name="envoyer" /> </p>
    </form>

    <?php echo $contenu ; ?>

  </body>
</html>