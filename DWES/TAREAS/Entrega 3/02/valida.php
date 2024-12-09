<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $monthNum = $_POST['month'];
        $year = $_POST['year'];

        $months = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];
    }

    if ($monthNum >= 1 && $monthNum <= 12) {
        echo "<br>" . "IT IS " . $months[$monthNum - 1] . " " . $year;
    }
?>

</body>
</html>