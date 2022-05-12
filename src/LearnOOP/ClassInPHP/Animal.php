<?php

namespace Tlait\UnlockOOPinPHP\LearnOOP\ClassInPHP;

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return array
     */
    function getInformation(): array
    {
        return [$this->name, $this->color, $this->color];
    }
}
