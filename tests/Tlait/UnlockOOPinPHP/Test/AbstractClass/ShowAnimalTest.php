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
     * @dataProvider showProvider
     */
    public function testShow(array $params, string $expected): void
    {
        $animal = new Cat($params['Name'], $params['Sex'], $params['Food']);
        $showAnimal = new ShowAnimal();
        $this->assertEquals($expected, $showAnimal->show($animal));
    }

    public function showProvider(): array
    {
        $name1 = "MiMi";
        $sex1 = "female";
        $food1 = "pate";

        $name2 = "KaKa";
        $sex2 = "male";
        $food2 = "fish";

        $name3 = "MiMi";
        $sex3 = "male";
        $food3 = "pate";
        return [
            [
                'params' => [
                    'Name' => $name1,
                    'Sex' => $sex1,
                    'Food' => $food1,
                ],
                'expected' => "Name: " . $name1 . ", Sex: " . $sex1 . ", Food: " . $food1
            ],
            [
                'params' => [
                    'Name' => $name2,
                    'Sex' => $sex2,
                    'Food' => $food2,
                ],
                'expected' => "Name: " . $name2 . ", Sex: " . $sex2 . ", Food: " . $food2
            ],
            [
                'params' => [
                    'Name' => $name3,
                    'Sex' => $sex3,
                    'Food' => $food3,
                ],
                'expected' => "Name: " . $name3 . ", Sex: " . $sex3 . ", Food: " . $food3
            ]
        ];
    }
}
