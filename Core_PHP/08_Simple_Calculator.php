<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.label
        {
            display: block;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Simple Calculator</h2>
        <div>
            <label for="num1">Number1 : </label>
            <input type="text" name="num1">
        </div>
        <div>
            <label for="num2">Number2 : </label>
            <input type="text" name="num2">
        </div>
        <input type="submit" name="operator" value="+" >
        <input type="submit" name="operator" value="-" >
        <input type="submit" name="operator" value="*" >
        <input type="submit" name="operator" value="/" >
    </form>
    <?php
        if(isset($_REQUEST['operator']))
        {
            $num1 = $_REQUEST['num1'];
            $num2 = $_REQUEST['num2'];
            $op = $_REQUEST['operator'];

            echo '<br><br>';
            if($op=='+')
            {
                $result = $num1 + $num2;
                echo "Result : $result";
            }
            elseif($op=='-')
            {
                $result = $num1 - $num2;
                echo "Result : $result";
            }
            elseif($op=='*')
            {
                $result = $num1 * $num2;
                echo "Result : $result";
            }
            elseif($op=='/')
            {
                $result = $num1 / $num2;
                echo "Result : $result";
            }
        }
    ?>
</body>
</html>