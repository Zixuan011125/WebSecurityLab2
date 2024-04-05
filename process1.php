<?php
    if(isset($_POST['register'])){
        // Sanitize username and password
        // FILTER_SANITIZE_STRING is for removing any potential dangerous characters
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        echo "The username is $username<br>";
        echo "The password is $password";
    }
?>