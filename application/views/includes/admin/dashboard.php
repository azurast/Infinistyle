<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col-md-10">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Transaction List</h2>
                </div>
                <div class="col-md-2 text-right">
                  <a href="<?php echo base_url('admin/orders') ?>" class="btn btn-sm btn-primary">See all</a>
                </div>
                <div class="col">
                  
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Orders Review -->
              <div class="chart">
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Customer ID</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for($i=0; $i < count($orders); $i++) { ?>
                      <tr>
                        <td><?= $orders[$i]["orderID"]; ?></td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i> <?= $orders[$i]["orderStatus"]; ?>
                          </span>
                        </td>
                        <td><?= $orders[$i]["customerID"]; ?></td>
                      </tr>
                      <tr>
                        <td colspan="7" class="collapse" id="details<?= $orders[$i]["orderID"]; ?>">
                          <table class="table table-striped">
                            <thead>
                              <th><h4>Orders</h4></th>
                              <th><h4>Quantity</h4></th>
                            </thead>
                            <tbody>
                              <?php foreach($orderDetails as $od) {?>
                                <?php if($od["orderID"] == $orders[$i]["orderID"]) { ?>
                                  <tr>
                                    <td><?= $od["productName"]; ?></td>
                                    <td><?= $od["qty"]; ?></td>
                                  </tr>
                                <?php } ?>
                              <?php } ?>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row mt-5">
        <div class="col-xl-6 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Customer List</h3>
                </div>
                <div class="col text-right">
                  <a href="<?php echo base_url('admin/customers') ?>" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Customer ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i=0; $i < count($customer); $i++) { ?>
              <tr>
                <td><?= $customer[$i]["customerID"]; ?></td>
                <td><?= $customer[$i]["fullName"]; ?></td>
                <td>
                    <a href="#" class="avatar rounded-circle mr-3">
                  <img alt="Image placeholder" src="<?= base_url('argon/assets/img/'); ?>customer.jpg">
                </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Product List</h3>
                </div>
                <div class="col text-right">
                  <a href="<?php echo base_url('admin/products') ?>" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i=0; $i<count($items); $i++) { ?>
                  <tr>
                    <td><?= $items[$i]["productID"]; ?></td>
                    <td><?= $items[$i]["productName"]; ?></td>
                    <td><?= $items[$i]["productStock"]; ?></td>
                    <td> <a href="#"><img src="<?php echo base_url('images/'. $items[$i]['productImage']);?>" width="53" height="53"></a></td>
                    <!-- <td colspan="4" class="collapse"><div class="card-body"><img src="<?php echo base_url('images/'. $items[$i]['productImage']);?>" width="120" height:"120"></div></td> -->
                    <!-- <td>
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="<?= base_url('argon/assets/img/'); ?>ikeachair.jpg">
                      </a>
                    </td> -->

                </tr>
                <tr>
                  <td colspan="3" class="collapse" id="details<?= $items[$i]["productID"]; ?>">
                    <div class="card-body">
                      <h3>Category : </h3>
                      <p><?= $items[$i]["productCategory"];?></p>
                      <h3>Description : </h3>
                      <p><?= $items[$i]["productDescription"]; ?></p>
                    </div>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
