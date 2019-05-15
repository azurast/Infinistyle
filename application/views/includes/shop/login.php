<!-- Header -->
<div class="header bg-gradient-info py-7 py-lg-8">
  <div class="container">
    <div class="header-body text-center mb-7">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
          <h1 class="text-white">Welcome!</h1>
          <p class="text-lead text-light">Let's go back to your account</p>
        </div>
      </div>
    </div>
  </div>
  <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</div>
<!-- Page content -->
<div class="container mt--8 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary shadow border-0">
        <div class="card-header bg-transparent">
          <div class="text-muted text-center mt-2 mb-2"><strong>Sign In</strong></div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
<<<<<<< HEAD:application/views/includes/shop/login.php
        <!--FORM-->
=======
          <?php echo form_open('user/login/login_validation'); ?>
>>>>>>> add login and regist ctrlr:application/views/includes/login.php
          <form role="form">
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
<<<<<<< HEAD:application/views/includes/shop/login.php
                <input class="form-control" placeholder="Username" type="text" name="username" id="username">
=======
                <input class="form-control" placeholder="Username" type="text" name="username">
>>>>>>> add login and regist ctrlr:application/views/includes/login.php
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
<<<<<<< HEAD:application/views/includes/shop/login.php
                <input class="form-control" placeholder="********" type="password" name="password" id="password">
=======
                <input class="form-control" placeholder="Password" type="password" name="password">
>>>>>>> add login and regist ctrlr:application/views/includes/login.php
              </div>
            </div>
            <div class="text-center">
              <input type="submit" class="btn btn-primary mt-4" value="Sign in"/>
            </div>
          </form>
          <?php echo form_close(); ?>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-6">
          <a href="#" class="text-light"><small>Forgot password?</small></a>
        </div>
        <div class="col-6 text-right">
          <a href="#" class="text-light"><small>Create new account</small></a>
        </div>
      </div>
    </div>
  </div>
</div>
