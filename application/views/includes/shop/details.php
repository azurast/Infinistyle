<style>
    .card-img-bottom {
    color: #fff;
    height: 20rem;
    background: url(images/img1.jpg) center no-repeat;
    background-size: cover;
    max-height: 600px;
    height: auto;
    width: auto;
    }
    .col-md-6
    {
        padding : auto;
    }
    .card{
        border : none;
    }

	.content{
		margin-top:5%;
		margin-bottom:5%;
		background:white;
		width:80%;
	}
</style>
<section>
  <div class="container content">
    <div class=" mt-5">
      <div class="row">
          <div class="col-md-6">
            <div class="card-header">
                <div class="card-img-bottom text-dark text-center">
                    <img src="<?php echo base_url('images/'. $product[0]->productImage); ?>" style="width: 100%; height: auto; max-height: 500px; max-width: 500px;" alt="product image here">
                </div>
            </div>
          </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title mt-6 text-center"><?php echo $product[0]->productName?></h4>
            <p class="card-text text-center"><?php echo $product[0]->productDescription?></p>
            <p class="card-text text-center"><?php echo $product[0]->productCategory?></p>
            <p class="card-text text-center"><?php echo "Rp ".number_format($product[0]->productPrice)?></p>
            <center>
            <?php echo form_open('customer/cart/add_product_to_cart'); ?>
                <div class="col-3 mb-3">
                <input type="hidden" name="productID" value="<?php echo $product[0]->productID;?>" />
                    <label>quantity : </label> 
                    <input class="form-control" type="number" value="1" id="qty" name="quantity">
                 </div>
                <button id="<?php echo $product[0]->productID?>" class="btn btn-icon btn-3 btn-primary add-to-cart" type="submit">
                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    <span class="btn-inner--text">Add To Cart</span>
                </button>
          <?php echo form_close(); ?>
            </center>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<script>
    $(document).ready(function(){
        $('.add-to-cart').click(function(){
            <?php
              $params = array(
                "productID" => $product[0]->productID,
                "qty" => 1,
              );
            ?>
            window.location = `<?php echo base_url("customer/cart/add_product_to_cart($params)")?>`
            
        });
    })
</script>
