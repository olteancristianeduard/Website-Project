<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="loginstl.css">
    <script src="https://kit.fontawesome.com/9482e06243.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-box">
        <h1>Register</h1>
        <form action="register.fnc.php" method="post">
            <div class="textbox">
                <input type="text" placeholder="type here your username" name="uid" value="">
            </div>
            <div class="textbox">
                <input type="password" placeholder="type here your password" name="pass" value="">
            </div>
            <button type="submit" name="submit">Create Account</button>
        </form>
    </div>
</body>
</html>