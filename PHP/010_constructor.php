<?php 
    class Animals{
        public $name="Arr Woo";
        public $color;
        public function __construct($aName='ooo',$aColor='green'){  //constructor
            $this->color= $aColor;
            $this->name= $aName;
        }
        public function sleep(){
            echo '<br>'.'woom bell...';
        }
    }
    class Cow extends Animals{
        public function greeding(){
            echo '<br>'."moo moo";
        }
    }
    $dog = new Animals('Maung Net','Gray');
    
    // echo $dog->name;
    $cow=new Cow('Mg Kaung','dark');
    // $cow->greeding();
    // $cow->sleep();
    // $dog->sleep();
    echo $cow->name;

?>