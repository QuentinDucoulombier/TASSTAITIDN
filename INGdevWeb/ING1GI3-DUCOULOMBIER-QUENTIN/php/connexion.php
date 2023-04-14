<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="../css/inscription.css"/>
        <link rel="icon" type="image/png" href="favicon.png"/>

    </head>
    <body>
      <div class="form">
        <h1 id="titre">Bienvenue </h1>
        <h2 id="titreSecondaire">Connectez-vous</h2>
        <form action="verifConnexion.php" method="POST">
          <div class="input-container ic1">
            <input input type="text" name="pseudo" id="pseudo" class="input" placeholder=" " />
            <div class="cut"></div>
              <label for="pseudo" class="placeholder">Pseudo</label>
          </div>
          <div class="input-container ic2">
            <input type="password" name="password" id="password" class="input" placeholder=" " />
            <div class="cut"></div>
            <label for="password" class="placeholder">Mot de passe</label>
          </div>
          <p><input type="submit" value="Valider" class="submit" required></p>

        </form>
        <p><a href="../html/inscription.html">Créer un nouveau compte</a></p>

      </div>

      

  </body>


</html>
