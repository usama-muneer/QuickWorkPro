<div class="container padding10">
    <h2>Services</h2> <hr/>
    <div class="">
        <button class="btn btn-success" data-toggle="modal" data-target="#modalAddService">Add Service</button>
    </div>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive">
            <table class="table table-striped w-100 d-block d-md-table">
                <thead class="thead-inverse">
                    <tr>
                        <th>Service ID</th>
                        <th>Category Name</th>
                        <th>Service Name</th>
                        <th colspan="2" class="text-center">Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($service_data)){
                      foreach ($service_data as $service_row) {
                        $service_id             = $service_row['service_id'];
                        $service_name           = $service_row['service_name'];
                        $serviceCategory_id     = $service_row['serviceCategory_id'];
                        $serviceCategory_name   = $service_row['serviceCategory_name'];

                  ?>
                    <tr>
                        <td><?php echo $service_id; ?></td>
                        <td><?php echo $serviceCategory_name; ?></td>
                        <td><?php echo $service_name; ?></td>
                        <td>
                          <a href="#modalUpdateService<?php echo $service_id; ?>" class="btn btn-success" data-toggle="modal" data-target="#modalUpdateService<?php echo $service_id; ?>">Update</a>
                        </td>
                        <td>
                          <a href="#modalDeleteService<?php echo $service_id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#modalDeleteService<?php echo $service_id; ?>">Delete</a>
                        </td>
                    </tr>

                    <!-- Update Service Modal Start -->
                    <div class="modal fade" id="modalUpdateService<?php echo $service_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">' ?>
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                                <form method="post" action="<?php echo base_url(); ?>Aservicec/update_category">
                                  <div class="form-group">
                                    <input type="hidden" readonly name="service_id" value="<?php echo $service_id; ?>">
                                    <label for="updateflstatus" class="formheading">Update Category</label>
                                    <select name="category_id" class="form-control" id="updateflstatus" required="required">
                                      <option value="<?php echo $serviceCategory_id; ?> "><?php echo $serviceCategory_name; ?></option>
                                        <?php
                                          if(isset($category_data)){
                                            foreach ($category_data as $category_row) {
                                        ?>
                                        <option value="<?php echo $category_row['serviceCategory_id']; ?>"><?php echo $category_row['serviceCategory_name']; ?></option>
                                        <?php
                                            }
                                          }
                                        ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1" class="formheading">Update Name</label>
                                    <input name="service_name" type="text" class="form-control" id="txtUpdCatName" value="<?php echo $service_name; ?>">
                                  </div>
                                  <!--
                                  <div class="form-group">
                          			    <label for="exampleFormControlFile1" class="formheading">Update Picture</label>
                          			    <input name="service_picture" type="file" class="form-control-file" id="exampleFormControlFile1">
                    			        </div> <hr/>
                                  -->
                                  <div class="float-right">
                                      <button type="submit" class="btn btn-success">Update</button>
                                  </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Update Service Modal End -->

                    <!-- Delete Service Modal Start -->
                    <div class="modal fade" id="modalDeleteService<?php echo $service_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                                <form method="post" action="<?php echo base_url(); ?>Aservicec/delete_service">
                                  <div class="form-group">
                                    <input name="service_id" type="hidden" readonly class="form-control-plaintext" id="txtUpdCatId" value="<?php echo $service_id; ?>">
                                  </div>
                                  <div class="form-group text-center">
                                    <label for="exampleFormControlInput1" class="formheading">Confirm Delete?</label>
                                  </div> <hr/>
                                  <div class="float-right">
                                    <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Delete Service Modal End -->
                <?php
                    }
                  }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Service Modal Start--->
<div class="modal fade" id="modalAddService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <?php echo form_open_multipart('Aservicec/insert_service' , array('id' => 'img'));?>
              <div class="form-group">
                <label for="updateflstatus" class="formheading">Service Category</label>
                <select name="category_id" class="form-control" id="updateflstatus" required="required">
                  <option value="">- Select -</option>
                  <?php
                    if(isset($category_data)){
                      foreach ($category_data as $category_row) {
                  ?>
                  <option value="<?php echo $category_row['serviceCategory_id']; ?>"><?php echo $category_row['serviceCategory_name']; ?></option>
                  <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="formheading">Service Name</label>
                <input name="service_name" type="text" class="form-control" id="txtAddCatName" placeholder="Example: Flyers & Brochures">
              </div>
              <div class="form-group">
      			    <label for="exampleFormControlFile1" class="formheading">Upload Picture</label>
      			    <input type="file" name="service_picture" class="form-control-file" id="exampleFormControlFile1" />
      			  </div> <hr/>
              <div class="float-right">
                  <button type="submit" class="btn btn-success">Add</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Add Service Modal End--->
