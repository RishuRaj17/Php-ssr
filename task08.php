<?php

$val2 = 4281;
$reverse = 0;

while($val2>0){
    $b = $val2%10;
    $reverse = ($reverse*10)+$b;
    $val2= intval($val2/10);
}

echo $reverse;
?>