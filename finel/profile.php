<?php
    session_start();

    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="artgallery";

    $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_errno()){
        die('Failed to connect'.mysqli_connect_errno());
    }

    $stmt=$conn->prepare('SELECT Password, Email FROM buyer WHERE ID=?');
    $stmt->bind_param('i',$_SESSION['ID']);
    $stmt->execute();
    $stmt->bind_result($password, $email);
    $stmt->fetch();
    $stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>