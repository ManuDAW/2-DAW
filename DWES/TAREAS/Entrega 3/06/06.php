<?php
session_start();

if (!isset($_SESSION["try"])) {
    $_SESSION["try"] = 3;
}

$name = isset($_SESSION["name"]) ? $_SESSION["name"] : '';
$pass = isset($_SESSION["pass"]) ? $_SESSION["pass"] : '';

if (isset($_SESSION["error2"])) {
    echo "Error: " . $_SESSION['error2'] . "<br>";
    echo "Attempts pending: " . $_SESSION["try"] . "<br>";
}

if (isset($_SESSION["error1"])) {
  echo "Error: " . $_SESSION['error1'] . "<br>";
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercises3</title>
</head>
<body>
  <form action="valida.php" method="POST">
    <h3>Login:</h3>
    <input type="hidden" name="try" value="<?php echo $_SESSION['try']; ?>" />

    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>" /><br>

    <label for="pass">Password:</label>
    <input type="text" name="pass" value="<?php echo $pass; ?>" /><br><br>

    <input type="submit" name="button" value="Login">
  </form>
</body>
</html>
