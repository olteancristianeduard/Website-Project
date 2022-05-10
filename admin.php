<?php
include "dbconn.php";
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productstll.css">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <header>
    <a href="#"><h3 class="logo">Website</h3></a>
        <nav>
            <ul class="nav-links">
                <li><a href="appartaments.php">Add appartaments</a></li>
                <li><a href="requests.php">Manage requests</a></li>
                <li><a href="login.php">Log Out</a></li>

            </ul>
        </nav>
    </header>   
    
    <?php
        $sql="SELECT * FROM prod ";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            prodAdmin($row['img'],$row['name'],$row['id']);
        }
    ?>

</body>
</html>