<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label
        {
            display: block;
        }
    </style>
</head>
<body>
    <form method="POST">
        <div>
            <label for="no">Enter Your Number : </label>
            <input type="text" name="no" >
        </div>
        <div>
            
            <input type="submit" name="submit" >
        </div>
    </form>
    <?php
        if(isset($_REQUEST['submit']))
        {
            $num = $_REQUEST['no'];

            if(($num%2)==0)
            {
                echo "<br>Number is Even";
            }
            else
            {
                echo '<br>Number is Odd';
            }
        }
    ?>
</body>
</html>