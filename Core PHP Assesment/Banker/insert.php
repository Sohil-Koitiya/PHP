<?php
include ('../connection.php');


if(isset($_POST['inscust']))
{
    $customername = $_POST['cname'];
    $account_num = $_POST['cbanknum'];
    $opening_bal = $_POST['copenbal'];
    
    $ins = "insert into customer (customer_name,caccount_number,customer_balance) values ('$customername','$account_num','$opening_bal')";
    $run = mysqli_query($con,$ins);
    if($run)
    {
        echo "<script>
                alert('Customer Add Successfully');
                window.location.href='bankermain.php'
              </script>";
    }
    else if(!$run)
    {
        echo "<script>
        alert('Something Wents Wrong');
        window.location.href='add-customer.php'
      </script>";
    }

}





?>