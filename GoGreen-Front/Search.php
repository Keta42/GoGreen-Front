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
    <title>Browse</title>
	
	
	
  </head>
  <body>
  
  
  
  
  <br><br><br>
  <div class="container">
  <h1> Here are the bids we found for you : </h1>
  <?php $response = file_get_contents('http://localhost/GoGreen/GoGreen-Backend/bid.php?');
	$bid = json_decode($response);	
	foreach($bid as $key => $value)
	{
		$id = $value->{'id'};
		$car = $value->{'car'};
		$thisform = "<form action=\"./Display.php\" method=\"GET\"> <input type=\"hidden\" name=\"id\" value=\"{$id}\"/><input class=\"btn btn-info\" type=\"submit\" value=\"Display bid\"/> </form>";
		echo $value->{'departureTime'};
		if($value->{'fromCompany'} == 0) { echo  " de chez lui<br>"; } else { echo  " de l'entreprise<br>"; }
		print($thisform);
		echo "</br>";
	}
	?>
  </div>
	
	<br><br>
	<footer>
            <p>&copy; Copyright GoGreen 2018</p>
        </footer>
      </body>
</html>













































