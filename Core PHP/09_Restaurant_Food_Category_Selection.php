<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h1>Restaurant Food Category Selection</h1>
        <select name="foodcategory" id="">
            <option value="" hidden>Select Food Category</option>
            <option value="starter">Starter</option>
            <option value="maincourse">Main Course</option>
            <option value="dessert">Dessert</option>
        </select>
        <input type="submit" name="submit">
        <br>
    </form>

    <?php
    if (isset($_REQUEST['submit']) && isset($_REQUEST['foodcategory'])) {
        $foodcate = $_REQUEST['foodcategory'];

        switch ($foodcate) {
            case 'starter':
                echo 'Starter : Spring Roll, Chiness Samosa';
                break;
            case 'maincourse':
                echo 'Main Course : Panner Kadai, Panner Angara, Panner Handi, Panner Special';
                break;
            case 'dessert':
                echo 'Dessert : American Dry Fruits, Casata, Chocolate';
                break;
            default: echo 'No case Found';
        }
    }
    ?>
</body>

</html>