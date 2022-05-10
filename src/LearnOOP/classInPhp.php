<?php

class Animal
{
    // Properties
    public $type;
    public $name;
    public $color;

    //Methods
    function setName($name)
    {
        $this->name = $name;
    }

    function setType($type)
    {
        $this->type = $type;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getInformation()
    {
        echo "He is " . $this->name . ", a " . $this->color . " " . $this->type;
        echo "<br>";
    }
}

/*
 *Object dog
 */
$dog = new Animal();
$dog->setName("KiKi");
$dog->setType("Dog");
$dog->setColor("black");
$dog->getInformation();
/*
 *Object dog
 */
$cat = new Animal();
$cat->setName("MiMi");
$cat->setType("Cat");
$cat->setColor("gray");
$cat->getInformation();
