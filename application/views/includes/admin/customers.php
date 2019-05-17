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
                  <h5 class="card-title text-uppercase text-muted mb-0">Customers</h5>
                  <!--Bisa ga ya count banyak transaksi?-->
                  <span class="h2 font-weight-bold mb-0"><?= count($customer); ?></span>
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
          <h3 class="mb-0 title">Customers List</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Customer ID</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i=0; $i < count($customer); $i++) { ?>
              <tr>
                <th scope="row"><?= $i+1; ?></th>
                <td><?= $customer[$i]["customerID"]; ?></td>
                <td><?= $customer[$i]["fullName"]; ?></td>
                <td><?= $customer[$i]["phone"]; ?></td>
                <td><?= $customer[$i]["address"]; ?></td>
                <td>
                    <a href="#" class="avatar rounded-circle mr-3">
                  <img alt="Image placeholder" src="<?= base_url('argon/assets/img/'); ?>customer.jpg">
                </a>
                </td>
                <td class="text-left">
                    <button type="button" class="btn btn-info edit" data-edit="<?= $customer[$i]["customerID"]; ?>" data-toggle="modal" data-target="#editModal">
                        Edit
                    </button>
                    <button type="button" class="btn btn-warning delete" data-delete="<?= $customer[$i]["customerID"]; ?>" data-toggle="modal" data-target="#deleteModal">
                        Delete
                    </button>

                    </div>

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
          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <input type="hidden" id="customerID" readonly>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control form-control-alternative" id="fullName">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-alternative" id="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control form-control-alternative" id="address" type="textarea">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control form-control-alternative" id="phone" type="textarea">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
              <label for="username">Username</label>
                <input type="text" id="username" class="form-control form-control-alternative" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
              <label for="password">Password</label>
                <input type="password" id="password" class="form-control form-control-alternative" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success change">Save</button>
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
            <button type="button" class="btn btn-success deletecnf">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
