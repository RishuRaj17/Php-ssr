<?php

$val=12345;
$temp = 0;

while($val>0){
    $a = $val%10;
    $temp += $a;
    $val/=10; 
}

echo $temp;

echo "<br>";


?>