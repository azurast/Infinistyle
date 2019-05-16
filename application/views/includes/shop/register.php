<!-- Header -->
<div class="header bg-gradient-info py-7 py-lg-8">
  <div class="container">
    <div class="header-body text-center mb-7">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
          <h1 class="text-white">Welcome!</h1>
          <p class="text-lead text-light">Come join us today!</p>
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
  <!-- Table -->
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card bg-secondary shadow border-0">
        <div class="card-header bg-transparent">
          <div class="text-muted text-center mt-2 mb-2"><strong>Sign Up</strong></div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
        <?php echo form_open('user/register/register_validation'); ?>
          <form role="form">
            <div class="form-group">
              <div class="input-group input-group-alternative mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                </div>
                <input class="form-control" placeholder="Full Name" type="text" name="fullName">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                </div>
                <input class="form-control" placeholder="Username" type="text" name="username">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-badge"></i></span>
                </div>
                <input class="form-control" placeholder="Phone Number" type="text" name="phoneNo">
              </div>
            </div>
            <div class="form-group">
                <textarea class="form-control form-control-alternative" rows="3" placeholder="Address" name="address"></textarea>
            </div>
              <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="customCheckRegister" type="checkbox" name="policy" required>
                  <label class="custom-control-label" for="customCheckRegister">
                    <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="text-center mb-5">
              <input type="submit" class="btn btn-primary mt-4" value="Create account"/>
            </div>
          </form>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
