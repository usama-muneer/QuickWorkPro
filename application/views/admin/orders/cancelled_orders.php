<div class="container padding10">
    <h2>Cancelled Orders</h2> <hr/>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive w-100 d-block d-md-table">
            <table class="table table-striped">
              <thead class="thead-inverse">
                  <tr>
                      <th>ID</th>
                      <th>Price</th>
                      <th>Start Date</th>
                      <th>Complete Date</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                if(isset($order_data)){
                  foreach ($order_data as $order_row) {
                    ?>

                  <tr>
                      <td><?php echo $order_row['order_id']; ?></td>
                      <td><?php echo $order_row['order_price']; ?></td>
                      <td><?php echo $order_row['start_date']; ?></td>
                      <td><?php echo $order_row['complete_date']; ?></td>
                      <td><?php echo $order_row['order_status']; ?></td>
                      <td>
                          <a href="#modalViewOrder<?php echo $order_row['order_id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#modalViewOrder<?php echo $order_row['order_id']; ?>">View</a>
                      </td>
                  </tr>
                  <!-- View Order Modal Start -->
                  <div class="modal fade" id="modalViewOrder<?php echo $order_row['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">View Order</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container" style="font-size: 14px;">

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticOrderID" class="col-sm-5 col-form-label formheading">Order ID</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticOrderID" value="<?php echo $order_row['order_id']; ?>">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticGigID" class="col-sm-5 col-form-label formheading">Gig ID</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticGigID" value="<?php echo $order_row['gig_id']; ?>">
                                          </div>
                                        </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticBuyerID" class="col-sm-5 col-form-label formheading">Buyer ID</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticBuyerID" value="<?php echo $order_row['buyer_id']; ?>">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticFLID" class="col-sm-5 col-form-label formheading">Freelancer ID</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticFLID" value="<?php echo $order_row['freelancer_id']; ?>">
                                          </div>
                                        </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticSDate" class="col-sm-5 col-form-label formheading">Start Date</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticSDate" value="<?php echo $order_row['start_date']; ?>">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticCDate" class="col-sm-5 col-form-label formheading">Complete Date</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticCDate" value="<?php echo $order_row['complete_date']; ?>">
                                          </div>
                                        </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticDuration" class="col-sm-5 col-form-label formheading">Duration</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticDuration" value="<?php echo $order_row['order_duration']; ?> Day/s">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticPrice" class="col-sm-5 col-form-label formheading">Price</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticPrice" value="$<?php echo $order_row['order_price']; ?>">
                                          </div>
                                        </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="staticStatus" class="col-sm-5 col-form-label formheading">Status</label>
                                          <div class="col-sm-7">
                                            <input type="text" readonly class="form-control-plaintext" id="staticStatus" value="<?php echo $order_row['order_status']; ?>">
                                          </div>
                                        </div>
                                  </div>
                              </div>

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- View Order Modal End -->
                  <?php
                      }
                    } ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
