<?php 
    $conn = mysqli_connect("localhost","root","","todo_list");
    if (!$conn){
        echo 'Mission failed...'.mysqli_connect_error();
    };