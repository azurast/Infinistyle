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
                      <h5 class="card-title text-uppercase text-muted mb-0">Transactions</h5>
                      <!--Bisa ga ya count banyak transaksi?-->
                      <span class="h2 font-weight-bold mb-0"><?= count($orders); ?></span>
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
              <h3 class="mb-0 title">Transactions List</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i=0; $i < count($orders); $i++) { ?>
                  <tr>
                    <th scope="row"><?= $i+1; ?></th>
                    <td><?= $orders[$i]["orderID"]; ?></td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> <?= $orders[$i]["orderStatus"]; ?>
                      </span>
                    </td>
                    <td><?= $orders[$i]["customerID"]; ?></td>
                    <td class="text-left">
                        <button type="button" class="btn btn-info edit" data-edit="<?= $orders[$i]["orderID"]; ?>" data-toggle="modal" data-target="#editModal">
                            Edit
                        </button>
                        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#details<?= $orders[$i]["orderID"]; ?>" aria-expanded="false" aria-controls="details">
                            Details
                        </button>
                        <button type="button" class="btn btn-warning delete" data-delete="<?= $orders[$i]["orderID"]; ?>" data-toggle="modal" data-target="#deleteModal">
                            Delete
                        </button>

                        </div>

                        </div>
                    </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="orderID">
        <div class="row">
          <div class="col-md">
            <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status">
              <option value='"on process"'>"on process"</option>
              <option value="Shipping">Shipping</option>
            </select>
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
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="temp">
        <h1>Delete It?</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success deletecnf">Save changes</button>
      </div>
    </div>
  </div>
</div>
