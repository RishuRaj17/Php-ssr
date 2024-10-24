<?php

if(isset($_SERVER["REQUEST_METHOD"])=="POST"){

    $preferences = array(
        'news' => $_POST['news'],
        'updates' => $_POST['updates'],
        'offers' => $_POST['offers']
    );


   

    // setting cookie:
    setcookie("user_preference",serialize($preferences),time()+3600,'/');

    header("Location: sub.php");
    exit;
}

?>