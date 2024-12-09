<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monthNum = $_POST['month'];
    $year = $_POST['year'];


    if ($monthNum < 1 || $monthNum > 12) {
        $_SESSION['error'] = "Please enter a month between 1 and 12.";

    } elseif (empty($year) || !preg_match("/^\d{4}$/", $year)) {
        $_SESSION['error'] = "Please enter a valid year with 4 numbers.";
    } else {

        $_SESSION['month'] = $monthNum;
        $_SESSION['year'] = $year;
        $_SESSION['error'] = "";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercises3</title>
</head>
<body>
    <form method="POST">
        <label for="month">Month:</label>
        <input type="number" name="month" value="<?php echo isset($_SESSION['month']) ? $_SESSION['month'] : ''; ?>" /><br />

        <label for="year">Year (Format YYYY):</label>
        <input type="number" name="year" value="<?php echo isset($_SESSION['year']) ? $_SESSION['year'] : ''; ?>" /><br />

        <input type="submit" value="Send">
    </form>

    <?php
        if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
            echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
        }

        if (!empty($_SESSION['month']) && !empty($_SESSION['year']) && $_SESSION['error'] == "") {
            $monthNum = $_SESSION['month'];
            $year = $_SESSION['year'];

            $months = array("JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER");

            echo "<br>" . "IT IS " . $months[$monthNum - 1] . " " . $year;
        }
    ?>
</body>
</html>
