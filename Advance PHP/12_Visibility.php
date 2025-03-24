<?php


class visibility
{
    public function fun1()
    {
        echo 'Public Function'.'<br>';
    }

    public static function fun2()
    {
        echo 'Public Static Function'.'<br>';
    }

    private function fun3()
    {
        echo 'Private Function'.'<br>';
    }

    private static function fun4()
    {
        echo 'Private Static Function'.'<br>';
    }

    protected function fun5()
    {
        echo 'Protected Function'.'<br>';
    }

    protected static function fun6()
    {
        echo 'Protected Static Function'.'<br>';
    }

    public function accessFunction()
    {
        // $this->fun3();
        // $this->fun4();
        // $this->fun5();
        // $this->fun6();

        visibility::fun3();
        visibility::fun5();
        
        visibility::fun4();
        visibility::fun6();
    }
}


$obj = new visibility();

$obj->fun1();
// $obj->fun2();
visibility::fun2();
$obj->accessFunction();
// $obj->fun3();
// $obj->fun4();
// $obj->fun5();
// $obj->fun6();



?>