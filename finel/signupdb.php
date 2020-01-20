<?php

include_once('connection.php');

$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Email = $_POST['email'];
$UserName = $_POST['uname'];
$Password = $_POST['pass'];
$options = array("cost"=>4);
$Password = password_hash($Password,PASSWORD_BCRYPT,$options); //Password encription
$dp = file_get_contents($_FILES['dp']['tmp_name']);
$dp = base64_encode($dp);
$type = $_POST['type'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$des = $_POST['des'];
$url = $_POST['url'];
$Img1 = file_get_contents($_FILES['img1']['tmp_name']);
$Img1 = base64_encode($Img1);
$Img2 = file_get_contents($_FILES['img2']['tmp_name']);
$Img2 = base64_encode($Img2);
$Img3 = file_get_contents($_FILES['img3']['tmp_name']);
$Img3 = base64_encode($Img3);

if (!empty($FirstName)||!empty($LastName)||!empty($Email)||!empty($UserName)||!empty($Password)|!empty($type)) {
    
    //check connection
    if ($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }else{
        if($type=="buyer"){
            $SELECT = "SELECT Email From buyer Where Email = ? Limit 1";
            $INSERT = "INSERT Into buyer (FirstName, LastName, Email, UserName, Password) values(?, ?, ?, ?, ?)";

            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("s",$Email);
            $stmt->execute();
            $stmt->bind_result($Email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss",$FirstName, $LastName, $Email, $UserName, $Password);
                $stmt->execute();
                echo "Welcome to ArtGallery";
                header('Location: login.html');
            }else {
                echo "<script>alert('Email $Email is already exist in our database, Please try another one!')</script>";  
                header('Location: signup.html');
            }
            $stmt->close();
            $conn->close();

        }else{
            $SELECT = "SELECT Email From seller Where Email = ? Limit 1";
            $INSERT = "INSERT Into seller (FirstName, LastName, Email, UserName, Password, DP, Phone, Category, Descreption, URL, Img1, Img2, Img3) values(?, ?, ?, ?, ?,?,?,?,?,?,?,?,?)";

            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("s",$Email);
            $stmt->execute();
            $stmt->bind_result($Email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssssssssssss",$FirstName, $LastName, $Email, $UserName, $Password,$dp,$phone,$category,$url,$Img1,$Img2,$Img3);
                $stmt->execute();
                echo "Welcome to ArtGallery";
                header('Location: login.html');
                
                
                   
            }else {
                echo "<script>alert('Email $Email is already exist in our database, Please try another one!')</script>";  
                header('Location: signup.html'); 
            }
            $stmt->close();
            $conn->close();


        }
        
    }
}
?>