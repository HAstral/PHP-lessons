<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Encrypt | Decrypt 
    <hr>
    <?php  
    $name = "sithu";
    $serName = md5("$name");//encryping name
    $secName = sha1("$name");//longer than above one
    $thiName = crypt($name ,"AV");//($name,"tw")tw=the word you want to be contained
    echo $serName; 
    echo '<br>';
    echo $secName;
    echo'<br>';
    echo $thiName;
    //do not change even you reload the page
    //you can find md5 online free and decrypt the md5 encryption

    ?>

    <hr>
    Password Hash 
    <hr>
    <?php 
    $pass="mingyithar123";
    $hashPass= password_hash($pass, PASSWORD_BCRYPT);//can also use PASSWORD_DEFAULT 
    //changes each time you reload
    echo $pass;
    echo '<br>';
    echo $hashPass;
    echo '<br>';
    // var_dump(password_verify($pass, $hashPass));
    echo password_verify($pass, $hashPass)? 'same' : 'different';
   ?>
</body>
</html>