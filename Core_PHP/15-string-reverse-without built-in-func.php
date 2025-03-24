<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
</head>
<body>
    <h2>Reverse a String Without Built-in Functions</h2>
    <form method="post" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <br><br>
        <input type="submit" name="submit" value="Reverse String">
    </form>

    <?php
    // Function to reverse a string without using built-in functions
    function reverseString($str) {
        $reversed = '';
        $length = 0;

        // Calculate the length of the string
        while (isset($str[$length])) {
            $length++;
        }

        // Construct the reversed string
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }

        return $reversed;
    }

    // Process form submission
    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];
        $reversedString = reverseString($inputString);
        echo "<h3>Original String: $inputString</h3>";
        echo "<h3>Reversed String: $reversedString</h3>";
    }
    ?>
</body>
</html>