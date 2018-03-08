<!doctype html>
<?php
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "mypass123", "accounts_complete");

    require 'verify.php';
    require 'nav.php';
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="form.css" />
    <title>Alexandre Dupont</title>
  </head>
  <body>
  <?php include ('nav.php');?>
  
  <form class="form-horizontal newBid" id="newBid" role="form" action="createBid.php" method="POST">
            
        
    <h1></h1>
	<div class="container">
	<b>Nom : </b> Alexandre Dupont <br>
	<input type="hidden" value="Alexandre Dupont"></input>
	<b>Adresse : </b> 26 bis rue Pasteur, 59273 Fretin <br>
	<input type="hidden" value="26 bis rue Pasteur, 59273 Fretin"></input>
	<b>Voiture : </b> Renault Twingo<br>
	<input type="hidden" value="Renault Twingo"></input>
	<label for="departure">Heure de départ :</label>
            <input type="time" id="departure" name="departure"><br>
	<label for="way"> D'où : </label>
	<select name="way">
    <option value="aller">De chez moi</option>
    <option value="retour">De l'entreprise</option>
  </select>
  <input type="submit" value="Créer l'annonce">
  </form>
  </div>
	
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>













































