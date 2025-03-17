<?php
echo "<table border='2' style='border-collapse: collapse;'>";

for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    
    for ($col = 0; $col < 8; $col++) {
        // Use modulus to alternate between colors
        $color = ($row + $col) % 2 == 0 ? "white" : "black";
        
        // Create a cell with the specified color
        echo "<td style='width: 50px; height: 50px; background-color: $color;'></td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>