<!--Page Content-->
<div class="container-fluid mt--7">
    <!-- Profile -->
    <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        </div>
        <div class="col-xl-8 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow mt--300">
                <div class="px-4">
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="<?php echo base_url('argon\assets\img\theme\team-4-800x800.jpg')?>" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        </div>
                        <div class="col-lg-4 order-lg-1">
                        </div>
                    </div>
                    <div class="text-center" style="margin-top:16%;">
                        <h3><?php echo $customer[0]->fullName; ?></h3>
                    </div>
                    <div class="mt-5 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <h4>Address</h4>
                                <p><?php echo $customer[0]->address; ?></p>
                                <h4>Phone</h4>
                                <p><?php echo $customer[0]->phone; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        </div>
        <div class="col-xl-8 order-xl-2 mb-5 mt-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Order History</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0; $i<count($orders); $i++) {?>
                            <tr>
                                <th scope="row">
                                    <?= $i+1; ?>
                                </th>
                                <td>
                                    <?= $orders[$i]["orderID"]; ?>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        </i> <?= $orders[$i]["orderStatus"]; ?>
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
                                  </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php }?>
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
        <!--Modal buat edit profile-->
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
