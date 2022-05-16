<?php

namespace Tlait\UnlockOOPinPHP\AbstractClass;

class ShowAnimal
{
    /**
     * @param $animal
     * @return void
     */
    public function show($animal): string
    {
        return "Name: " . $animal->name . ", Sex: " . $animal->sex . ", Food: " . $animal->food;
    }
}
