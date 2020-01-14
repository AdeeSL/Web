<?php
    session_start();

    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="web_project";

    //create database connection
    $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>