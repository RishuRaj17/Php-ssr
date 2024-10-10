<?php
$var = 9950;
 echo var_dump(filter_var($var,FILTER_VALIDATE_INT));
 
 echo "<br>";

 if(filter_var($var, FILTER_VALIDATE_INT)){
    echo "<br>$var is Integer.";
 }else{
    echo "Integer is not Valid";
 }
 
?>