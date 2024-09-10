<?php
    $matrix = array(
        array(11,23,1),
        array(12,43,62),
        array(8,21,4),
    );


    for($i=0;$i<count($matrix);$i++){
        for($j=$i;$j<count($matrix);$j++){
            if($i==$j){
                continue;
            }
            $temp = $matrix[$i][$j];
            $matrix[$i][$j] = $matrix[$j][$i];
            $matrix[$j][$i] = $temp;
        }
    }

    foreach( $matrix as $trans){
        foreach($trans as $transpose){
            echo "$transpose ";
        }
        echo "<br>";
    }
?>
