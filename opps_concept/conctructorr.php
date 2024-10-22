<?php

    class MyClass{

        // constructor
        public function __construct(){
            echo 'The class '.__CLASS__.'was initiated! <br>';
        }

        // Destructor
        public function __destruct(){
            echo 'The class'.__CLASS__.'was destroyed! <br>';
        }
    }

    // create a new object:
    $obj = new MyClass;

    // Destroy the object:
    unset($obj);

?>