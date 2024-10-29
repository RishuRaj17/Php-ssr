<?php

interface parent1{
    function cal($a, $b);
}

interface parent2{
    function sub($a, $b);
}


class child implements parent1, parent2{
    public function cal($a, $b){
        echo $a+$b;
    }

    public function sub($a, $b){
        echo $a-$b;
    }
}

$test = new child();
?>