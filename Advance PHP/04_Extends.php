<?php

class A
{
    public function A()
    {
        echo 'Hello';
    }
}

class B extends A
{
    public function B()
    {
        echo 'Hi'."<br>";
        $this->A();
    }
}

$obj = new B();
$obj->B();


?>