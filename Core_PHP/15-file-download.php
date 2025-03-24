<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File</title>
</head>
<body>
    <h2>Download File Example</h2>
    <p>Click the button below to download the file:</p>
    
    <?php
    // Specify the file path
    $file = '11-php-array-theory.txt'; // Replace with your file path
    
    // Check if the file exists
    if (file_exists($file)) {
        echo '<a href="' . $file . '" download>
                <button type="button">Download File</button>
              </a>';
    } else {
        echo "<p style='color: red;'>File not found.</p>";
    }
    ?>
</body>
</html>