<?php
    session_start();

    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="artgallery";

    //create database connection
    $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>