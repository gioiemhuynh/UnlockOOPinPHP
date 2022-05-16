<?php

namespace Tlait\UnlockOOPinPHP\AbstractClass;

abstract class Animal
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var bool
     */
    public string $sex;
    /**
     * @var string
     */
    public string $food;


    /**
     * @param string $name
     * @param string $sex
     * @param string $food
     */
    public function __construct(string $name, string $sex, string $food)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->food = $food;
    }

    /**
     * @return string
     */
    abstract public function makeSound(): string;
}
