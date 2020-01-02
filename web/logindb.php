<?php

    $uname = filter_input(INPUT_POST,'uname');
    $pass = filter_input(INPUT_POST,'pass');
    if (!empty($uname)) {
        if (!empty($pass)){
            $dbServername="localhost";
            $dbUsername="root";
            $dbPassword="";
            $dbName="web_project";

            $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

            if ($conn->connect_error){
                die("connection failed".$conn->connect_error);
            }else{
                $sql = "INSERT INTO singup (Uname, Pass)
                value ('$uname','$pass')";
                if ($conn->query($sql)) {
                    echo"Login Success";
                }else{
                    echo"Login Faild. Try Again".$sql."<br>".$conn->error;
                }
                $conn->close();
            }

        }else{
            echo"Password Empty";
            die();
        }
    }else{
        echo"User Name Empty";
    }
?>