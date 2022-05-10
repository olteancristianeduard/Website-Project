<?php

function emptyRegistration($username, $password){
    if(empty($username) || empty($password)){
        return true;
    }
    else return false;
}

function userExists($conn,$username){
    $sql="SELECT * FROM user WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        return true;
    }
    else return false;
}

function prod($img,$name,$id){
    $element="
    <form action=\"productdetails.php\" method=\"post\">
        <div class=\"container\">
        <img src=$img alt=\"image\">
        <div>
            <h1>$name</h1>
        </div>
        <input type=\"hidden\" name=\"id\" value=$id>
        <button type=\"submit\" name=\"view\">DETALII</button>
        </div>
    </form>
    ";
    echo $element;
}

function prodAdmin($img,$name,$id){
  $element="
  <form action=\"deleteapp.php\" method=\"post\">
      <div class=\"container\">
      <img src=$img alt=\"image\">
      <div>
          <h1>$name</h1>
      </div>
      <input type=\"hidden\" name=\"ID\" value=$id>
      <button type=\"submit\" name=\"delete\">DELETE</button>
      </div>
  </form>
  ";
  echo $element;
}

function prodDetails($img1,$img2,$img3,$img4,$details){
    $elem="
    <div class=\"carousel-wrapper\">
    <span id=\"item-1\"></span>
    <span id=\"item-2\"></span>
    <span id=\"item-3\"></span>
    <div class=\"carousel-item item-1\">
      <a href=\"#item-3\" class=\"arrow-prev arrow\"></a>
      <a href=\"#item-2\" class=\"arrow-next arrow\"></a>
    </div>

    <div class=\"carousel-item item-2\">
      <a href=\"#item-1\" class=\"arrow-prev arrow\"></a>
      <a href=\"#item-3\" class=\"arrow-next arrow\"></a>
    </div>

    <div class=\"carousel-item item-3\">
      <a href=\"#item-2\" class=\"arrow-prev arrow\"></a>
      <a href=\"#item-1\" class=\"arrow-next arrow\"></a>
    </div>
    <style>
        .item-1 {
    z-index: 2;
    opacity: 1;
    background: url(\"$img1\");
    background-size: cover;
  }
  .item-2 {
    background: url(\"$img2\");
    background-size: cover;
  }
  .item-3 {
    background: url(\"$img3\");
    background-size: cover;
  }
    </style>
  </div>
  <div class=\"long-info\">
        <h1>
            $details
            
        </h1>
    </div>
    ";
    echo $elem;
}


// function addApp($file){
//         $img="";
//         $file=$_FILES[$file];

//         $fileName=$file['name'];
//         $fileError=$file['error'];
//         $fileTmpName=$file['tmp_name'];

//         if($fileError===0){
//             $img1='uploads/'.$fileName;
//             //$_SESSION['img1']=$img1;
//         }else { 
//             echo "Eroare incarcare poza";
//         }

//         move_uploaded_file($fileTmpName,$img1);
//         return $img;
// }

//<form action=\"requests.fnc.php\">
  //          <div class=\"reqData\">
    //            <h4>$email</h4>
      //          <h4>$phone</h4>
        //        <h4>$date</h4>
          //  </div>
    //</form>