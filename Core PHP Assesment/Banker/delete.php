<?php
include('../connection.php');

$delcid = $_GET['delcid'];
// echo $vid;
$del = "delete from customer where customer_id = '$delcid'";
$run = mysqli_query($con,$del);
if ($run) {
    echo "<script>
            alert('Customer Deleted Successfully');
            window.location.href='all-customer.php'
          </script>";
}
else if (!$run) {
    echo "<script>
    alert('Something Wents Wrong');
    window.location.href='all-customer.php'
  </script>";
}




?>