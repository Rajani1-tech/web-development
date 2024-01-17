<?php
// Define a simple class
class Country {
    // Properties (attributes)
    public $city;
    public $area;

    // Constructor method
    public function __construct($city, $area) {
        $this->city = $city;
        $this->area = $area;
    }

    // Method to display information
    public function displayInfo() {
        echo "City: " . $this->city . "<br>";
        echo "Area: " . $this->area . "<br>";
    }
}

// Create objects of the class
$USA = new Country("New York", 1213);
$UK = new Country("London", 1572);

// Call methods on objects
echo "<h2>Country 1: USA</h2>";
$USA->displayInfo();

echo "<h2>Country 2: UK</h2>";
$UK->displayInfo();
?>
