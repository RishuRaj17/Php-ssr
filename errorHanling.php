<?php

    if(file_exists("mytestfile.txt")){
        $file = fopen("mytestfile.txt","r");
        echo fread($file, filesize("file.txt"));
        fclose($file);
    }else{
        die("Error: The file does not exsist!");
    }

?>