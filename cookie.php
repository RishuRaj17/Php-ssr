<?php

// $cookie_name = "user";
// $cookie_value = "Rishu";

// setcookie($cookie_name,$cookie_value, time()+60,"/");

setcookie("user","Rishu", time()+60,"/");


if(isset($_COOKIE['user'])){
    echo "the cookie :", $_COOKIE["user"];
}else{
    echo "cookie not set";
}

?>

<!-- <html>

<body>

    // echo "the cookie: ", $_COOKIE["user"];
?>
</body>

</html> -->

