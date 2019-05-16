<!-- Page content -->
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Customers List</h3>
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
                <td class="text-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">
                        Edit
                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#deleteModal">
                        Delete
                    </button>
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
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" onclick="window.location = '<?php echo base_url('admin/customers/update_customer')?>'">Save changes</button>
                          </div>
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
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" onclick="window.location = '<?php echo base_url('admin/customers/delete_customer')?>'">Save changes</button>
                          </div>
                        </div>
                      </div>
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
