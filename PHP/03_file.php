<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File store</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userProfile" id="">
        <br><br>
        <input type="submit" value="Save" name="storeProfile">
    </form>
    <?php 
    if(isset($_POST["storeProfile"])){
        // echo '<pre>';
        // print_r($_FILES);

        $imgName = $_FILES['userProfile']['name'];
        $tmpName = $_FILES['userProfile']['tmp_name'];
        // print_r($imgName);
        // echo '<br>';
        // print_r($tmpName);
        $target_file = 'image/'. $imgName;
        if(move_uploaded_file($tmpName, $target_file)){
            move_uploaded_file($tmpName, $target_file);
            echo 'success';
        }else{
            echo 'error';
        }
    }
    ?>
</body>
</html>