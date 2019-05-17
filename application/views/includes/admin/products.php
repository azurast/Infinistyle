<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Goods</h5>
                      <!--Bisa ga ya count banyak transaksi?-->
                      <span class="h2 font-weight-bold mb-0"><?= count($items);  ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <!--<p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row">
                <h3 class="mb-0 col-md-10 title">Goods List</h3>
                <button class="btn btn-success add col-md-2" data-toggle="modal" data-target="#editModal"><i class="fas fa-plus"></i> Add Item</button>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Goods ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i=0; $i<count($items); $i++) { ?>
                  <tr>
                    <th scope="row"><?= $i+1; ?></th>
                    <td><?= $items[$i]["productID"]; ?></td>
                    <td><?= $items[$i]["productName"]; ?></td>
                    <td><?= $items[$i]["productStock"]; ?></td>
                    <td>Rp <?= $items[$i]["productPrice"]; ?></td>
                    <td> <a href="#"><img src="<?php echo base_url('images/'. $items[$i]['productImage']);?>" width="120" height="120"></a></td>
                    <!-- <td colspan="4" class="collapse"><div class="card-body"><img src="<?php echo base_url('images/'. $items[$i]['productImage']);?>" width="120" height:"120"></div></td> -->
                    <!-- <td>
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="<?= base_url('argon/assets/img/'); ?>ikeachair.jpg">
                      </a>
                    </td> -->
                    <td class="text-left">
                      <button type="button" class="btn btn-info edit" data-edit="<?= $items[$i]["productID"]; ?>" data-toggle="modal" data-target="#editModal">
                          Edit
                      </button>
                      <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#details<?= $items[$i]["productID"]; ?>" aria-expanded="false" aria-controls="details">
                        Details
                      </button>
                    </div>
                    </div>
                  </td>
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
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="productId" readonly>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control form-control-alternative" id="productName">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <label for="productPrice">Price</label>
                <input type="text" id="productPrice" class="form-control form-control-alternative" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
              <label for="productCategory">Category</label>
                <!-- <input type="text" id="productCategory" class="form-control form-control-alternative" /> -->
                <select class="custom-select" id="productCategory">
                    <option selected>Choose Category...</option>
                    <option value="tops">Tops</option>
                    <option value="bottoms">Bottoms</option>
                    <option value="dresses">Dresses</option>
                    <option value="accecories">Accessories</option>
                    <option value="jumpsuit">Jumpsuit</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
              <label for="productStock">Stock</label>
                <input type="text" id="productStock" class="form-control form-control-alternative" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="productDescription">Description</label>
                <input type="textarea" id="productDescription" class="form-control form-control-alternative">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="productImage">Image</label>
                <img src="<?= base_url('argon/assets/img/'); ?>ikeachair.jpg" width="100" height="100" id="image">
                <input type="file" id="productImage" class="form-control form-control-alternative">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success change">Save changes</button>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Delete -->
   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
