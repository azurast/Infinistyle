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
        <!--FORM-->
          <?php echo form_open('user/login/login_validation'); ?>
          <form role="form">
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" placeholder="Username" type="text" name="username" id="username">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" placeholder="********" type="password" name="password" id="password">
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
        <div class="col-12 text-right">
          <a href="<?php echo base_url('user/register') ?>" class="text-light"><small>or create a new account</small></a>
        </div>
      </div>
    </div>
  </div>
</div>
