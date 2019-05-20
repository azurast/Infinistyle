<div class="container-fluid mt--7">
           <!-- Profile -->
           <div class="row">
               <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
                   <div class="card card-profile shadow">
                       <div class="row justify-content-center">
                           <div class="col-lg-3 order-lg-2">
                               <div class="card-profile-image">
                                   <a href="#">
                                       <img src="<?php echo base_url('argon\assets\img\adminphoto.jpg');?>" class="rounded-circle">
                                   </a>
                               </div>
                           </div>
                       </div>
                       <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                           <div class="d-flex justify-content-between">
                               <!--<a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                               <a href="#" class="btn btn-sm btn-default float-right">Message</a>-->
                           </div>
                       </div>
                       <div class="card-body pt-0 pt-md-4">
                           <div class="row">
                               <div class="col">
                               </div>
                           </div>
                       </div>
                       <div class="text-center mt-5">
                           <h3>
                               <?php echo ($this->session->userdata('logged_in_infinistyle')['username']);?>
                           </h3>
                           <div class="h5 mt-4 mb-4">
                               <i class="ni business_briefcase-24 mr-2"></i><?php echo ($this->session->userdata('logged_in_infinistyle')['role']);?>
                           </div>
                           <div class="h5 mt-4 mb-4">
                               <i class="ni business_briefcase-24 mr-2"></i><?php echo $admin[0]->email ?>
                           </div>

                           <!--<hr class="my-4" />
                           <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
                           <a href="#">Show more</a>-->
                       </div>
                   </div>
               </div>
           </div>
           <!--Modal-->
           <div class="row">
                <!--Modal buat edit profile-->
                <!-- Modal -->
                <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
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
