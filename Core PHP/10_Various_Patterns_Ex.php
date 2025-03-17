<?php
//right angle * pattern
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo '* ';
    }
    echo '<br>';
}
?>
<?php
//right downangle * pattern
echo'<br><br>';
for($i=5;$i>=1;$i--)
{
    for($j=1;$j<=$i;$j++)
    {
        echo '* ';
    }
    echo '<br>';
}
?>
<?php
//Diamond * pattern
echo'<br><br>';
for($i=1;$i<5;$i++){
    for($j=$i;$j<5;$j++){
        echo "&nbsp&nbsp";
    }
    for($k=1;$k<=(2*$i-1);$k++){
        echo "* ";
    }
    echo "<br>";
}
for($i=4;$i>=1;$i--){
    for($j=$i;$j<5;$j++){
        echo "&nbsp&nbsp";
    }
    for($k=1;$k<=(2*$i-1);$k++){
        echo "* ";
    }
    echo "<br>";
}
?>