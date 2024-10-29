<?php

abstract class bike{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    abstract public function intro();
}

class TVS extends Bike{
    public function intro(){
        return "This is a $this->name!";
    }
}

class Hero extends Bike {
    public function intro(){
        return "This is a $this->name!";
    }
}


?>