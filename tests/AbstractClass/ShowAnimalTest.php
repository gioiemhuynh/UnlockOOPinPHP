<?php
declare(strict_types=1);

namespace Tlait\UnlockOOPinPHP\Test\AbstractClass;

use PHPUnit\Framework\TestCase;
use Tlait\UnlockOOPinPHP\AbstractClass\Cat;
use Tlait\UnlockOOPinPHP\AbstractClass\Dog;
use Tlait\UnlockOOPinPHP\AbstractClass\ShowAnimal;

class ShowAnimalTest extends TestCase
{
    /**
     * @param $param
     * @param $expected
     * @return void
     */
    public function testShow($param, $expected)
    {
        $showAnimal = new ShowAnimal();
        $result = $showAnimal->show($param);
        $this->assertEquals($expected, $result);
    }

    public function showDataProvider(): array
    {
        $animal1 = new Cat("MiMi", "female", "pate");
        $result1 = "Name: " . $animal1->name . ", Sex: " . $animal1->sex . ", Food: " . $animal1->food;
        $animal2 = new Cat("KaKa", "male", "pate");
        $result2 = "Name: " . $animal2->name . ", Sex: " . $animal2->sex . ", Food: " . $animal2->food;
        $animal3 = new Cat("Sakasi", "female", "fish");
        $result3 = "Name: " . $animal3->name . ", Sex: " . $animal3->sex . ", Food: " . $animal3->food;
        return [
            "case1" => [
                'params' => $animal1,
                'expected' => $result1
            ],
            "case2" => [
                'params' => $animal2,
                'expected' => $result2
            ],
            "case3" => [
                'params' => $animal3,
                'expected' => $result3
            ],
        ];
    }
}
