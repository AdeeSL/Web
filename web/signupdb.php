<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];

if (!empty($fname)||!empty($lname)||!empty($email)||!empty($uname)||!empty($pass)) {
    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="web_project";

    //create connection
    $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    //check connection
    if ($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }else{
        $SELECT = "SELECT email From singUP Where email = ? Limit 1";
        $INSERT = "INSERT Into singUP (fname, lname, email, uname, pass) values(?, ?, ?, ?, ?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssss",$fname, $lname, $email, $uname, $pass);
            $stmt->execute();
            echo"Sign Up Successfull";
        }else {
            echo"Alredy Register Using this Email";
        }
        $stmt->close();
        $conn->close();
    }
}







?>