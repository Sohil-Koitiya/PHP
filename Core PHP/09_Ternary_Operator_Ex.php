<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="age">Enter Your Age : </label>
            <input type="text" name="age" >
        </div>
        <div>
            
            <input type="submit" name="submit" >
        </div>
    </form>

    <?php
        if(isset($_REQUEST['submit']) && isset($_REQUEST['age']))
        {
            $age = $_REQUEST['age'];

            $message = $age>=18?'Age is greater than 18':'Age is less than 18';

            echo $message;
        }
    ?>
</body>
</html>