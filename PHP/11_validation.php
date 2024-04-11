<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body>
<?php 
      $errorAddress='';
      $errorName='';
      $errorContact='';
      $errorEmail='';
     
    if(isset($_POST["btnSave"])) {
      $name=$_POST["name"];
      $email=$_POST["email"];
      $contact=$_POST["contact"];
      $address=$_POST["address"];
      
      if($name==null ||  $name='' || empty($name)) {
        $errorName='Please fill Your Name ';
      }else{
        $name=$_POST['name'];
      }
      if($email==null ||  $email='' || empty($email)) {
        $errorEmail='Please fill Your Email ';
      }else{
        $email=$_POST['email'];
      }
      if($contact==null ||  $contact='' || empty($contact)) {
        $errorContact='Please fill Your Contact ';
      }else{
        $contact=$_POST['contact'];
      }
      if($address==null ||  $address='' || empty($address)) {
        $errorAddress='Please fill Your Address ';
      }else{
        $address=$_POST['address'];
      }
      
    if($name !='' && $email !='' && $contact !='' && $address !=''){
      echo $name . '<br>' ;
      echo $email . '<br>' ;
      echo $contact . '<br>' ;
      echo $address . '<br>' ;
    }
    }    
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow ">
              <form method="post">
              <div class="my-3  px-5">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name ">
                <span class="text-danger "><?php echo $errorName;  ?></span>
              </div>
              <div class="my-3  px-5">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Example@gmail.com">
                <span class="text-danger "><?php echo $errorEmail; ?></span>
              </div>
              <div class="my-3  px-5">
                <label for="">Contact</label>
                <input type="number" name="contact" class="form-control" placeholder="09-XXXXXXXXX ">
                <span class="text-danger "><?php echo $errorContact; ?></span>
              </div>
              <div class="my-3  px-5">
                <label for="">Address</label>
                <textarea type="text" name="  address" class="form-control" cols="30" rows="10" placeholder="Paris , France "></textarea>
                <span class="text-danger "><?php echo $errorAddress; ?></span>
              </div>
              <div class="my-3  px-5 float-end">
                <input type="submit" name="btnSave" value="Save" class="btn bg-success text-white">
              </div>
              </form>
            </div>
        </div>
    </div> 
</body>
</html>