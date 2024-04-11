<?php   
     $name ="Aye Win";
    //  var_dump( $name );
    //  print($name);
    //  print_r($name);
     echo $name;
     $num1 = 10;
     $num2 = 11;
     echo $num1 + $num2;//"." = "and"  same meaning

     $array = ['app','dabb','subb'];
     $Asoarray = [
        'name'=> 'KyawWin',
        'age' => '22',
        'role' => 'SM',
     ];
     $output = function(){
        echo "Hello good night";
     };

     echo "<pre>";
     var_dump($Asoarray);
     var_dump($array);
     echo $array[0]."<br>";
     echo $Asoarray['name']."<br>";

     $fruits="durian";

    //  if($fruits == "durian"){
    //     echo "I don't like the smell";
    //  } else {
    //     echo "hmm, what is this then";
    //  };
    $result= $fruits =="surian" ? "this is durian<br>" : "This is Gway Si<br>";
    echo $result;

    $Lee=['LeeMaeGyi','LeeShayGyi','LeeToeLay','LeeToteGyi'];
    // echo count($Lee);
        for($i = 0; $i < count($Lee); $i++){
            echo $Lee[$i].'<br>';
        };
        foreach($Lee as $item){
            echo $item.'<br>';
        };

        $numb= 1;
        // while ($numb<=12){
        //     echo $numb.'<br>';
        //     $numb++;
        // };
        do{
            echo $numb.'<br>';
            $numb++;
        }while ($numb>=12);
        function out($a, $b){
            // echo $a+$b;
            return $a+$b; 
        };
        // out("this is whitta");
        // out(10,20);
        echo out(10,20);
