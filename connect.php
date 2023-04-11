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
        echo "<h2> successfully signed in</h2>";
        include "file:///C:/Users/Prana/OneDrive/Desktop/yoga/login.html";
        $stmt->close();
        $conn->close();
    
    }


?>