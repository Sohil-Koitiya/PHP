<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate name
    $name = test_input($_POST["name"]);
    $nameErr = "";
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
    
    // Sanitize and validate email
    $email = test_input($_POST["email"]);
    $emailErr = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    
    // ... Additional validation checks ...
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="validate.php">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>