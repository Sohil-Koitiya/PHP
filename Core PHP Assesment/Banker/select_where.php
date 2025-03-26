<?php
include ('../connection.php');

if (isset($_POST['searchbtn'])) {
    $searchname = $_POST['searchname'];
    
    // $selectwhere = "select * from customer where customer_name = '$searchname'";
    $selectwhere = "select * from customer where customer_name like '%$searchname%'";
        // $sql = "update customer set customer_name='$editcustname', caccount_number='$editbanknum', customer_balance='$editopenbal' where customer_id='$editcid'";
  
        
    $run = mysqli_query($con, $selectwhere);
    $fetchsearch = mysqli_fetch_array($run);
    // echo $fetchsearch;exit(); 
    
    if ($run) {
        echo "<script>
                window.location.href='searcheach-customer.php'
              </script>";
    }
    else if(!$run) {
        echo "<script>
        alert('Something Wents Wrong');
        window.location.href='edit-customer.php'
      </script>";
    }

}
?>