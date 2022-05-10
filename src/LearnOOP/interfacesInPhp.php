<?php

interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meo Meo <br>";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Gau Gau <br>";
    }
}

$cat = new Cat();
$cat->makeSound();

$dog = new Dog();
$dog->makeSound();
