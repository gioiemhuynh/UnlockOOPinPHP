<?php

namespace Tlait\UnlockOOPinPHP\Test\ClassInPHP;

use PHPUnit\Framework\TestCase;
use Tlait\UnlockOOPinPHP\ClassInPHP\Animal;

class AnimalTest extends TestCase
{
    /**
     * @dataProvider getInfoProvider
     */
    public function testGetInfo(array $params, string $expected): void
    {
        $animal = new Animal();
        $animal->setType($params['Type']);
        $animal->setColor($params['Color']);
        $animal->setName($params['Name']);
        $this->assertEquals($expected, $animal->getInfo());
    }

    public function getInfoProvider(): array
    {
        $name1 = "MiMi";
        $color1 = "Gray";
        $type1 = "Cat";

        $name2 = "NaNa";
        $color2 = "Black";
        $type2 = "Cat";

        $name3 = "KiKi";
        $color3 = "Gray";
        $type3 = "Dog";
        return [
            [
                'params' => [
                    'Name' => $name1,
                    'Color' => $color1,
                    'Type' => $type1,
                ],
                'expected' => "This is a " . $color1 . " " . $type1 . ". Its name is " . $name1
            ],
            [
                'params' => [
                    'Name' => $name1,
                    'Color' => $color1,
                    'Type' => $type1,
                ],
                'expected' => "This is a " . $color1 . " " . $type1 . ". Its name is " . $name1
            ],
        ];
    }
}
