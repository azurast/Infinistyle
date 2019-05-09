<!-- Content -->
<div class="main-content">
    <!-- Page Content -->
    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="argon/assets/img/1.png" alt="First slide" width:"100%" height="56.25%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="argon/assets/img/2.png" alt="Third slide"  width:"100%" height="56.25%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Shop Now -->
    <!-- <button type="button" class="btn btn-secondary btn-lg btn-block">SHOP NOW</button> -->
    <!-- Product Cards -->
    <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-group">
                <?php foreach($result as $card){ ?>
                    <div class="col-md-3 mt-2 mb-2">
                        <div class="card card-lift--hover shadow border-0">
                            <img src="<?php echo $card['productImage'] ?>" alt="<?php echo $card['productName']?>">
                            <div class="card-body py-5">
                                <h4 class="text-success text-uppercase"><?php echo $card['productName']?></h4>
                                <p class="description mt-3"><?php echo $card['productDescription']?></p>
                                <div class="product-price font-weight-bold mb-3">
                                  <span>Rp <?php echo $card['productPrice']?></span>
                                </div>
                                <button class="btn btn-icon btn-3 btn-warning" type="button">
                                    <span class="btn-inner--text" href="#"><a class="text-white" href="<?php echo base_url('home/product_details');?>">Details</a></span>
                                </button>
                            </div>
                        </div>
                        </div>
                <?php } ?>
                </div>
              <!-- <div class="row row-grid">
                <div class="col-lg-3">
                  <div class="card card-lift--hover shadow border-0">
                    <img class="card-img-top" src="argon/assets/img/product1.jpg" alt="Card image cap">
                    <div class="card-body py-5">
                      <h4 class="text-primary text-uppercase">Green Husky T-Shirt</h4>
                      <p class="description mt-3">Basic Essential T-Shirt</p>
                      <div class="product-price font-weight-bold mb-3">
                        <span>Rp 150,000</span>
                      </div>
                      <button class="btn btn-icon btn-3 btn-primary" type="button">
                          <span class="btn-inner--text">Details</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-lift--hover shadow border-0">
                    <img class="card-img-top" src="argon/assets/img/product2.jpg" alt="Card image cap">
                    <div class="card-body py-5">
                      <h4 class="text-primary text-uppercase">Jouer Foundation</h4>
                      <p class="description mt-3">Long wearing foundation</p>
                      <div class="product-price font-weight-bold mb-3">
                        <span>Rp 670,000</span>
                      </div>
                      <button class="btn btn-icon btn-3 btn-primary" type="button">
                        <span class="btn-inner--text">Details</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-lift--hover shadow border-0">
                    <img class="card-img-top" src="argon/assets/img/product3.png" alt="Card image cap">
                    <div class="card-body py-5">
                      <h4 class="text-primary text-uppercase">Shaving Cream</h4>
                      <p class="description mt-3">For the Men</p>
                      <div class="product-price font-weight-bold mb-3">
                        <span>Rp 200,000</span>
                      </div>
                      <button class="btn btn-icon btn-3 btn-primary" type="button">
                        <span class="btn-inner--text">Details</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-lift--hover shadow border-0">
                    <img class="card-img-top" src="argon/assets/img/product8.jpg" alt="Card image cap">
                    <div class="card-body py-5">
                      <h4 class="text-primary text-uppercase">Sukiri Mask</h4>
                      <p class="description mt-3">Detoxifying clay mask</p>
                      <div class="product-price font-weight-bold mb-3">
                        <span>Rp 399,000</span>
                      </div>
                      <button class="btn btn-icon btn-3 btn-primary" type="button">
                        <span class="btn-inner--text">Details</span>
                      </button>
                    </div>
                  </div>
                </div>
            </div>-->
            </div>
          </div>
        </div>
</div>
