<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstl.css">
    <script src="https://kit.fontawesome.com/9482e06243.js" crossorigin="anonymous"></script>
</head>
<body>    
    <div class="login-box">
        <form action="login.fnc.php" method="post">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="username" name="username" value="">
            </div>
            <div class="textbox">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="password" name="password" value="">
            </div>
            <button type="submit" name="login">Login</button>
            <br>
            <button><a href="register.php">Register</a></button>
            <button type="submit" name="admin">Login as admin</button>
        </form>
    </div>
</body>
</html>