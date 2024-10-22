<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>

<h1>Student Form</h1>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    <br>
    <br>
    <label for="course">Course:</label>
    <input type="text" id="course" name="course" required>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>

<?php

class Student {
    public $name;
    public $age;
    public $course;

    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    public function displayStudentDetails() {
        echo "<div class='student-details'>";
        echo "<h2>Student Details:</h2>";
        echo "<p><strong>Name:</strong> {$this->name}</p>";
        echo "<p><strong>Age:</strong> {$this->age}</p>";
        echo "<p><strong>Course:</strong> {$this->course}</p>";
        echo "</div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $student = new Student($name, $age, $course);

    $student->displayStudentDetails();
}
?>

</body>
</html>
