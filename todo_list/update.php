<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php  
require_once('db_connection.php');
// echo "this is update page.";
$id=$_GET['id'];
$sql= "SELECT * FROM work where id=$id";
echo '<pre>';
$query=mysqli_query($conn, $sql);
$data=mysqli_fetch_assoc($query);  //get data
if(isset($_GET['updateBtn'])){
    $id=$_GET['id'];
    $workName=$_GET['workName'];
    if($workName== '' || $workName== null){   //error check
    echo"<small style='color:red;'>Work Name is required!</small>";
    }else{
        $updateSQL="UPDATE  work SET  name='$workName' WHERE id=$id";
    if(mysqli_query($conn, $updateSQL)){
    header("location:read.php");//will send u back to read.php

    }else{
        echo "update error....". mysqli_error();
    }
}
}
?>
    <a href="read.php">List Page</a>
    <form method="GET">
        Tasks
        <input type="hidden" name="id" value="<?php echo $data['id']  ?>"> <!--user will not see the id but the id will be carried to database-->
        <input type="text" name="workName" value="<?php echo $data['name']  ?>">
        <button name="updateBtn">Update</button>
    </form>
</body>
</html>