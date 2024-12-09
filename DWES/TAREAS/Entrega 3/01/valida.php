<?php
    if ($_POST['month']) {
        $monthNum = $_POST['month'];
        $year = $_POST['year'];

        $months = array("JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER");

        if ($monthNum >= 1 && $monthNum <= 12) {
            echo "<br>" . "IT IS " . $months[$monthNum - 1] . " " . $year;
        } else {
            echo "<br>" . "Invalid month. Please Fill between 1 and 12";
        }
    }
?>

