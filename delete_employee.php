<?php
// Connect to db
include 'login.php';

// Check employee id
if (isset($_POST['empno'])) {
    $empno = $_POST['empno'];

    // Remove from db
    $sql_delete = "DELETE FROM emp WHERE empno = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $empno);
    
    if ($stmt->execute()) {
        // Success removed
        $message = "One employee deleted";
    } else {
        // Error
        $message = "Error deleting employee";
    }

    $conn->close();
} else {
    // Go back if no employee
    header("Location: Ejercicio3.php"); 
    exit();
}
?>


<body>
    <h1><?php echo $message; ?></h1>
    <form action="Ejercicio3.php" method="POST">
        <button type="submit">Back</button>
    </form>
</body>
</html>
