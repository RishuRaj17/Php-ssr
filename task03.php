<?php
        $a = 10;
        $b = 4;
        $c = 10;
        $d = 2;
        $e = 1;
        $str ="Hello";
        $str2 = "World!";

        $exp = true;
        echo $exp?"the expression is true":"expression is false";
        echo "<br>";

        echo (($a+$b)*($c/$d)-$e);
        echo "<br>";


        echo $a+=$b;
        echo "<br>";
        echo $a-=$c;
        echo "<br>";
        echo $a*=$d;
        echo "<br>";
        echo $a/=$e;
        echo "<br>";
        echo $a%=$c;
        echo "<br>";
        echo $str.$str2;

        echo "<br>";
        echo $a++;
        echo "<br>";
        echo $a--;
        
?>