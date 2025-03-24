<?php

class A
{
    public function __construct()
    {
        echo 'Hello'.'<br>';
    }

    public function __destruct()
    {
        echo "Sohil ". __CLASS__ . " hi";
    }

}

$obj = new A();

?>