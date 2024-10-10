<?php
$str = "<h1>Hello World!</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo "$newStr<br>";


// validating and sanitizing url:

$url = "https://github.com";
$url = filter_var($url, FILTER_SANITIZE_URL);

if(!filter_var($url, FILTER_VALIDATE_URL)==false){
    echo "$url is valid url.";
}else{
    echo "$url is not valid.";
}


?>