<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h2>Select Color</h2>
        <select name="color" id="">
            <option value="" hidden>Select color</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
        </select>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_REQUEST['submit']) && isset($_REQUEST['color']))
        {
            $color = $_REQUEST['color'];

            if($color=='red')
            {
                echo 'Color is Red';
            }
            elseif($color=='blue')
            {
                echo 'Color is Blue';
            }
            elseif($color=='green')
            {
                echo 'Color is Green';
            }
            elseif($color=='yellow')
            {
                echo 'Color is Yellow';
            }
        }
    ?>
</body>
</html>