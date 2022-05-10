<?php

//parent class
abstract class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function makeSound(): string;
}

//childs class
class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Meo Meo <br>";
    }
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Gau Gau <br>";
    }
}

// Create objects from the child classes
$dog = new Dog("KiKi");
echo "Dog say: " . $dog->makeSound();

$cat = new Cat("MiMi");
echo "Cat say: " . $cat->makeSound();
