<?php
    $exp = true;
    $isEven = 10%2;
    echo $isEven?"the expression is false":"expression is true";
    echo "<br>";


    $age =18;
    echo ($age==18)?"Eligible":"Not Eligible";
    echo"<br>";


    // $grade = 40;
    // echo ((((((((($grade>=90)?"A":$grade)>=80)?"B":$grade)>=70)?"C":$grade)>=60)?"D":$grade)<60)?"F":$grade;


    $a=2;
    $b=4;
    $c=6;

    echo "<br>";
    echo ($a>$b)?(($a>$c)?"Max is $a":"Max is $c"):(($b>$c)?"Max is $b":"Max is $c");

    echo "<br>";

    $num = -12;
    echo ($num>0)?
    "Positive"
    :
    (($num<0)?
    "Negative"
    :
    "Zero");




?>
