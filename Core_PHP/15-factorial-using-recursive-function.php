<?php
    $no = 5;
    function factorial($n){
        if($n<=1){
            return 1;
        }
      return  $n= $n * factorial($n-1);
    }
    echo "Factorial of 5 = ".factorial($no);
?>