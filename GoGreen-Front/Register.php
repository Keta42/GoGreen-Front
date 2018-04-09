<?php
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localname", "root", "root", "covoit");

    require 'validate.php';
?>

<!DOCTYPE html>
<html>
<head>
  
        <meta charset="utf-8" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css" />
        <title>Register</title>

</head>

<body>

<?php include ('nav.php'); ?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Sign Up</h1>
    <form class="form" action="Register.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="Surname" name="surname" required />
      <input type="text" placeholder="Adress" name="adress" required />
      <!--<input type="text" placeholder="Town" name="town" required />-->
      <input type="text" placeholder="Phone number" name="phone" required />
      <input type="text" placeholder="Company" name="company" required />
      <!--<input type="text" placeholder="Company code" name="companyCode" required />-->
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
        <footer>
            <p>&copy; Copyright Green Covoit 2018</p>
        </footer>
</html>