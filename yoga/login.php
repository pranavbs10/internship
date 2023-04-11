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
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                echo "<h2>login successful</h2>";
            }else {
                echo"<h2>Invalid email or password</h2>";
            }
        }else {
            echo "<h2>Invalid email or password</h2>";
        }
    }    
?>