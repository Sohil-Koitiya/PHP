<?php
// include("controller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Sysytem</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/all.min.css">
</head>

<body>
    <div class="container my-5">
    <a href="../index.php" class="btn btn-secondary">Back</a>
        <div class="row justify-content-center">
            <div class="col-xl-6">

                <table class="table my-5">

                    <h1 class="my-5" style="margin-left: 6vw;">Welcome Customer</h1>

                    <tbody>

                        <tr>
                            <td>
                            <a href="withdraw.php" class="btn btn-outline-primary col-12">Withdraw Amount</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="deposite.php" class="btn btn-outline-warning col-12">Deposite Amount</a></td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <a href="customerbalance.php" class="btn btn-outline-success col-12">View Balance</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>