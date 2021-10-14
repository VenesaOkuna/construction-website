<?php   include 'db.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<h1><i>Welcome to our construction site<i></h1>

<form action="confirmlogin.php" method="POST" autocomplete="off">
<h1>Login form</h1>


<label>Username</label>
<input type="text" name="username" placeholder="Write your name" required><br>

<label>Password</label>
<input type="password" name="password" placeholder="Type your password" required><br>

<input type="submit" name="login" value="Login"><br>
Already have an account? <a href="register.php"> Register </a>

</form>
</body>
</html>