<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercises4</title>
</head>
<body>
<?php

class Table {

    private $titles;
    private const bgcolorHeader = "blue";
    private static $bgcolorAll = "white";
    private $data;

    public function __construct($titles, $data) {
        $this->titles = $titles;
        $this->data = $data;
    }

    public static function setcolor($color) {
        self::$bgcolorAll = $color;
    }

    private function drawHeader() {
        echo "<tr style='background-color: " . self::bgcolorHeader . ";'>";
        foreach ($this->titles as $title) {
            echo "<th>" . $title . "</th>";
        }
        echo "</tr>";
    }

    private function drawRows() {
        foreach ($this->data as $row) {
            echo "<tr style='background-color: " . self::$bgcolorAll . ";'>";
            foreach ($row as $cell) {
                echo "<td>" . $cell . "</td>";
            }
            echo "</tr>";
        }
    }

    public function drawTable() {
        echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
        echo "<thead>";
        $this->drawHeader();
        echo "</thead>";
        echo "<tbody>";
        $this->drawRows();
        echo "</tbody>";
        echo "</table>";
    }
}

Table::setcolor("white");

$titles = array("First Name", "Last Name", "Email", "Phone");
$data = array(
    array("Jose", "González", "josegonzalez@gmail.com", "962324234"),
    array("Alba", "Sanz", "albasanz@gmail.com", "666123123"),
    array("Ana", "Blanes", "anablanes@gmail.com", "677656755")
);

$table = new Table($titles, $data);
$table->drawTable();

?>
</body>
</html>