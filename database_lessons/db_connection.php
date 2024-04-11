<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Database Connection running...</h1> -->
    <?php 
    // mysqli_connect("hostname","userName","password","databaseName");
   $connection = mysqli_connect("localhost","root","","test");
    if($connection){
        echo "database success!";
    }else{
        // var_dump(mysqli_connect_error());
        die("mission failed...".mysqli_connect_error());
    }

    ?>
</body>
</html>