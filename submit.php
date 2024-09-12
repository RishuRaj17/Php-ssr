<?php

    echo "<pre>";
    echo print_r($_POST);
    echo "<pre>";

    echo "Welcome " ,$_POST["name"];
    echo "<br>";
    echo "Password: ", $_REQUEST["password"]."<br>"."Name: ", $_REQUEST["name"];

    echo "<br>";
    echo "<br>";
    
    echo "<pre>";
    echo print_r($_SERVER);
    echo "<pre>";

?>