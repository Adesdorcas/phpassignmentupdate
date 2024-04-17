<?php

class Animal {
    public $name;
    public $type;
    public $sound;

    public function __construct($name, $type, $sound) {
        $this->name = $name;
        $this->type = $type;
        $this->sound = $sound;
    }

    public function makeSound() {
        echo $this->name . " the " . $this->type . " makes a " . $this->sound . " sound.<br>";
    }
}

class Dog extends Animal {
    public function wagTail() {
        echo $this->name . " the " . $this->type . " wags its tail happily.<br>";
    }
}

// Create an instance of the Dog class
$myDog = new Dog("Jackie", "Dog", "barking");

// Use the makeSound method from the parent class
$myDog->makeSound();

// Use the wagTail method from the Dog class
$myDog->wagTail();
?>
