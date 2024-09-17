<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<body>

    <?php
    $nameErr = $genderErr = $addressErr = $countryErr = "";
    $name = $gender = $address = $country = $subscribe = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and spaces are allowed";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["country"])) {
            $countryErr = "Country is required";
        } else {
            $country = test_input($_POST["country"]);
        }

        if (isset($_POST["subscribe"])) {
            $subscribe = "Yes";
        } else {
            $subscribe = "No";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>User Information Form</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>" required>
        <span style="color:red;"><?php echo $nameErr;?></span><br><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" <?php if (isset($gender) && $gender=="Male") echo "checked";?>> Male
        <input type="radio" id="female" name="gender" value="Female" <?php if (isset($gender) && $gender=="Female") echo "checked";?>> Female
        <input type="radio" id="other" name="gender" value="Other" <?php if (isset($gender) && $gender=="Other") echo "checked";?>> Other
        <span style="color:red;"><?php echo $genderErr;?></span><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50"><?php echo $address;?></textarea>
        <span style="color:red;"><?php echo $addressErr;?></span><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="">Select your country</option>
            <option value="usa" <?php if (isset($country) && $country=="usa") echo "selected";?>>United States</option>
            <option value="canada" <?php if (isset($country) && $country=="canada") echo "selected";?>>Canada</option>
            <option value="uk" <?php if (isset($country) && $country=="uk") echo "selected";?>>United Kingdom</option>
            <option value="india" <?php if (isset($country) && $country=="india") echo "selected";?>>India</option>
            <option value="australia" <?php if (isset($country) && $country=="australia") echo "selected";?>>Australia</option>
        </select>
        <span style="color:red;"><?php echo $countryErr;?></span><br><br>

        <label for="subscribe">Subscribe to newsletter:</label>
        <input type="checkbox" id="subscribe" name="subscribe" value="Yes" <?php if (isset($subscribe) && $subscribe=="Yes") echo "checked";?>><br><br>

        <input type="submit" value="Submit">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($genderErr) && empty($addressErr) && empty($countryErr)) {
        echo "<h3>Form Submitted Successfully</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        echo "<p><strong>Subscribed to Newsletter:</strong> $subscribe</p>";
    }
    ?>

</body>
</html>
