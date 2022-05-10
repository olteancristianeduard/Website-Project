<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <header>
    <a href="index.php"><h3 class="logo">Website</h3></a>
        <nav>
            <ul class="nav-links">
                     <?php
                    if(!isset($_SESSION["username"])){
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><a href="#">About</a></li>';
                        echo '<li><a href="#">Contact</a></li>';
                    }
                    else{ 
                        echo '<li><a href="prod.php">Apartamente</a></li>';
                        echo '<li><a href="#">About</a></li>';
                        echo '<li><a href="#">Contact</a></li>';
                        echo '<li><a href="logout.fnc.php">Log Out</a></li>';}
                     ?>
            </ul>
        </nav>
    </header>              
    <div id="slider">
        <figure>
            <img src="img1.jpg" alt="">
            <img src="img2.jpg" alt="">
            <img src="img3.jpg" alt="">
        </figure>
    </div>       
</body>
</html>