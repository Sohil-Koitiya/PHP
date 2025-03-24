<?php
class BaseClass {
   public function test() {
       echo "BaseClass::test() called\n".'<br>';
   }
   
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called\n".'<br>';
   }
}

class ChildClass extends BaseClass {
     public function moreTesting() {
       echo "ChildClass::moreTesting() called\n".'<br>';
   }
}
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()

$obj = new BaseClass();
$obj->test();
$obj->moreTesting();
$obj1 = new ChildClass();
$obj1->moreTesting();
?>