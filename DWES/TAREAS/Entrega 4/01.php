<?php
session_start();

class Person {
    private $name;

    public function getName(){
        return $this->name;
    }

    public function setName($newName) {
        $this->name = $newName;
    }
}

class Student extends Person {
    private $licenseNumber;
    private $marks = [null, null, null];

    public function getLicenseNumber() {
        return $this->licenseNumber;
    }

    public function setLicenseNumber($licenseNumber) {
        $this->licenseNumber = $licenseNumber;
    }

    public function setMark($mark, $trimester) {
        if ($trimester >= 1 && $trimester <= 3) {
            $this->marks[$trimester - 1] = $mark;
        }
    }

    public function getMark($trimester) {
        if ($trimester >= 1 && $trimester <= 3) {
            return $this->marks[$trimester - 1];
        }
        return null;
    }

    public function getAverage() {
        $total = 0;
        $count = 0;

        foreach ($this->marks as $mark) {
            if ($mark !== null) {
                $total += $mark;
                $count++;
            }
        }

        return $count > 0 ? $total / $count : 0;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $licenseNumber = $_POST['licenseNumber'];
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];

    $student = new Student();
    $student->setName($name);
    $student->setLicenseNumber($licenseNumber);
    $student->setMark($mark1, 1);
    $student->setMark($mark2, 2);
    $student->setMark($mark3, 3);

    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = [];
    }

    $_SESSION['students'][] = $student;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercises4</title>
</head>
<body>
    <h2>Data collection for students</h2>
    <form action="01.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="licenseNumber">License number:</label>
        <input type="text" id="licenseNumber" name="licenseNumber" required><br><br>

        <label for="mark1">Mark for 1st trimester:</label>
        <input type="number" id="mark1" name="mark1" min="0" max="100" required><br><br>

        <label for="mark2">Mark for 2nd trimester:</label>
        <input type="number" id="mark2" name="mark2" min="0" max="100" required><br><br>

        <label for="mark3">Mark for 3rd trimester:</label>
        <input type="number" id="mark3" name="mark3" min="0" max="100" required><br><br>

        <input type="submit" value="Send">
    </form>

    <h2>List of Students:</h2>
    <?php

    if (isset($_SESSION['students'])) {
        foreach ($_SESSION['students'] as $student) {
            echo "<p><strong>Name:</strong> " . $student->getName() . "<br>";
            echo "<strong>License number:</strong> " . $student->getLicenseNumber() . "<br>";
            echo "<strong>Mark for 1st trimester</strong> " . $student->getMark(1) . "<br>";
            echo "<strong>Mark for 2nd trimester</strong> " . $student->getMark(2) . "<br>";
            echo "<strong>Mark for 3rd trimester:</strong> " . $student->getMark(3) . "<br>";
            echo "<strong>Mark Average:</strong> " . $student->getAverage() . "<br><br></p>";
        }
    }
    ?>
</body>
</html>
