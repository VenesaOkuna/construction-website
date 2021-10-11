<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>Register</title>
   
</head>

<body>
    <h1><i>Welcome to our construction site<i></h1>
    <form action="confirmregister.php" method="POST" autocomplete="off">
    <h1>Sign Up form</h1>
    <label>Username</label><br>
<input type="text" name="username" placeholder="Write your name" required><br>

<label>Email Address</label><br>
<input type="email" name="email" placeholder="Write your email" required><br>

<label>Mobile</label><br>
<input type="tel" name="telephone" placeholder="Type your phone number" required><br>


<label>Password</label><br>
<input type="password" name="password" placeholder="Type your password" required><br>

<input type="submit" name="submit" value="Sign In">

</form>
</body>
</html>
