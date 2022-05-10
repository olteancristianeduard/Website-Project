<?php

include "dbconn.php";
include "functions.php";

    if (isset($_POST["submit"])){
        $username=$_POST["uid"];
        $password=$_POST["pass"];

        if(emptyRegistration($username, $password)!==false){
            echo 'Please complete fields';;
            exit();
        }

        if(userExists($conn,$username)!==false){
            echo 'Username not available';
            exit();  
        }

        $sql="INSERT INTO user (username,password) VALUES ('$username', '$password')";
        $run=mysqli_query($conn,$sql);
        header("location:index.php");

    }

    else{
        header("location:../register.php");
    }