<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<body>

    <h2>User Information Form</h2>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50"></textarea><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="usa">United States</option>
            <option value="canada">Canada</option>
            <option value="uk">United Kingdom</option>
            <option value="india">India</option>
            <option value="australia">Australia</option>
        </select><br><br>

        <label for="subscribe">Subscribe to newsletter:</label>
        <input type="checkbox" id="subscribe" name="subscribe" value="Yes"><br><br>

        <input type="submit" id="submit" name="submit" value="Submit">

    </form>

    <?php
        if(isset($_POST["submit"])){
            echo "<br> Welcome ", $_POST["name"] , "<br>Your Gender: ", $_POST["gender"], "<br>Your Address:", $_POST["address"], "<br> Your Country:", $_POST["country"], "<br>Subscribed?: ",$_POST["subscribe"];
        }
    ?>

</body>
</html>
