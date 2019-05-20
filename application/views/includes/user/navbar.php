<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light bg-gradient-primary">
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
                            <img src="../../assets/img/brand/blue.png">
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
                <li class="nav-item">
                    <a href="<?php echo site_url('user/login')?>" class="nav-link">
                        <span class="nav-link-inner--text btn btn-info font-weight-bold">Logout</span>
                    </a>
                </li>
            </ul>
            <hr class="d-lg-none">
        </div>
    <!-- </div> -->
</nav>
<div class="main-content">
