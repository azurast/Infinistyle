<body class="bg-default g-sidenav-show g-sidenav-pinned" data-gr-c-s-loaded="true">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light bg-default">
        <!-- <div class="container"> -->
            <a class="navbar-brand" href="../pages/dashboards/dashboard.html">
                <img src="<?php echo base_url('argon\assets\img\logo\Logo.png'); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../../pages/dashboards/dashboard.html">
                                <img src="<?php echo site_url('argon\assets\img\logo\LogoTab.png')?>">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><span class="nav-link-inner--text text-success font-weight-bold"><?php echo "Hello, ".($this->session->userdata('logged_in_infinistyle')['username']);?></span></a></li>
                    <li class="nav-item"><a href="<?php echo site_url('customer/cart')?>" class="nav-link"><span class="nav-link-inner--text text-white font-weight-bold"><i class="ni ni-cart"></i>Cart</span></a></li>
                    <li class="nav-item"><a href="<?php echo site_url('customer/profile')?>" class="nav-link"><span class="nav-link-inner--text text-white font-weight-bold"><i class="ni ni-circle-08"></i>Profile</span></a></li>
                    <li class="nav-item"><a href="<?php echo site_url('user/login')?>" class="nav-link"><span class="nav-link-inner--text text-white font-weight-bold">Logout</span></a></li>
                </ul>
                <hr class="d-lg-none">
            </div>
        <!-- </div> -->
    </nav>
    <ul class="nav justify-content-center mt-3 mb-3">
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url('shop/collections/tops');?>">Tops</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url('shop/collections/bottoms');?>">Bottoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url('shop/collections/dress');?>">Dresses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url('shop/collections/jumpsuit');?>">Jumpsuits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url('shop/collections/accesories');?>">Accessories</a>
      </li>
    </ul>
    <!-- Content -->
    <div class="main-content">

    </div>
</body>
