<?php
include("../connection.php");
if (isset($_POST['searchbtn'])) {
  $searchname = $_POST['searchname'];
  
  // $selectwhere = "select * from customer where customer_name = '$searchname'";
  $selectwhere = "select * from customer where customer_name like '%$searchname%'";
      
  $run = mysqli_query($con, $selectwhere);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../fontawesome-free-6.1.0-web/css/all.min.css">
</head>
<body>
    <div class="container my-5">
    <a href="bankermain.php" class="btn btn-secondary">Back</a>
        <div class="row justify-content-center">
            <div class="col-xl-6">
            <table class="table">
            <h1 class="my-5" style="margin-left: 5vw;">Search customer Details</h1>
  <thead>
    <tr>
      <th scope="col">Customer Account Number</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Total Balance</th>
    </tr>
  </thead>
  <tbody>
  <?php
            while($fetchsearch = mysqli_fetch_array($run))
            {
                ?>
    <tr>
      <th scope="row"><?php echo $fetchsearch['caccount_number'] ?></th>
      <td scope="row"><?php echo $fetchsearch['customer_name'] ?></td>
      <td scope="row"><?php echo $fetchsearch['customer_balance'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
            </div>
        </div>
    </div>
    
</body>
</html>