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
    <link rel="stylesheet" href="reqsst.css">
</head>
<body>
    <header>
    <a href="admin.php"><h3 class="logo">Website</h3></a>
    </header>   
    

    <title>Table with database</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        color: black;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th {
        background-color:#A17945;
        color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
        </style>
            </head>
        <body>
            <table>
                <tr>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                </tr>

    <?php
      //  $sql="SELECT * FROM requests ";
        //$result=mysqli_query($conn,$sql);
        //while($row=mysqli_fetch_assoc($result)){
          //  addReq($row["email"],$row["phone"],$row["date"]);
       // }

        $sql = "SELECT email, phone, date FROM requests order by date desc";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["email"]. "</td><td>" . $row["phone"] . "</td><td>"
        . $row["date"]. "</td></tr>";
        }
    }

    ?>
</body>
</html>