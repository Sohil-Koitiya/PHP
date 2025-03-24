<?php 
  
  class cls{ 
      public $sentence="Hi welcome to php world"; 
  } 
  
  function display(cls $var1){ 
      echo $var1->sentence; 
  } 
  
  display(new cls()); 
?>