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
  
    <h1></h1>
	<b>Nom : </b> Alexandre Dupont <br>
	<b>Adresse : </b> 26 bis rue Pasteur, 59273 Fretin <br>
	<b>Voiture : </b> Renault Twingo<br>
	<b>Heure de départ : </b> 7:20<br>
	
	
	
	<a href="https://www.google.com/maps/dir/?api=1&origin=Fretin,France&destination=Villeneuve+d+ascq,France&travelmode=driving&waypoints=Lesquin,France">Voir le trajet</a>

	<div class="col-sm-2"><a href="optinbid.php" class="btn btn-primary">Rejoindre ce covoiturage</a> </div>
	
    <!-- Optional JavaScript -->
	 <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>