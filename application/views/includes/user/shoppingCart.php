<div class="main-content">
  <!-- Header -->
  <div class="header pb-8 pt-3 pt-lg-3 d-flex align-items-center bg-gradient-default" style="min-height: 200px; background-size: cover; background-position: center top;">
    <!-- Mask -->
    <!--<span class="mask bg-gradient-default opacity-8"></span>-->
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <!-- <h1 class="display-2 text-white">This is Your Cart</h1> -->
          <!-- <p class="text-white mt-0 mb-5">See all the items inside.</p> -->
          <!-- <button type="button" class="btn btn-neutral" data-toggle="modal" data-target="#editProfileModal">Edit profile</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--7">
    <!-- Cart-->
    <div class="row">
      <div class="col-xl-12 order-xl-2 mb-5 mt-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <h3 class="mb-0">Your Cart</h3>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Item ID</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    1
                  </th>
                  <td>
                    TR001
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i> pending
                    </span>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td class="text-left">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal">
                      Details
                    </button>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailsModalLabel">Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          </div>
                        </div>
                      </div>
                    </div>
                </td>
              </tr>
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
      <!--Modal-->
      <div class="row">
    <!-- Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
