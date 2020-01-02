<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SingUp</title>
</head>
<body>

<h2>Singup</h2>
        <form action="db.php" method="POST">
            <input type="text" name="fname" placeholder="Firstname" required><br>
            <input type="text" name="lname" placeholder="Lastname" required><br>
            <input type="text" name="email" placeholder="email" required><br>
            <input type="text" name="uname" placeholder="Username" required><br>
            <input type="pasword" name="pass" placeholder="Password" required>
            <input type="submit" name="submit" value="Sign up" >
        </form>
</body>
</html>