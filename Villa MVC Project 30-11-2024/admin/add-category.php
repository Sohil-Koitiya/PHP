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
                            <h4 class="card-title mb-sm-0">Add Category</h4>                           
                        </div>
                        <div class=" border rounded p-1">
                            <form id="" method="post" enctype="multipart/form-data">
                                <div class="row m-5">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="name">Category Name</label>
                                            <input type="name" class="form-control my-2" name="name" id="name"
                                                placeholder="Category Name..." autocomplete="on">
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input type="submit" name="submit" class="btn btn-success my-3">
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
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