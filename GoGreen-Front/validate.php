<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        $name = $mysqli->real_escape_string($_POST['name']);
        $surname = $mysqli->real_escape_string($_POST['surname']);
        $adress = $mysqli->real_escape_string($_POST['address']);
        $phoneNumber = $mysqli->real_escape_string($_POST['phone']);
        $company = $mysqli->real_escape_string($_POST['company']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']);
        
        $_SESSION['username'] = $username;
        
        $sql = "INSERT INTO user (name, surname, address, phoneNumber, company, login, password) "
            . "VALUES ('$name', '$surname', '$address', '$phoneNumber', '$company', '$email', '$password')";
        

        if ($mysqli->query($sql) === true){
            $_SESSION['message'] = "Registration successful!"
            . "Added $username to the database!";
            header("location: registerS.php");
        }
        else{
            $_SESSION['message'] = 'User could not be added to the database!';
        }
        $mysqli->close();          
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}

?>