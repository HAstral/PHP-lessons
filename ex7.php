<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Constants</h3>
    <hr>
    <?php 
    $cname = "Zephap";
    $alp=['a','b','c'];
    define("NAME",$alp); //same as $NAME="Asshold";
    // echo NAME;//case sensitive
     function showMess(){
        echo NAME['0'];          
     }
     showMess();
    ?>
</body>
</html>