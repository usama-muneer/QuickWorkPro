<div class="container padding10">
    <h2>Active Buyer Requests</h2> <hr/>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive w-100 d-block d-md-table">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Budget</th>
                        <th>Buyer ID</th>
                        <th>Status</th>
                        <th colspan="2" >Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($brequest_data)){
                      foreach ($brequest_data as $brequest_row) {
                  ?>
                    <tr>
                        <td><?php echo $brequest_row['brequest_id']; ?></td>
                        <td><?php echo $brequest_row['request_date']; ?></td>
                        <td>$<?php echo $brequest_row['budget']; ?></td>
                        <td><?php echo $brequest_row['buyer_id']; ?></td>
                        <td><?php echo $brequest_row['brequest_status']; ?></td>
                        <td>
                            <a href="#modalViewRequest<?php echo $brequest_row['brequest_id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#modalViewRequest<?php echo $brequest_row['brequest_id']; ?>">View</a>
                        </td>
                        <td>
                            <a href="#modalManageRequest<?php echo $brequest_row['brequest_id']; ?>" class="btn btn-info" data-toggle="modal" data-target="#modalManageRequest<?php echo $brequest_row['brequest_id']; ?>">Manage</a>
                        </td>
                    </tr>
                    <!-- View Request Modal Start-->
                    <div class="modal fade" id="modalViewRequest<?php echo $brequest_row['brequest_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">View Buyer Request</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container" style="font-size: 14px;">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticOrderID" class="col-sm-5 col-form-label formheading">Request ID</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticOrderID" value="<?php echo $brequest_row['brequest_id']; ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticGigID" class="col-sm-5 col-form-label formheading">Buyer ID</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticGigID" value="<?php echo $brequest_row['buyer_id']; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticBuyerID" class="col-sm-5 col-form-label formheading">Category Name</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticBuyerID" value="<?php echo $brequest_row['serviceCategory_name'] ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticFLID" class="col-sm-5 col-form-label formheading">Service Name</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticFLID" value="<?php echo $brequest_row['service_name']; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticSDate" class="col-sm-5 col-form-label formheading">Request Date</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticSDate" value="<?php echo $brequest_row['request_date']; ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticCDate" class="col-sm-5 col-form-label formheading">Budget</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticCDate" value="$<?php echo $brequest_row['budget']; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticDuration" class="col-sm-5 col-form-label formheading">Duration</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticDuration" value="<?php echo $brequest_row['duration']; ?> Day/s">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="staticPrice" class="col-sm-5 col-form-label formheading">Status</label>
                                    <div class="col-sm-7">
                                      <input type="text" readonly class="form-control-plaintext" id="staticPrice" value="<?php echo $brequest_row['brequest_status']; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group row">
                                      <label for="staticStatus" class="col-sm-2 col-form-label formheading">Description</label>
                                      <div class="col-sm-10">
                                        <textarea readonly class="form-control-plaintext border bg-light" rows="4" style="padding-left:30px;padding-right:30px;"><?php echo $brequest_row['description']; ?></textarea>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- View Request Modal End-->
                    <!-- Manage Request Modal Start-->
                    <div class="modal fade" id="modalManageRequest<?php echo $brequest_row['brequest_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Manage Buyer Request</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                                <form method="post" action="<?php echo base_url(); ?>Abrequestc/update_brequest">
                                    <div class="form-group">
                                        <input type="hidden" name="brequest_id" value="<?php echo $brequest_row['brequest_id']; ?>">
                                        <label for="exampleFormControlSelect1">Request Status</label>
                                        <select name="brequest_status" class="form-control" id="exampleFormControlSelect1" required>
                                          <option value="">- Select -</option>
                                          <option value="deactivated">Deactivate</option>
                                        </select>
                                    </div> <hr/>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success">Update Status</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Manage Request Modal End-->
                    <?php
                  }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
