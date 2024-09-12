<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // require("header.php");
    include("header.php");
    ?>
    <!-- <form action="submit.php" method="POST"> -->
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <label for="name">User Name: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="pass">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            echo "Welcome", $_POST["name"] , "Your Password: ", $_POST["password"];
        }
    ?>

</body>
</html>