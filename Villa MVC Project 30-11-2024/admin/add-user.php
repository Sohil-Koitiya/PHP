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
                            <h4 class="card-title mb-sm-0">Add Users</h4>                           
                        </div>
                        <div class=" border rounded p-1">
                            <form id="" method="post" enctype="multipart/form-data">
                                <div class="row m-5">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="name">Full Name</label>
                                            <input type="name" class="form-control" name="name" id="name"
                                                placeholder="Your Name..." autocomplete="on">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="email">Email Address</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                pattern="[^ @]*@[^ @]*" placeholder="Your E-mail...">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Your password...">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12 my-3">
                                        <h5>Gender</h5>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio1" name="gender"
                                                value="male"> Male
                                            <label class="form-check-label" for="radio1"></label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio2" name="gender"
                                                value="female"> Female
                                            <label class="form-check-label" for="radio2"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Languages</h5>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="chk[]" type="checkbox"
                                                id="inlineCheckbox1" value="Gujarati">
                                            <label class="form-check-label" for="inlineCheckbox1">Gujarati</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="chk[]" type="checkbox"
                                                id="inlineCheckbox2" value="Hindi">
                                            <label class="form-check-label" for="inlineCheckbox2">Hindi</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="chk[]" type="checkbox"
                                                id="inlineCheckbox2" value="English">
                                            <label class="form-check-label" for="inlineCheckbox2">English</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="chk[]" type="checkbox"
                                                id="inlineCheckbox2" value="Marathi">
                                            <label class="form-check-label" for="inlineCheckbox2">Marathi</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Choose file</label>
                                            <input class="form-control" name="file" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input type="submit" name="submit">
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