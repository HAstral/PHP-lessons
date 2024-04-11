<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
  <h1>Client Site</h1>

  <!-- GET | POST 
  Get => <a href=""></a>
  Post => <form action="" method="post"></form>  can also use get in method-->

    <a href="./server.php?name=MgLeeTaung&job=NgarBuu&address=Budai">Go</a>
    <form action="./server.php" method="post" enctype="multipart/form-data">  <!--will take the data written in name tag-->
        First Name<input type="text" name="firstName" id=""> <br>
        Second Name<input type="text" name="secName" id=""> <br>
        <br>
        <select name="gender" id="">
            <option value="A">Male</option>
            <option value="B">Female</option>
        </select>
        <br>
        <input type="file" name="myImg" id="">
        <br>
        <!-- <button type="submit">Click to send</button> -->
        <input type="submit" value="Click to send"> <!--submit will perform the method.This only work for submit method .not for button type or button tag-->
    </form>
</body>
</html>