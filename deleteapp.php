<?php
include "dbconn.php";
include "functions.php";

if(isset($_POST['delete'])){
    $ID = $_POST['ID'];

    $sql="DELETE FROM `prod` WHERE id=$ID";
        $run=mysqli_query($conn,$sql);
        header("location:admin.php");
}