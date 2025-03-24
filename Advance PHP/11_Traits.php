<?php

trait TraitA
{
    public function SayHello()
    {
        echo "Hello";
    }
}

trait TraitB
{
    public function SayWorld()
    {
        echo " World...!";
    }
}

class HelloWorld
{
    use TraitA, TraitB;

    public function sayHelloWorld()
    {
        $this->SayHello();
        $this->SayWorld();
    }
}

$obj = new HelloWorld();

$obj->sayHelloWorld();



?>