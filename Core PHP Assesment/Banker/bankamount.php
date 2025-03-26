<?php 
include("../connection.php");
$sele = "select CONCAT(FORMAT(SUM(customer_balance),0,'en_IN')) from customer;";

$run = mysqli_query($con, $sele);

$amountfetch = mysqli_fetch_assoc($run);
// var_dump($amountfetch) ;exit();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../fontawesome-free-6.1.0-web/css/all.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col justify-content-center">
                <a href="bankermain.php" class="btn btn-secondary">Back</a>
                <h1 class="my-5" style="margin-left: 26.5vw;">Bank Total Amount Details</h1>
                <div class="card" style="width: 30rem;margin: auto;">
                    <div class="card-body"> <h5 class="card-title"><u>Total Bank Amount</u> :- <?php echo $amountfetch["CONCAT(FORMAT(SUM(customer_balance),0,'en_IN'))"] ?></h5>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>