<?php
include("update.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/all.min.css">
</head>

<body>
    <div class="container my-5">
        <a href="bankermain.php" class="btn btn-secondary">Back</a>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div>
                    <h1>Edit Coustomer</h1>
                </div>
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Edit Customer Name</label>
                        <input type="text" name="ceditname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $editfetch['customer_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Edit Bank Account Nubmer</label>
                        <input type="text" name="ceditbanknum" class="form-control" id="exampleInputPassword1"  value="<?php echo $editfetch['caccount_number'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Edit Customer balance</label>
                        <input type="text" name="ceditopenbal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo $editfetch['customer_balance'] ?>">
                    </div>
                    
                    <button type="submit" name="updatecust" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>