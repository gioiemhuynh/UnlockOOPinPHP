<?php

trait Hello
{
    public function sayHello()
    {
        echo "Hello! ";
    }
}

trait Wellcome
{
    public function sayWellcome()
    {
        echo "Nice to meet you!";
    }
}

class Persion1Say
{
    use Hello;
}

class Persion2Say
{
    use Hello, Wellcome;
}

$per1 = new Persion1Say();
$per1->sayHello();
echo "<br>";

$per2 = new Persion2Say();
$per2->sayHello();
$per2->sayWellcome();
