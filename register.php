<?php

session_start();
require_once "connection.php";

if(isset($_POST['submit']))  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $firstname = $_POST['lastname'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Enter your firstname" required>
        <br>    
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
        <br>       
        <input type="submit" name="submit" value="Submit">



    </form>
    <a href="index.php">Go back to index</a>
</body>
</html>