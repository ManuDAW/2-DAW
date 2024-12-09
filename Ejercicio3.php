<?php
// Connect to database
include 'login.php';

// Check if department has been selected
$selected_dept_id = null;
if (isset($_POST['department_id'])) {
    $selected_dept_id = $_POST['department_id'];
    
    // Fetch employees
    $sql_employees = "SELECT empno, ename FROM emp WHERE deptno = ?";
    $stmt = $conn->prepare($sql_employees);
    $stmt->bind_param("i", $selected_dept_id);
    $stmt->execute();
    $result_employees = $stmt->get_result();
}
?>

<head>
</head>
<body>
    <h1>Choose Department</h1>

    <form method="POST" action="">
        <select name="department_id" id="department" required>
            <?php
            // Obtener los nombres de los departamentos desde la base de datos
            $sql = "SELECT deptno, dname FROM Dept";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Verificar si el departamento está seleccionado
                    $selected = ($row['deptno'] == $selected_dept_id) ? 'selected' : '';
                    echo "<option value='" . $row['deptno'] . "' $selected>" . htmlspecialchars($row['dname']) . "</option>";
                }
            } else {
                echo "<option value=''>No departments available</option>";
            }
            ?>
        </select>
        <button type="submit">Accept</button>
    </form>

    <?php if (isset($result_employees) && $result_employees->num_rows > 0): ?>
        <h2>Select Employee to Delete</h2>
        <form method="POST" action="delete_employee.php">
            <select name="empno" required>
                <?php while ($emp = $result_employees->fetch_assoc()): ?>
                    <option value="<?php echo $emp['empno']; ?>">
                        <?php echo htmlspecialchars($emp['ename']); ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
        </form>
    <?php endif; ?>

</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>
