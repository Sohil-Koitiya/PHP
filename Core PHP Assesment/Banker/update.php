<?php
include ('../connection.php');
$editcid = $_GET['editcid'];
// echo $vid;
$sele = "select * from customer where customer_id = '$editcid'";
$run = mysqli_query($con, $sele);
$editfetch = mysqli_fetch_array($run);

if (isset($_POST['updatecust'])) {
    $editcustname = $_POST['ceditname'];
    $editbanknum = $_POST['ceditbanknum'];
    $editopenbal = $_POST['ceditopenbal'];

        $sql = "update customer set customer_name='$editcustname', caccount_number='$editbanknum', customer_balance='$editopenbal' where customer_id='$editcid'";
  

    $run = mysqli_query($con, $sql);
    if ($run) {
        echo "<script>
                alert('Customer Update Successfully');
                window.location.href='all-customer.php'
              </script>";
    }
    else if (!$run){
        echo "<script>
        alert('Something Wents Wrong');
        window.location.href='edit-customer.php'
      </script>";
    }

}
?>