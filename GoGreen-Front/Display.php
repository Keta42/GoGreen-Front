<!doctype html>

<?php
    require 'nav.php';
	session_start();
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="form.css" />
		
		
		
    <title>
	<?php 
	  if (empty($_GET)) {
		// no data passed by get
		  $errmsg = "<h1> Oops ! </h1> <br> Looks like you ended here by accident !";
		  echo $errmsg;
	}
	$id = $_GET["id"];
	$response = file_get_contents('http://localhost/GoGreen/GoGreen-Backend/bid.php?');
	$bids = json_decode($response);
	$response = file_get_contents('http://localhost/GoGreen/GoGreen-Backend/user.php?');
	$usrs = json_decode($response);
	$response = file_get_contents('http://localhost/GoGreen/GoGreen-Backend/car.php?');
	$cars = json_decode($response);
	$response = file_get_contents('http://localhost/GoGreen/GoGreen-Backend/passenger.php?');
	$pass = json_decode($response);
	
	$car = "";
	$depart = "";
	foreach($bids as $keys => $value){
		if($id == $value->{'id'})
			{
				$car = $value->{'car'};
				$depart = $value->{'departureTime'};
			}
	}
	
	
	
	$t_seats = "";
	$plaque = "";
	foreach($cars as $keys => $value){
		if($car == $value->{'id'})
			{
				$t_seats = $value->{'numberSeats'};
				$plaque = $value->{'licencePlate'};
			}
	}
	
	$p_count = 0;
	$id_passengers = array();
	foreach($pass as $keys => $value){
		if($id == $value->{'bid'})
			{
				$id_passengers[$p_count] = $value->{'passenger'};
				$p_count++;
				
			}
	}
	
	$usrname = "";
	$tel = "";
	$rating = "";
	$u_address = "";
	$n_passengers = array();
	$c_address = "";
	
	$passengers_page="";
	
	foreach($usrs as $keys => $value){
		if($id == $value->{'id'})
			{
				$usrname = $value->{'name'}." ".$value->{'surname'};
				$tel = $value->{'phoneNumber'};
				$rating = $value->{'rate'};
				$u_address = $value->{'address'};
				$c_address = $value->{'companyAddress'};
				
			}else{
				foreach($id_passengers as $p_key => $p_value){
					if($p_value == $value->{'id'}){
						$this_pass_n = $value->{'name'};
						$this_pass_s = $value->{'surname'};
						$passengers_page = $passengers_page . "<b>Passager : </b> ${this_pass_n}  ${this_pass_s} <br>";
					}
				}
			}
	}
	$dispo_seat = $t_seats - $p_count;
	echo $usrname?> </title>
  </head>
  <body>
  <br><br><br>	
  <div class="container">
  
  
	
	
	<?php
	
	$page = "
    <h1>
	<b>Conducteur : </b> ${usrname} <br></h1>
	
	<b>Note : </b> ${rating} <br>
	<b>Adresse : </b> ${u_address} <br>
	<b>Adresse de la compagnie : </b> ${c_address} <br>
	
	<b>Nombre de places :  ${t_seats}</b><br>
	<b>Plaque d'immatriculation : </b> ${plaque}<br>
	<b>Départ : </b> ${depart}<br><br>
	<h1> Passagers </h1><br>
	
	<b>Nombre de places libres : ${dispo_seat} </b> <br>
	<b>Nombre de passagers : </b> ${p_count}<br>
	${passengers_page}<br>
	<h1>Contact</h1><br>
	<b>Téléphone : </b> ${tel}<br><br><br>
	
	<a target=\"_blank\" class=\"btn btn-info\" href=\"https://www.google.com/maps/dir/?api=1&origin=${u_address}&destination=${c_address}&travelmode=driving\">Voir le trajet</a>
	";
	//&waypoints=
	$pleaselog = "<div class=\"btn btn-secundary\">Vous devez vous connecter pour réserver une place</div>";
	$njoin = "<div class=\"btn btn-secundary\">Covoiturage complet</div>";
	if($dispo_seat == 0){$page .= $njoin ;	}else if(isset($_SESSION['usrID']) && !empty($_SESSION['usrID'])){$page = $page . "<form style=\"display: inline;\" action=\"http://localhost/GoGreen/GoGreen-Backend/user.php\" method=\"post\">
  <input type=\"hidden\" name=\"_method\" value=\"put\" /><input type=\"hidden\" name=\"bid\" value=\"${id}\"/><input type=\"hidden\" name=\"passenger\" value=\"${_SESSION['usrID']}\"/><input type=\"submit\" class=\"btn btn-primary\" value=\"Rejoindre ce covoiturage\"></input></form>";} else{$page .= $pleaselog;}
	$page .= "</div>";
	echo $page;
  ?>
	
	
	<br><br>
	<footer>
            <p>&copy; Copyright GoGreen 2018</p>
        </footer>
    <!-- Optional JavaScript -->
	 <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>