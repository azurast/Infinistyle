<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="./index2.html">
      <img src="<?php echo base_url('\argon\assets\img\logo\Logo.png');?>" class="navbar-brand-img" alt="...">
    </a>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="./index.html">
              <img src="<?php echo base_url('\argon\assets\img\logo\LogoTab.png');?>">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <!-- <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form> -->
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/dashboard');?>">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/orders')?>">
            <i class="ni ni-bullet-list-67 text-red"></i>Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/products')?>">
            <i class="ni ni-bag-17 text-green"></i>Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/customers')?>">
            <i class="ni ni-satisfied text-yellow"></i>Customers
          </a>
      </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
    </div>
  </div>
</nav>
