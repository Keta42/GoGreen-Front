<!doctype html>
<?php
    require 'nav.php';
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="form.css" />
    <title>Alexandre Dupont</title>
  </head>
  <body>
  <br><br><br>
  <form class="form-horizontal newBid" id="newBid" role="form" action="createBid.php" method="POST">
            
        
    <h1></h1>
	<div class="container">
	<b>Nom : </b> Alexandre Dupont <br>
	<input type="hidden" value="Alexandre Dupont"></input>
	<b>Adresse : </b>26 bis rue Pasteur, 59273 Fretin <br>
	<input type="hidden" value="26 bis rue Pasteur, 59273 Fretin"></input>
	<b>Voiture : </b> Renault Twingo<br>
	<input type="hidden" value="Renault Twingo"></input>
	<label for="departure">Heure de départ :</label>
            <input type="time" id="departure" name="departure"> </input><br>
	<label for="way"> D'où : </label>
	<select name="way">
    <option value="aller">De chez moi</option>
    <option value="retour">De l'entreprise</option>
	  </select>
	  <input type="hidden" name="_method" value="put" />
	  <input type="submit" value="Créer l'annonce">
  </form>
  </div>
  <br><br><br>
	
	
	<footer>
            <p>&copy; Copyright GoGreen 2018</p>
        </footer>
      </body>
</html>













































