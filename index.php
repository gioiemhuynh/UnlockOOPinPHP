<?php
require_once "vendor/autoload.php";

use Tlait\UnlockOOPinPHP\ClassInPHP\Animal;

use Tlait\UnlockOOPinPHP\ClassWithConstructor\Animal as AnimalWithConstructor;

use Tlait\UnlockOOPinPHP\AbstractClass\Cat as CatAb;
use Tlait\UnlockOOPinPHP\AbstractClass\Dog as DogAb;
use Tlait\UnlockOOPinPHP\AbstractClass\ShowAnimal as ShowAnimalAb;

use Tlait\UnlockOOPinPHP\InterfaceInPHP\Cat;
use Tlait\UnlockOOPinPHP\InterfaceInPHP\Dog;
use Tlait\UnlockOOPinPHP\Traits\PersionSay;


echo "Example about class:";
echo "<br>";
$cat = new Animal();
$cat->setType("Cat");
$cat->setColor("Gray");
$cat->setName("MiMi");
echo $cat->getInfo();
echo "<br>";
echo "<br>";

echo "Example about class with constructor:";
echo "<br>";
$cat = new AnimalWithConstructor("Cat", "MiMi", "Gray");
echo $cat->getInfo();
echo "<br>";
echo "<br>";

echo "Example about abstract class:";
echo "<br>";
$catUseAbstract = new CatAb("MiMi", "female", "pate");
$dogUseAbstract = new DogAb("KiKi", "male", "rice");
$showAnimal = new ShowAnimalAb();

$showAnimal->show($catUseAbstract);
echo "<br>";
$showAnimal->show($dogUseAbstract);
echo "<br>";
echo "<br>";

echo "Example about interface:";
echo "<br>";
$cat = new Cat();
$dog = new Dog();
echo "Cat say: ".$cat->makeSound();
echo "<br>";
echo "Dog say: ".$dog->makeSound();
echo "<br>";
echo "<br>";

echo "Example about traits:";
echo "<br>";
$persion1 = new PersionSay();
echo $persion1->sayHello().". ";
echo $persion1->sayWelcome();
echo "<br>";
