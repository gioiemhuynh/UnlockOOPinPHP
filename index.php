<?php
require_once "vendor/autoload.php";

use Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass\ShowAnimal as ShowAnimalAb;
use Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass\Cat as CatAb;
use Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass\Dog as DogAb;

echo "Example about abstract class";
$catUseAbstract = new CatAb("MiMi", "female", "pate");
$dogUseAbstract = new DogAb("KiKi", "male", "rice");
$showAnimal = new ShowAnimalAb();
$showAnimal->show($catUseAbstract);
echo "<br>";
$showAnimal->show($dogUseAbstract);
echo "<br>";

echo "Example about class";
