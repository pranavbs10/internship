<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $confirmPassword = $_POST['confirm-password'];

    //DB connection
    $conn = new mysqli('localhost','root','','yoga');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username,email,password)
        values(?,?,?)");
        $stmt->bind_param("sss",$username,$email,$password);
        $stmt->execute();
        // include("home.php");
        // echo "registration successful...";
        require "login.html";
        $stmt->close();
        $conn->close();
    
    }


?>