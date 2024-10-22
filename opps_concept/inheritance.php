<?php

    class papaClass{
        public $name, $age, $sal;

        public function __construct($n, $a, $s){
            $this->name=$n;
            $this->age=$a;
            $this->sal=$s;
        }

        function display(){
            echo "<h1>This is Employee Details:</h1>";
            echo "The name of the emp is:",$this->name,"<br>";
            echo "The age of the emp is:",$this->age,"<br>";
            echo "The sal of emp is:",$this->sal,"<br>";
        } 
    }


    class bacha extends papaClass{
        
    }

    $obj = new bacha("Rishu", 22, 60000);
    $obj->display();
?>