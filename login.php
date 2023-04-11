<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //db connection
    $conn = new mysqli('localhost','root','','yoga');

    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from registration where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                require "C:\Users\Prana\OneDrive\Desktop\yoga\yoga.html";
            }else {
                require "C:\Users\Prana\OneDrive\Desktop\yoga\yoga.html";
            }
        }else {
            echo "<h2>Invalid email or password</h2>";
        }
    }    
?>