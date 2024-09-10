<?php
    const tax = 0.18;

    $price = 2000;

    echo "Tax before : ".(tax*100)."%";
    echo "<br>";

    $final_price = $price+(($price * tax));

    echo $final_price;
    
?>