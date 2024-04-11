<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
    <h3>Login Form</h3>
    <form action="" method="post">
        Email <input type="email" name="userEmail" > <br>
        Password <input type="password" name="userPass" > <br>
        <input type="submit" value="Log In" name="loginBtn">
    </form>
    <?php 
    $email= 'papagyi@gmail.com ';
    $password= '$2y$10$/7BpgAlh6JJNp5hxVmS3yeD2OSmTgX596tkqKag/oXabheZnZe4wa';
    // $hashPass = password_hash('hehe123', PASSWORD_BCRYPT); //hash password
    // echo $password . '<br>';
    // echo $hashPass;

    // var_dump (password_verify($password, $hashPass));
    if(isset($_POST['loginBtn'])){


        $userEmail= $_POST['userEmail'];
        $userPass= $_POST['userPass'];
        // // echo $userEmail . $userPass;
        if($email == $userEmail && password_verify($userPass, $password)){
            echo 'Login Success!';
        }else{
            echo 'Login Fail! Try Again...';
        }
    }
    ?>
</body>
</html> 

