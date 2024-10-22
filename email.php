<?php

    $to = "rishuraj17jan@gmail.com";
    $subject = "test mail";
    $msg = "it is mail from php";
    $from = "rishuraj17jan@gmail.com";
    $headers="FROM:$from";

    mail($to,$subject,$msg,$headers);
    echo "mailsent";

?>