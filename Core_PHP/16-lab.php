<?php
$string1= "Hello";
$string2= "World";
echo "<br>String1=".$string1;
echo "<br>String2=".$string2;
$concatedString = $string1.' '.$string2;
echo "<br>Concated String :".$concatedString;
$subString = substr($concatedString,0,5);
echo "<br>Substring is:".$subString;
$strLength = strlen($concatedString);
echo "<br>String Length: ".$strLength;
?>