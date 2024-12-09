<?php
session_start();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$try = isset($_POST['try']) ? $_POST['try'] : 3;

$_SESSION['name'] = $name;
$_SESSION['pass'] = $pass;
$_SESSION['try'] = $try;

if (empty($name) || empty($pass)) {
    $_SESSION['error1'] = "Please fill out all fields";
    header("Location: 06.php");
} elseif ($name == "Jose" && $pass == "123") {
    header("Location: login.php");
} else {
    $_SESSION['try']--;
    if ($_SESSION['try'] < 1) {
        session_destroy();
        header("Location: block.php");
    } else {
        $_SESSION['error2'] = "Wrong Name or Password";
        header("Location: 06.php");
    }
}
?>
