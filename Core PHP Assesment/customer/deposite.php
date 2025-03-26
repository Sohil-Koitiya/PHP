<?php
include("../connection.php");
if (isset($_POST['Depositebtn'])) {
    $customeraccountno = $_POST['cnum'];
    $customerdepositeamt = $_POST['cdepositeamt'];

    $sele = "select * from customer where caccount_number = '$customeraccountno'";
    $run = mysqli_query($con, $sele);
    // echo $run;exit();
    $fetch = mysqli_fetch_assoc($run);
     $dbamount = $fetch['customer_balance'];
    $depositeamount = $dbamount+$customerdepositeamt;
    // echo $depositeamount;exit();
    $inswamt = "update customer set customer_balance='$depositeamount' where caccount_number='$customeraccountno'";
    $run = mysqli_query($con, $inswamt);
    if ($run) {
        echo "<script>
                alert('Amount Deposite Successfully');
                window.location.href='customermain.php'
              </script>";
    } else if(!$run) {
        echo "<script>
        alert('Account Number Does Note Match');
        window.location.href='add-customer.php'
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
        <a href="customermain.php" class="btn btn-secondary">Back</a>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div>
                    <h1>Deposite Amount</h1>
                </div>
                <form method="post">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Customer Account Number</label>
                        <input type="text" name="cnum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter Deposite Amount</label>
                        <input type="text" name="cdepositeamt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" name="Depositebtn" class="btn btn-primary">Deposite Amount</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>