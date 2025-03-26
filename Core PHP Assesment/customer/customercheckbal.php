<?php
include("../connection.php");
if (isset($_POST['checkbtn'])) {
    $customeraccountno = $_POST['cnum'];

 
    $sele = "select caccount_number,CONCAT(FORMAT(customer_balance,0,'en_IN')) from customer where caccount_number = '$customeraccountno'";
    $run = mysqli_query($con, $sele);
    // echo $run;exit();
    $fetchcamount = mysqli_fetch_assoc($run);
    if ($fetchcamount) {
        echo "<script>
                alert('Account Number Match Successfully');
              </script>";
    } else if(!$fetchcamount)  {
        echo "<script>
        alert('Account Number Does Note Match');
        window.location.href='customermain.php'
      </script>";
    }
}
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
        <div class="row justify-content-center">
            <div class="col justify-content-center">
                <a href="customermain.php" class="btn btn-secondary">Back</a>
                <h1 class="my-5" style="margin-left: 26.5vw;">Customer Amount Details</h1>
                <div class="card" style="width: 30rem;margin: auto;">
                <div class="card-body"> <h5 class="card-title"><u>Customer Account Number</u> :- <?php echo $fetchcamount["caccount_number"] ?></h5>
                </div>
                    <div class="card-body"> <h5 class="card-title"><u>Total Bank Amount</u> :- <?php echo $fetchcamount["CONCAT(FORMAT(customer_balance,0,'en_IN'))"] ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>