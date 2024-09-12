<?php

    $arr = array("Sophia"=>"31","Jacob"=>"41","william"=>"39","Ramesh"=>"40");

    ksort($arr);

    foreach($arr as $x => $x_value){
        echo "key=".$x.", value".$x_value;
        echo "<br>";
    }

    $inventory = [
        ["item_id" => 1,"item_name" => "Laptop"],
        ["item_id" => 2,"item_name" => "Monitor"],
        ["item_id" => 3,"item_name" => "Keyboard"] 
    ];

    $search_item = "Monitor";

?>
