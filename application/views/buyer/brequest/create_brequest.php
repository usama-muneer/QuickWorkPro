
<style media="screen">
  .heading{
    font-weight: bold;
  }
</style>
<script type="text/javascript">
$(document).ready(function(){
  $('#servicecategory').on('change',function(){
      var serviceCategory_id = $(this).val();
      if(serviceCategory_id){
          $.ajax({
            type:'POST',
            url:'<?php echo base_url(); ?>brequestc/ajaxGetServiceName',
            data:'serviceCategory_id='+serviceCategory_id,
            success:function(html){
                $('#service').html(html);
            }
          });
      }
      else{
          $('#service').html('<option value="">Select category first</option>');
      }
  });
});
</script>
  <div align="center">
    <h2 style="background-color:#D3D3D3;height:80px;padding-top:18px;">Post A Request To The Seller Community</h2><br/>
  </div>
<div class="container">

  <?php echo form_open_multipart('brequestc/createbrequest' , array('id' => 'img'));?>
    <div class="form-group">
      <label for="inputAddress" class="heading">Describe the service you're looking to purchase. Please be as detailed as possible</label>
      <br/>
      <label class="heading">Description</label>
      <textarea name="description" class="form-control" rows="4" id="desc" maxlength="300" required="required" value="<?php echo set_value('description'); ?>" placeholder="I am looking for ..."></textarea>
      <p align="right"><span id="profiledescription" align="right">300</span> characters remaining</p>
      <span class="text-danger"><?php echo form_error("description"); ?></span>
    </div>
    <hr/>
    <div class="form-group">
      <label class="heading">Choose the category and subcategory that best fits your request.</label>
        <div class="form-row">
          <!--    Chose Service Catigory Dynamicalli code start  -->
          <div class="form-group col-md-6">
            <label class="heading">Category</label>
            <?php
                //$sql = 'SELECT * FROM servicecategories ORDER BY serviceCategory_id ASC' ;
                $categorysql = 'SELECT * FROM servicecategories ORDER BY serviceCategory_id ASC' ;
                $categorydata = $this->db->query($categorysql)->result_array();

             ?>
            <select name="serviceCategory_name" class="form-control" id="servicecategory" required="required">
              <option value="">Chose any category</option>
              <?php
              if($categorydata){
                foreach($categorydata as $row){
                    echo '<option value="'.$row['serviceCategory_id'].'">'.$row['serviceCategory_name'].'</option>';
                }
              }
              else{
                  echo '<option value="">Categories not available</option>';
              }
              ?>
            </select>
          </div>
          <!--    Chose Service Catigory Dynamicalli code end  -->

          <!--    Chose Service Dynamicalli code start  -->
          <div class="form-group col-md-6">
            <label class="heading">Service</label>
            <select name="service_name" class="form-control" id="service" required="required">
              <option value="">Select Category First..</option>
            </select>
          </div>
          <!--    Chose Service Dynamicalli code end  -->
        </div>
          <hr/>

        <div class="form-group">
        <label for="inputAddress" class="heading">Once you place your order, when would you like your service delivered?</label>
        <br/>
        <label class="heading">Time Frame</label>
        <select name="duration" class="form-control" id="sel_crtime" required="required">
          <option>1 Day</option>
          <option>2 Days</option>
          <option>3 Days</option>
          <option>4 Days</option>
          <option>5 Days</option>
          <option>6 Days</option>
          <option>7 Days</option>
        </select>
      </div>
      <hr/>

      <div class="form-group">
        <label for="inputAddress" class="heading">What is your budget for this service?</label>
        <br/>
        <label class="heading">Budget</label>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text">$</div>
          </div>
          <input name="budget" type="text" class="form-control" id="inlineFormInputGroupUsername2" value="<?php echo set_value("budget") ?>" placeholder="Limit $5-$999" maxlength="3" />
        </div>
        <span class="text-danger"><?php echo form_error('budget'); ?></span>
      </div>
      <button class="btn btn-primary btn-success form-control" style="width:300px; float:right;">Post</button>
    </div><br><br><br><br><br>
  </form>
</div>
<script type="text/javascript">
  var maxLength = 300;
  $('#desc').keyup(function() {
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#profiledescription').text(length);
  });
</script>
