<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "Name : $name";
        echo "Email : $email";
    }
    
    ?>
    <form method="POST">
        <table>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>