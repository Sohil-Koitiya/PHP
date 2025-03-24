<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post" action="">
        <label for="num1">First Number:</label>
        <input type="number" step="any" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Second Number:</label>
        <input type="number" step="any" id="num2" name="num2" required>
        <br><br>
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    // Define functions for the operations
    function add($a, $b) {
        return $a + $b;
    }

    function subtract($a, $b) {
        return $a - $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function divide($a, $b) {
        if ($b == 0) {
            return "Error: Division by zero is not allowed.";
        }
        return $a / $b;
    }

    // Process form submission
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Perform the selected operation
        switch ($operation) {
            case "add":
                $result = add($num1, $num2);
                break;
            case "subtract":
                $result = subtract($num1, $num2);
                break;
            case "multiply":
                $result = multiply($num1, $num2);
                break;
            case "divide":
                $result = divide($num1, $num2);
                break;
            default:
                $result = "Invalid operation selected.";
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>