<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ){ // User doesn't exist
        $_SESSION['message'] = "User with that username doesn't exist!";
    }
    else { // User exists
        $user = $result->fetch_assoc();

        if ( password_verify($_POST['password'], $user['password']) ) {
        
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['adress'] = $user['adress'];
            $_SESSION['phoneNumber'] = $user['phoneNumber'];
            $_SESSION['company'] = $user['company'];
            $_SESSION['active'] = $user['active'];
        
            $_SESSION['login'] = true;

            header("location: succes.php");
        }
        else {
            $_SESSION['message'] = "You have entered wrong password, try again!";
            
        }
    }
}
?>