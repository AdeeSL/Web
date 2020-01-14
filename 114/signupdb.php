<?php

include_once('connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$options = array("cost"=>4);
$pass = password_hash($pass,PASSWORD_BCRYPT,$options); //password encription
$type = $_POST['type'];


if (!empty($fname)||!empty($lname)||!empty($email)||!empty($uname)||!empty($pass)|!empty($type)) {
    
    //check connection
    if ($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }else{
        $SELECT = "SELECT email From singUP Where email = ? Limit 1";
        $INSERT = "INSERT Into singUP (fname, lname, email, uname, pass, type) values(?, ?, ?, ?, ?, ?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss",$fname, $lname, $email, $uname, $pass, $type);
            $stmt->execute();
            header('Location: home.php');
        }else {
            echo"Alredy Register Using this Email";
        }
        $stmt->close();
        $conn->close();
    }
}
?>