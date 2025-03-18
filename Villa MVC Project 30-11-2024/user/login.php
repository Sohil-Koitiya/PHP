<?php

include 'header.php';

?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  Login</span>
          <h3>Login</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." class="form-control" 
                  value="<?php if(isset($_COOKIE['email']))
                        {
                            echo $_COOKIE['email'];
                        } ?>">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Password</label>
                  <input type="password" name="password" id="password" placeholder="Your Password..." class="form-control"
                  value="<?php
                   if(isset($_COOKIE['password']))
                   {
                    echo $_COOKIE['password'];
                   }
                  ?>"
                  >
                </fieldset>
              </div>
              <div class="col-lg-12 my-3">
                <fieldset>
                  <input type="checkbox" name="remember">
                  <label for="">Remember me</label>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="login" id="form-submit" class="orange-button">Login</button>
                </fieldset>
              </div>
              <div class="col-lg-12 my-3">
                <fieldset>
                  <a href="forgot">Forgot Password</a>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

<?php

include 'footer.php';

?>