<?php
$cookieName = "visits";

if (isset($_COOKIE[$cookieName])) {
    $visits = $_COOKIE[$cookieName] + 1;
} else {
    $visits = 1;
}

$visitTime = date("d-m-Y H:i:s");

setcookie($cookieName, $visits, time() + 30);

if (isset($_COOKIE['visit_times'])) {
    $visitTimes = explode(',', $_COOKIE['visit_times']);
} else {
    $visitTimes = [];
}

$visitTimes[] = $visitTime;

setcookie('visit_times', implode(',', $visitTimes), time() + 30);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercises3</title>
</head>
<body>
    <p><strong>You have visited this page <?php echo $visits; ?> times.</strong></p>

    <p>List of last visits:</p>
    <ul>
        <?php
        if (!empty($visitTimes)) {
            foreach ($visitTimes as $time) {
                echo "<li>" . $time . "</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
