<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CA2</title>
    <style>
        button{
            background-color:green;
            border: 10px;
            padding: 5px;
            border-radius: 3px;
            margin:4px;
        }
    </style>
</head>
<body>
    
<h1>Select Preferences</h1>

<form action="preference.php" method="POST">
        <input type="checkbox" name="news" id="news" value="yes">News<br>
        <input type="checkbox" name="updates" id="updates" value="yes">Updates<br>
        <input type="checkbox" name="offers" id="offers" value="yes">Offers<br>
        <button type="submit" name = "submit" id="submit" value="submit">Submit Prefernces</button>
    </form>
</body>
</html>