<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="appartamentstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <header>
    <a href="admin.php"><h3 class="logo">Website</h3></a>
        <nav>
            <ul class="nav-links">
            </ul>
        </nav>
    </header>  

    <div class="uploads">
    <form action="upload.fnc.php" method="post" enctype="multipart/form-data">
        <h2>Introduceti date despre apartament</h2>
        <input class="input_app" type="text" placeholder="appartament type" name="appType" value="">
    
        <div class="img_uploads">

        <input class="individual_img" type="file" name="file1">
        <input class="individual_img" type="file" name="file2">
        <input class="individual_img" type="file" name="file3">
        <input class="individual_img" type="file" name="file4">
        <input class="individual_img" type="file" name="file5">

        </div>

        <textarea class="textapp" name="appDescription" placeholder="appartament description" id="" cols="30" rows="10"></textarea>
        
        <div class="addBtn">
        <button type="submit" name="add">Add appartament</button>
        </div>
    </form>
    </div>

    
</body>
</html>