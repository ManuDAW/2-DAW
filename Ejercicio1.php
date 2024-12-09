<?php
// Define the parent class Math
class Math {
    public $num1;
    public $num2;

    // Constructor to set num1 and num2
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
}

// Define the child class Operations
class Operations extends Math {
    public $color;

    // Constructor to set color and call the parent's constructor
    public function __construct($num1, $num2, $color) {
        parent::__construct($num1, $num2); // Call the parent's constructor
        $this->color = $color;
    }

    // Method to perform arithmetic operations
    public function arithmetic($operation) {
        $result = 0;
        switch ($operation) {
            case 'sum':
                $result = $this->num1 + $this->num2;
                break;
            case 'subtract':
                $result = $this->num1 - $this->num2;
                break;
            case 'multiply':
                $result = $this->num1 * $this->num2;
                break;
            default:
                return "Invalid operation";
        }
        // Return result with color formatting
        return "<span style='color: {$this->color};'>{$result}</span>";
    }

    // Method to change the color property
    public function change_color($color) {
        $this->color = $color;
    }
}

// Using the class Operations
// Create an object with numbers 4, 3, and color red
$operation = new Operations(4, 3, "red");

// Perform a sum
echo "Sum: " . $operation->arithmetic('sum') . "<br>";

// Change the color to green
$operation->change_color("green");

// Perform a multiplication
echo "Multiplication: " . $operation->arithmetic('multiply') . "<br>";
?>
