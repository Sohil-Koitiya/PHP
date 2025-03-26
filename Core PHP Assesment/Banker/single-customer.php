<?php
include('../connection.php');
$singlcid = $_GET['singlcid'];
$sel_where = "select * from customer where customer_id= '$singlcid'";
$run = mysqli_query($con,$sel_where);


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
    <link rel="stylesheet" href="fontawesome-free-6.1.0-web/css/all.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col justify-content-center">
                <a href="all-customer.php" class="btn btn-secondary">Back</a>
                <h1 class="my-5" style="margin-left: 32vw;">Customer Details</h1>
                <div class="card" style="width: 30rem;margin: auto;">
                <?php
            while($Customer = mysqli_fetch_array($run))
            {
                ?>
                    <div class="card-body"> <h5 class="card-title"><u>Customer Account Number</u> :- <?php echo $Customer['caccount_number'] ?></h5>
                            <p class="card-text"><b><u>Customer Name </u>:- <?php echo $Customer['customer_name'] ?></b></p>
                            <p class="card-text"><b><u>Customer Total Balance</u> :- <?php echo $Customer['customer_balance'] ?></b></p>
                           
                    
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>