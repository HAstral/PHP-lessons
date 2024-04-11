<?php  
echo "oop"."<br>";
class Car{  //class create
    //property
    private $name="Porsche";
    public $price = "$100K";

    //method
   
    public function setName($name="Dugatti"){
        $this->name=$name;
    }
   public function getCarName($name='Mercedes'){ //type 
        $this->name=$name;
        // echo $this->name;
        return $this->name;

    }
    public function getName(){
        return $this->name;
    } 
    public function getCarPrice($price='$80K'){   //void
        $this->$price=$price;
        echo $this->$price;
    }
}
$res= new Car();  // object create
// echo $res-> name;
$res->setName();
$name=$res->getName();
echo $name;
echo "<br>";
echo $res->price;
echo "<br>";
// $res->getCarName("Lykan"); //you have to enter something in property or else your page will not reload or if you don't want to enter ,you can put a default value in upper function
$name=$res->getCarName("Lykan"); 
echo $name;
echo '<br>';
$res->getCarPrice("$300K");
?>