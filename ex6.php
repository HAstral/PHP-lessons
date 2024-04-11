<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arr = ['oreo','rio','dio','leo','amigo',10,11];
    $number = [12,23,33,2,9,10,11];
    $person = [
        'name'=> 'giga',
        'age'=> 'billion',
        'address'=> 'InTechno',
    ];
    // echo '<pre>';
    // sort($arr);

    // for( $i = 0; $i < count($arr); $i++ )
    // // var_dump(sort($arr));
    // {
    //     echo $arr[$i];
    //     echo "<br>";
    // }
    // rsort($number); //reverse sorting
    // for( $i = 0; $i < count($number); $i++ )
    // // var_dump(sort($number));
    // {
    //     echo $number[$i];
    //     echo "<br>";
    // }
    //only for associated array
    // asort($person); //value ascending 
    // ksort( $person );//key  descending

    //arsort => value descending
    //krsort => key descending
    // echo "<pre>";
    // var_dump($person); 
    shuffle( $arr );
    echo '<pre>';
    var_dump( $arr);
   ?>
</body>
</html>