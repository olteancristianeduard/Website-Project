<?php
    session_start();
    include "dbconn.php";
    include "functions.php";

    function addApp($file){
        $img="";
        $file=$_FILES[$file];

        $fileName=$file['name'];
        $fileError=$file['error'];
        $fileTmpName=$file['tmp_name'];

        if($fileError===0){
            $img='uploads/'.$fileName;
            //$_SESSION['img1']=$img1;
        }else { 
            echo "Eroare incarcare poza";
        }

        move_uploaded_file($fileTmpName,$img);
        return $img;
    }

    if(isset($_POST['add'])){
        // $file=$_FILES['file1'];
        // $fileName=$file['name'];
        // $fileError=$file['error'];
        // $fileTmpName=$file['tmp_name'];

        // if($fileError===0){
        //     $img1='uploads/'.$fileName;
        // }else { 
        //     echo "Eroare incarcare poza";
        // }
        // move_uploaded_file($fileTmpName,$img1);

        $appName=$_POST['appType'];

        $imgs1=addAPP('file1');
        $imgs2=addAPP('file2');
        $imgs3=addAPP('file3');
        $imgs4=addAPP('file4');
        $imgs5=addAPP('file5');

        $descriptionApp=$_POST['appDescription'];
       
        $sql="INSERT INTO `prod`(`name`, `img`, `img1`, `img2`, `img3`, `img4`, `details`) 
                VALUES ('$appName','$imgs1','$imgs2','$imgs3','$imgs4','$imgs5','$descriptionApp')";
        $run=mysqli_query($conn,$sql);
        header("location:admin.php");


    }  
    


