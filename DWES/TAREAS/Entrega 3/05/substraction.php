<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $result = $number1 - $number2;
    echo "<h1>Result of Substraction: $number1 - $number2 = $result</h1>";
}
?>

<a href="05.html">Make another operation</a>
