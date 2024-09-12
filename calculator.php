<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1">
        <br>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2">
        <br>
        <br>
        <select name="operation" id="operation">
            <option value="Select">>--Select--<</option>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="mod">%</option>
        </select>
        <br>
        <br>

        <input type="submit" name="submit" value="Submit">
        <br>
        <br>

        <?php
            if(isset($_POST["submit"])){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $opr = $_POST["operation"];
                $ans;


                switch($opr){
                    case 'add':
                    $ans = $num1 + $num2;
                    break;
                    case 'sub':
                    $ans = $num1 - $num2;
                    break;
                    case 'mul':
                    $ans = $num1 * $num2;
                    break;
                    case 'mod':
                    $ans = $num1 % $num2;
                    break;
                }

                echo "Answer: ", $ans;
            }
        ?>
        
    </form>
</body>
</html>