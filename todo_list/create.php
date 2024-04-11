<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To Do List</h1>
    <a href="read.php" style="margin-bottom:20px">List Page</a> <br><br>
    <form method="post">
        
            <label for="name">Your Tasks</label>
            <input type="text" name="workName" id="name" placeholder="Enter Your Task..."  >
            <button name='addBtn'>Add</button>

    </form>
    <?php 
    require_once('db_connection.php');
        if(isset($_POST["addBtn"])){
            // echo $_POST['workName'];
            $workName = $_POST['workName'];
            if($workName=="" || $workName== null){
            echo "<small style='color: red'>Message required</small>";
            }else{
                $sql = "INSERT INTO work (name) VALUES ('$workName')"; //same as the codes used in mySQL
                if(mysqli_query($conn, $sql)){ 
                   header("location:read.php");
           }else{
               echo "Failed again". mysqli_error();
           }
            }
         
    }
    ?>
</body>
</html>