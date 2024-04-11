<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     echo pow(2,4);
     echo "<br>";
    echo sqrt(9);
    echo "<br>";
    echo abs(-22);//it change negative no: to positive
    echo "<br>";
    echo ceil(1.12);//take the larger no:
    echo "<br>";
    echo floor(1.82);//take the smaller no:
    echo "<br>";
    echo rand(1,11); //give random no: 
    echo "<br>";
    $arra=[1,11,12,121,2,3,43,25,21,54];
    echo max($arra);
    echo "<br>";
    echo min($arra);
    echo "<br>";
    echo round(1.6); //get the closest value
    
    ?>
</body>
</html>