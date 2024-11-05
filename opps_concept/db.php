<?php

$link = mysqli_connect("localhost", "root", "1234");

if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql = "CREATE DATABASE demo";

if(mysqli_connect($link, $sql)){
    echo "Database created successfully!";
}else{
    echo "ERROR: Could not able to execute $sql". mysqli_error();
}

mysqli_close($link);

?>