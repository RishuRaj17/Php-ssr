<?php
// what is regular expression?
// pattern matching of string.
// preg_match() ->
// preg_match_all() ->

$str = "Php is the web scripting php language of choice.";

$exp = preg_match("/Php/",$str);
$exp2 = preg_match("/WEB/i",$str);
// $exp3 = preg_match_all("/php/i", $str, $array);
$exp3 = preg_match_all("/[wo]/i", $str, $array);

if($exp){
    echo "A match was found.<br>";
}else{
    echo "No match was found.<br>";
}

if($exp2){
    echo "A match was found.<br>";
}else{
    echo "No match was found.<br>";
}

if($exp3){
    echo "A match was found.<br>";
}else{
    echo "No match was found.<br>";
}

echo "<pre>".print_r($array)."</pre>";

?>