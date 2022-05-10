<?php

    $serverName="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="test";

    $conn=mysqli_connect($serverName,$dbusername,$dbpassword,$dbname);

    if(!$conn){
        die("connection ".mysqli_connect_error());
    }