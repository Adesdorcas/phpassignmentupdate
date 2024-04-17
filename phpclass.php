<?php

class Continent {
    public $name;
    public $currency;
    public $religion;

    public function __construct($name, $currency, $religion) {
        $this->name = $name;
        $this->currency = $currency;
        $this->religion = $religion;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . ", Currency: " . $this->currency . ", Religion: " . $this->religion . "<br>";
    }
}

class Country extends Continent {
    public function displayArea() {
        echo "The country " . $this->name . " is in africa and majority practice " . $this->religion . ".<br>";
    }
}

// Create an instance of the Country class
$myCountry = new Country("Ghana", "Cedi", "Christianity");

// Use the displayInfo method from the parent class
$myCountry->displayInfo();

// Use the displayArea method from the Country class
$myCountry->displayArea();
?>
