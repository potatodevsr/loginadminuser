<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="styles.css">


</head>
<body>
    <form action="login.php" method="post">

    <label for="username">ชื่อผู้ใช้</label>
    <input type="text" name="username" placeholder="Username" required>
    <label for="password">รหัสผ่าน</label>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <input type="submit" name="submit" value="Login">

    </form>

    <a href="register.php">Go To Register</a>

</body>
</html>