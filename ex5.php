<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Array Functions </h3>
    <hr>
    <?php 
    $arr = ['oreo','rio','dio','leo','amigo',10,11];
    $person = [
        'name'=> 'giga',
        'age'=> '1billion',
        'address'=> 'In Techno',
    ];
    $name = 'this is not nigga . Warnning !!!';
    echo count($arr); //array total no:
    echo "<br>";
    echo current($arr);//produce array[0] 
    echo "<br>";
    echo end($arr);//produce the last array
    echo "<br>";
    echo $arr[array_rand($arr)];//produce random array
    echo "<br>";
    echo array_sum($arr);//sum only numbers
    echo "<br>";
    $number = range("0","13");//build array easily
    echo "<pre>";
    var_dump($number); 
    echo "<br>";
    echo in_array("le",$arr)?"ooh negga" : "ooh nigga";//boolean
    echo array_key_exists('name',$person)? "true" : "false"; //check if it exist or not
    echo "<br>";
    echo "<pre>";
    var_dump(array_keys($person)); //get the keys
    var_dump(array_values($person)); // get the values
    var_dump(explode(" ", $name)); //string to array
    echo implode("/", $arr);//array to string
    // add back
    array_push( $arr,'chio');
     //remove back
     array_pop( $arr );
    //add front
    array_unshift( $arr,'neo');
   
    //remove front
    array_shift( $arr );
    echo "<pre>";
    var_dump($arr);
    ?>
</body>
</html>