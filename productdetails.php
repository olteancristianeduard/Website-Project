<?php
    include "dbconn.php";
    include "functions.php";

    header('Cache-Control: no cache');
    session_cache_limiter('private_no_expire');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productdetails.css">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <header>
    <a href="index.php"><h3 class="logo">Website</h3></a>
        <nav>
            <ul class="nav-links">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php   
        if(isset($_POST['view'])){
        $id=$_POST['id'];
        $_SESSION['id']=$id;

        $sql="SELECT * FROM prod WHERE id='$id' ";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            prodDetails($row['img1'],$row['img2'],$row['img3'],$row['img4'],$row['details']);
        }}

        if(isset($_POST['send'])){
            $username=$_SESSION['username'];
            $email=$_POST['email'];
            $phone=$_POST['phnumber'];
            date_default_timezone_set("Europe/Bucharest");
            date_default_timezone_get();
            $date=date("Y-m-d H-i-s");
            $sql="INSERT INTO `requests`(`username`, `email`, `phone`, `date`) VALUES ('$username','$email','$phone','$date')";
            $result=mysqli_query($conn,$sql);
            
            $id=$_SESSION['id'];
            $sql="SELECT * FROM prod WHERE id='$id' ";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
            prodDetails($row['img1'],$row['img2'],$row['img3'],$row['img4'],$row['details']);}
            header("Refresh:0; url=prod.php");
        }

        if(isset($_SESSION['username'])){
            $element="
                <form action=\"productdetails.php\" method=\"post\">
                    <div class=\"req\">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>Trimite o solicitare de consultanta catre angajati !!!</h2>
                    <input class=\"textbox\" type=\"text\" name=\"email\" placeholder=\"email-ul tau\">
                    <input class=\"textbox\" type=\"text\" name=\"phnumber\" placeholder=\"numarul de telefon\">
                    <button type=\"submit\" name=\"send\">Trimite solicitarea</button>
                    </div>
                </form>
            ";
            echo $element;
        }
    ?>
</body>
</html>
