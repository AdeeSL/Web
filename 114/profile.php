<?php
    session_start();

    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="web_project";

    $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_errno()){
        die('Failed to connect'.mysqli_connect_errno());
    }

    $stmt=$conn->prepare('SELECT Fname, Lname FROM singup WHERE ID=?');
    $stmt->bind_param('i',$_SESSION['ID']);
    $stmt->execute();
    $stmt->bind_result($Fname, $Lname);
    $stmt->fetch();
    $stmt->close();
?>