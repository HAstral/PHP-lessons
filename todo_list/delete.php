
<?php 
require_once('db_connection.php');
$id= $_GET["id"];
// var_dump($_GET);
$sql="DELETE FROM work WHERE id=$id";
if(mysqli_query($conn,$sql)){
    header("location:read.php");
}else{
    echo "delete failed". mysqli_error();
}
  ?>