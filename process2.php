<?php
    if(isset($_POST['register'])){
        // Canonicalize the username by converting it to lowercase
        $username = strtolower(($_POST['username']));
        $password = $_POST['password'];
       
        echo "The username is $username<br>";
        echo "The password is $password";
    }
?>