<?php

    $status = "regular";
    $amount = 400;

    if($status=="regular" && $amount>500){
        echo "Eligible for 20% Discount on $amount";
        echo "<br>";
        echo $amount-($amount*0.20);
    }elseif($status=="regular" && $amount<=500){
        echo "Eligible for 10% Discount on $amount";
        echo "<br>";
        echo $amount-($amount*0.10);
    }elseif($status!="regular" && $amount>500){
        echo "Eligible for 5% Discount on $amount";
        echo "<br>";
        echo $amount-($amount*0.05);
    }else{
        echo "Gareeb Sotted!";
    }

?>