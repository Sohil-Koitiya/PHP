<?php
include 'header.php';
?>

<div class="main-panel">
    <div class="content-wrapper">

        <!-- Quick Action Toolbar Starts-->

        <!-- Quick Action Toolbar Ends-->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Manage Users</h4>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Category Name</th>
                                        <th class="font-weight-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($arr as $cate)
                                        {
                                            ?>
                                            <tr>
                                        <td><?php echo $cate->cate_name ?></td>
                                        
                                        <td>
                                            <button class="btn btn-success"
                                            <?php
                                            // echo $fetch;exit; 
                                            ?>
                                            ><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                                            <button class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->
    <?php
    include 'footer.php';
    ?>