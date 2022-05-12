<?php

namespace Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass;

use Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass\Cat;
use Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass\Dog;

class ShowAnimal
{

    public function show($animal)
    {
        echo "Name: " . $animal->name . ", Sex: " . $animal->sex . ", Food: " . $animal->food;
    }
}
