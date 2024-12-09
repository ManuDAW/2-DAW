<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercises4</title>
</head>
<body>
<?php

class Employee {

    private $name;
    private $salary;


    public function setEmployee($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }


    public function check() {

        if ($this->salary > 3000) {
            echo $this->name . " has a salary of " . $this->salary . "€ and <strong>may</strong> pay taxes.<br>";
        } else {
            echo $this->name . " has a salary of " . $this->salary . "€ and <strong>may NOT</strong> pay taxes.<br>";
        }
    }
}

$employee1 = new Employee();
$employee1->setEmployee("Jose Fajardo", 3500);

$employee2 = new Employee();
$employee2->setEmployee("Marta Gimenez", 2500);

$employee1->check();
$employee2->check();
?>
</body>
</html>