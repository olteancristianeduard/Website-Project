<?php

session_start();
include "dbconn.php";
include "functions.php";

    if (isset($_POST["login"])){
        $Username = $_POST['username'];
        $Pass = $_POST['password'];

    $select = mysqli_query($conn," SELECT * FROM user WHERE username = '$Username' AND password = '$Pass' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["username"] = $row['username'];
    }   else {
        echo "Nup";
    }
    }
    if(isset($_SESSION["username"])){
        header("location:index.php");
    }

    //$adminUsername="admin";

    if(isset($_POST['admin']) && $_POST['username']=="admin" && $_POST['password']=="admin"){
            //$message="12345";
            //mail('@yahoo.com', 'My Subject', $message);
            //$sql="UPDATE `admin` SET `username`='admin',`password`='1234567' WHERE `username`='admin'";
            //$run=mysqli_query($conn,$sql); 
            header("location:admin.php");
    }
