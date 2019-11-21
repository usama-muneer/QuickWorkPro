<div class="container padding10">
    <h2>Freelancers</h2> <hr/>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive w-100 d-block d-md-table">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($freelancer_data)){
                      foreach ($freelancer_data as $freelancer_row) {

                  ?>
                    <tr>
                        <td><?php echo $freelancer_row['user_id']; ?></td>
                        <td><?php echo $freelancer_row['username']; ?></td>
                        <td><?php echo $freelancer_row['email'] ?></td>
                        <td><?php echo $freelancer_row['status']; ?></td>
                        <td>
                            <a href="#modalUpdateFreelancer<?php echo $freelancer_row['user_id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#modalUpdateFreelancer<?php echo $freelancer_row['user_id']; ?> ">Update</a>
                        </td>
                    </tr>

                    <!-- Update Freelancer Modal Start -->
                    <div class="modal fade" id="modalUpdateFreelancer<?php echo $freelancer_row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Freelancer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                                <form method="post" action="<?php echo base_url(); ?>Auserc/update_freelancer">
                                  <input type="hidden" name="user_id" value="<?php echo $freelancer_row['user_id']; ?>" readonly>
                                  <div class="form-group">
                                    <label for="updateflstatus" class="formheading">Update Status</label>
                                    <select name="status" class="form-control" id="updateflstatus" required="required">
                                      <option value="<?php echo $freelancer_row['status']; ?>"><?php echo $freelancer_row['status']; ?></option>
                                      <option value="active">Active</option>
                                      <option value="deactivated">Deactivated</option>
                                      <option value="temporarily blocked">Temporarily Blocked</option>
                                      <option value="blocked">Blocked</option>
                                    </select>
                                  </div> <hr/>
                                  <div class="float-right">
                                      <button type="submit" class="btn btn-success">Update</button>
                                  </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Update Freelancer Modal End -->
                    <?php
                  }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
