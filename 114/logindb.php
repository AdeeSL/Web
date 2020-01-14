<?php
    include_once('connection.php');
    //check connection error
    if(mysqli_connect_errno()){
        die('Failed to Connect'.mysqli_connect_errno());
    }

    //check user enter on not data
    if(!isset($_POST['Uname'],$_POST['Pass'])){
        die('Please Enter User Name & Password');
    }

    //prepare SQL
    if($stmt=$conn->prepare('SELECT ID,Pass FROM singup WHERE Uname = ?')){
        //bind parameter : username is sring ∴ we use 's'
        $stmt->bind_param('s',$_POST['Uname']);
        $stmt->execute();
        //store the data to check that data exist in tha database
        $stmt->store_result();

        if($stmt->num_rows>0){
            $stmt->bind_result($ID, $Pass);
            $stmt->fetch();
            //verify the password
            if(password_verify($_POST['Pass'],$Pass)){
                session_regenerate_ID();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['Uname'];
                $_SESSION['ID'] = $ID;
                header('Location: home.php');
            }else{
                echo'incorrect password';
            }
        }else{
            echo'incorrect user name';
        }
        $stmt->close(); 
    }
?>