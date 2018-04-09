<?php
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "root", "covoit");

    require 'verify.php';
    require 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
  
        <meta charset="utf-8" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css" />
        <title>Log In</title>

</head>

<body>

<?php include ('nav.php');?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Login</h1>
    <form class="form" action="Login.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="off" required />
      <input type="submit" value="Log in" name="login" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
        <footer>
            <p>&copy; Copyright GoGreen 2018</p>
        </footer>
</html>