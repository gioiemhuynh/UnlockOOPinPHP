<?php

class Animal
{
    // Properties
    public $type;
    public $name;
    public $color;

    //Constructor function
    public function __construct($name, $type, $color)
    {
        $this->name = $name;
        $this->type = $type;
        $this->color = $color;
    }

    //Methods

    function getInformation()
    {
        echo "He is " . $this->name . ", a " . $this->color . " " . $this->type;
        echo "<br>";
    }
}

/*
 *Object dog
 */
$dog = new Animal("KiKi", "Dog", "black");
$dog->getInformation();
/*
 *Object dog
 */
$cat = new Animal("MiMi", "Cat", "gray");
$cat->getInformation();
