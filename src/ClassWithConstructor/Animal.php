<?php

namespace Tlait\UnlockOOPinPHP\ClassWithConstructor;

class Animal
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $color;

    /**
     * @param string $type
     * @param string $name
     * @param string $color
     */
    public function __construct(string $type, string $name, string $color)
    {
        $this->type = $type;
        $this->name = $name;
        $this->color = $color;
    }

    public function getInfo(): string
    {
        return "This is a " . $this->color . " " . $this->type . ". Its name is " . $this->name;
    }

}
