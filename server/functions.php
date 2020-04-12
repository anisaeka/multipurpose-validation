<?php

include "db.php";

function register(){
    global $connect;
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $query = "INSERT INTO users (username,password,email) VALUES ('$username', '$password', '$email' )";
        
        if($password === $confirmPassword && (strlen($username) >= 5 && strlen($password) >= 5)){
            $password = crypt($password, "lexicalscorn");
            mysqli_query($connect, $query);
        } else {
            echo '<div class="alert alert-danger" role="alert">
                  Username and password must be  <a href="#" class="alert-link">More than 5 digits </a>. Then check if password and confirm password value is same.
                  </div>';
        }
    }
}