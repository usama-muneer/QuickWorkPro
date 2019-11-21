<div class="container padding10">
    <h2>Deleted Gigs</h2> <hr/>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive w-100 d-block d-md-table">
            <table class="table table-striped">
              <thead class="thead-inverse">
                  <tr>
                      <th>ID</th>
                      <th>Gig Title</th>
                      <th>User ID</th>
                      <th>Status</th>
                      <th colspan="2" class="text-center">Actions</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  if(isset($gig_data)){
                    foreach ($gig_data as $gig_row) {
                ?>
                  <tr>
                      <td><?php echo $gig_row['gig_id']; ?></td>
                      <td><?php echo $gig_row['gig_title']; ?></td>
                      <td><?php echo $gig_row['user_id']; ?></td>
                      <td><?php echo $gig_row['gig_status']; ?></td>
                      <td>
                          <a href="#modalViewGig<?php echo $gig_row['gig_id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#modalViewGig<?php echo $gig_row['gig_id']; ?>">View</a>
                      </td>
                      <td>
                          <a href="modalManageGig<?php echo $gig_row['gig_id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#modalManageGig<?php echo $gig_row['gig_id']; ?>">Delete</a>
                      </td>
                  </tr>
                  <!-- View Gig Modal Start -->
                  <div class="modal fade" id="modalViewGig<?php echo $gig_row['gig_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">View Gig</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container" style="font-size: 14px;">
                              <form>
                                  <div class="row">
                                      <div class="col-md-7">
                                        <div class="form-group row">
                                          <label for="staticEmail" class="col-sm-5 col-form-label formheading">ID</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $gig_row['gig_id']; ?>">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="staticEmail" class="col-sm-5 col-form-label formheading">Category</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $gig_row['serviceCategory_name']; ?>">
                                          </div>
                                        </div>

                                        <div class="form-group row">
                                          <label for="staticEmail" class="col-sm-5 col-form-label formheading">Service</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $gig_row['service_name']; ?>">
                                          </div>
                                        </div>
                                        <!--
                                        <div class="form-group row">
                                          <label for="staticEmail" class="col-sm-5 col-form-label formheading">Seller</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
                                          </div>
                                        </div>
                                      -->
                                      <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-5 col-form-label formheading">Price</label>
                                        <div class="col-sm-7">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="$<?php echo $gig_row['gig_price'];  ?> ">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-5 col-form-label formheading">Duration</label>
                                        <div class="col-sm-7">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $gig_row['gig_duration']; ?> Days">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-5 gigimage">
                                      <img class="border" src="<?php echo base_url().$gig_row['gig_picture']; ?>" alt="gig image">
                                    </div>
                                </div>


                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-3 col-form-label formheading">Title</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext border bg-light" id="staticEmail" value="<?php echo $gig_row['gig_title']; ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="gigdescription" class="col-sm-3 col-form-label formheading">Pkg Description</label>
                                  <div class="col-sm-9">
                                    <textarea class="form-control-plaintext border bg-light" id="gigdescription" readonly><?php echo $gig_row['gig_package_desc']; ?></textarea>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="gigdescription" class="col-sm-3 col-form-label formheading">Gig Description</label>
                                  <div class="col-sm-9">
                                    <textarea class="form-control-plaintext border bg-light" id="gigdescription" style="height:150px;" readonly><?php echo $gig_row['gig_description']; ?></textarea>
                                  </div>
                                </div>
                              </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- View Gig Modal End -->
                  <!-- Delete Gig Modal Start -->
                  <div class="modal fade" id="modalManageGig<?php echo $gig_row['gig_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <form action="<?php echo base_url(); ?>Agigc/delete_gig" method="post">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete Gig</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <input type="hidden" name="gig_id" value="<?php echo $gig_row['gig_id']; ?>">
                          <div class="modal-body text-center">
                            <label class="formheading">Confirm delete?</label>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete Gig</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete Gig Modal End -->
                  <?php
                }
              }
              ?>
            </table>
        </div>
    </div>
</div>
