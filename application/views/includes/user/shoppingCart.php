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
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j=1;
                                for ($i=0; $i<count($res);$i++){?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $j++?>
                                        </th>
                                        <td>
                                            <?php echo $res[$i]['name']?>
                                        </td>
                                        <td>
                                            <a href="#"><img src="<?php echo base_url('images/'. $res[$i]['image']);?>" width="120" height="120"></a>
                                        </td>
                                        <td>
                                            <?php echo number_format($res[$i]['price'])?>
                                        </td>
                                        <td>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <input class="form-control" type="number" value="<?php echo $res[$i]['quantity']?>" id="itemQty">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                        <?php echo form_open('customer/cart/delete_cart_detail'); ?>
                                            <input type="hidden" name="productID" value="<?php echo $res[$i]['productID']?>" />
                                            <input type="hidden" name="cartID" value="<?php echo $res[$i]['cartID']?>" />
                                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detailsModal">
                                                Delete
                                            </button>
                                        <?php echo form_close(); ?>
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
        <!--Checkout-->
        <div class="row justify-content-align-center">
            <div class="ml-auto mt-5 mr-3">
                <button class="btn btn-warning" type="button" name="button" onclick="window.location.href='<?php echo base_url('customer/payment/add_cart_to_order_details');?>'">Checkout</button>
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
