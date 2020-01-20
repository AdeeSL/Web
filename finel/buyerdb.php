<?php

    include_once('connection.php');
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $UserName = $_POST['uname'];
    $Password = $_POST['pass'];
    $options = array("cost" => 4);
    $Password = password_hash($Password, PASSWORD_BCRYPT, $options); //Password encription
    $dp = file_get_contents($_FILES['dp']['tmp_name']);
    $dp = base64_encode($dp);


    if (!empty($FirstName)||!empty($LastName)||!empty($Email)||!empty($UserName)||!empty($Password)||!empty($dp)){
        if ($conn->connect_error){
            die("connection failed".$conn->connect_error);
        }else{
            $SELECT = "SELECT Email From buyer Where Email = ? Limit 1";
            $INSERT = "INSERT Into buyer (FirstName, LastName, Email, UserName, Password, DP) values(?, ?, ?, ?, ?, ?)";
    
            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("s",$Email);
            $stmt->execute();
            $stmt->bind_result($Email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
 
            if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssss",$FirstName, $LastName, $Email, $UserName, $Password, $dp);
                $stmt->execute();
                header('Location: login.php');
            }else {
                echo "<script>alert('Email $Email is already exist in our database, Please try another one!')</script>";  
                header('Location: signup.html');
            }
            $stmt->close();
            $conn->close();
        }
    }
?>