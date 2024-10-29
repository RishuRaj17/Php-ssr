<?php

    abstract class base{
        public $name;
        abstract function printdata();
        public function getdata(){
            echo "world!<br>";
        }
    }

    class derived extends base{
        function printdata(){
            echo "Hello<br>";
        }
    }


    $ob = new derived();
    $ob->getdata();
    $ob->printdata();
?>