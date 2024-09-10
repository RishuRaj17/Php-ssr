<?php

    $result = array(
        array("Rishu",8.5,"Pass"),
        array("Siddhi",5.5,"Fail"),
        array("Adi",7.5,"Pass"),
    );
    
    // print_r($result);


    echo "</pre>";

    echo "<table border = 2px >";

    foreach($result as $res){
        echo "<tr>";
        foreach($res as $rum){
            echo "
                <td>$rum</td>
            ";
            
        }
        echo "</tr>";
    }

?>