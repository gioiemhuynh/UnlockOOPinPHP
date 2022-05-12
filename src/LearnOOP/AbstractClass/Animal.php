<?php
/**
 * Animal File Doc Comment
 *
 * PHP version 8.1
 *
 * @category AbstClassClass
 * @package  AbstClassClass
 * @author   Author <em.huynh@nfq.asia>
 * @link     http://localhost
 */

namespace Tlait\UnlockOOPinPHP\LearnOOP\AbstractClass;

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
     * @param bool $sex
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
