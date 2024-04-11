<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks List</h1>
    <a href="create.php" style="text-decoration: none  ;">Create Page</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <!-- <tbody>
            <tr>
                <td>1</td>
                <td>Code Lab</td>
                <td>3.3.2033</td>
                <th>
                    <a href="#">Update</a> |
                    <a href="#">Delete</a>
                </th>
            </tr>
        </tbody> -->

        <?php 
        require_once("db_connection.php"); //database connect
        // select * from table_name;
        $sql= "SELECT * FROM work";
        $query=mysqli_query($conn,$sql); //db_connection nae connect
        // echo "<pre>";
        // var_dump($query); 
        $row = mysqli_num_rows($query); //7
        // var_dump($row); 
       
    while($row = mysqli_fetch_assoc($query)){
        $time = date("d-M-Y g:i",strtotime($row["created_at"]));
        echo " <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>$time</td>
        <th>
            <a href='update.php?id={$row['id']}'>Update</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </th>
    </tr>";
    }
        
        ?>
    </table>
</body>
</html>