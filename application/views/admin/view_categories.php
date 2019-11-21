<div class="container padding10">
  <h2>Service Categories</h2> <hr/>
  <div class="">
      <button class="btn btn-success" data-toggle="modal" data-target="#modalAddCategory">Add Service Category</button>
  </div>

  <div class="col-lg-12 col-md-12 padding15">
      <div class="table-responsive w-100 d-block d-md-table">
          <table class="table table-striped">
              <thead class="thead-inverse">
                  <tr>
                      <th>Category ID</th>
                      <th>Category Name</th>
                      <th colspan="2" class="text-center">Actions</th>
                      <th></th>
                  </tr>
              </thead>

              <tbody>
                <!-- display categories data and modal code start   -->
                <?php
                  if(isset($data)){
                    foreach ($data as $category_row) {
                      echo '<tr>
                              <td>' . $category_row['serviceCategory_id'] .'</td>
                              <td>' . $category_row['serviceCategory_name'] .'</td>
                              <td>
                                <a href="#modalUpdateCategory' . $category_row['serviceCategory_id'] . '" class="btn btn-success" data-toggle="modal" data-target="#modalUpdateCategory'. $category_row['serviceCategory_id'] . '">Update</a>
                              </td>
                              <td>
                                <a href="#modalDeleteCategory' . $category_row['serviceCategory_id'] . '" class="btn btn-danger" data-toggle="modal" data-target="#modalDeleteCategory'. $category_row['serviceCategory_id'] . '">Delete</a>
                              </td>
                          </tr>
                          <!-- Update Category Modal Start-->
                          <div class="modal fade" id="modalUpdateCategory'.$category_row['serviceCategory_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Update Service Category</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="container">
                                      <form method="post" action="'. base_url('Acategoryc/update_category') .'">
                                        <input type="hidden" name="category_id" class="form-control" value="' . $category_row['serviceCategory_id'] . '" readonly>
                                        <div class="form-group">
                                          <label for="exampleFormControlInput1" class="formheading">Update Name</label>
                                          <input name="category_name" type="text" class="form-control" id="txtUpdCatName" value="' . $category_row['serviceCategory_name'] . '">
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
                          <!-- Update Category Modal End-->

                          <!-- Delete Category Modal Start-->
                          <div class="modal fade" id="modalDeleteCategory'.$category_row['serviceCategory_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Delete Service Category</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="container">
                                      <form method="post" action="'. base_url('Acategoryc/delete_category') .'">
                                        <input type="hidden" name="category_id" class="form-control" value="' . $category_row['serviceCategory_id'] . '" readonly>
                                        <div class="form-group">
                                          <input type="hidden" readonly class="form-control-plaintext" id="txtUpdCatId" value="">
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
                          <!-- Delete Category Modal End-->';
                    }
                  }
                ?>
                <!-- display categories data and modal code end   -->
              </tbody>
          </table>
      </div>
  </div>
</div>

<!--   MODEL CODE   -->

<!-- Add Category Modal Start-->
<div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Service Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form method="post" action="<?php echo base_url(); ?>Acategoryc/insert_category">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="formheading">Category Name</label>
                <input name="category_name" type="text" class="form-control" id="txtAddCatName" placeholder="Example: Graphics & Design">
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
<!-- Add Category Modal End-->
