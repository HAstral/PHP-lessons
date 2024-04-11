<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
      <i>  HEloo Hello everyboly I Lee you </i>
    </h1>
    <?php
    $name="Arizu Moron south paw ma a loe";
    $test = "<h1>
    <i>  HEloo Hello everyboly I Lee you </i>
  </h1>";
    // echo $name."<br>";
    // echo strlen($name);
    // echo str_word_count($name);
    // echo strrev($name);
    // echo str_shuffle($name);
    // echo strpos($name,"Moron"); //string position
    // var_dump(strpos($name,"apex"));
    // echo substr($name,0,8)."<br>";
    // echo strtoupper($name);//can also use strtolower
    // echo ucwords($name);//can also use ucfirst
    // echo strip_tags( $test ); //with no html tags
    // echo str_replace("Moron","Fool", $name );
    // var_dump($name);
    // var_dump(trim($name));//remove space from left and right side
    //var_dump(trim($name,'word')); //remove word from the $name
    //ltrim so left trim | rtrim so right trim
    echo  "<pre>";
    // var_dump(str_split($name));//string to array
    //proof that it changed to array
    // $arr=str_split($name);
    // echo $arr[8];
    var_dump(explode(" ", $name,3));
    ?>
</body>
</html>