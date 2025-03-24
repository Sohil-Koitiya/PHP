<?php
//Display the value of array
$a = [1,2,3,4];
print_r($a)
?>
<?php
//find number of odd and even 
$numbers = [1,2,3,4,5,6,7,8,9,10];
$oddCount = 0;
$evenCount = 0;
for($i=0;$i<sizeof($numbers);$i++){
    if($numbers[$i]%2==0){
        $evenCount++;
    }else{
        $oddCount++;
    }
}
echo "<br>No of even elements: ".$evenCount;
echo "<br>No of odd elements: ".$oddCount;
?>
<?php
//Display associative array
$arr = ['name'=>'Vaibhav','age'=>35,'city'=>'Ahmedabd'];
echo "<br>Name: ".$arr['name']."<br>";
echo "Age: ".$arr['age']."<br>";
echo "City: ".$arr['city'];
?>
<?php
//Display all zeros to the bottom of array
$numbers = [4, 0, 2, 0, 3, 5, 0, 1, 6, 0];
$zeroElement = [];
$nonZeroElement = [];
foreach($numbers as $num){
    if($num==0){
        $zeroElement[] = $num;
    }else{
        $nonZeroElement[] = $num;
    }
}
echo "<br>";
$outputArr = array_merge($nonZeroElement,$zeroElement);
print_r($outputArr);
?>