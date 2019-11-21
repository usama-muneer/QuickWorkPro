<style media="screen">
  .heading{
    font-weight: bold;
  }
</style>
  <div align="center">
    <h2 style="background-color:#FC6A03;height:80px;padding-top:18px;">Post A Request To The Seller Community</h2><br/>
  </div>
<div class="container">

  <?php echo form_open_multipart("brequestc/editbrequest/{$brequest_id}" , array('id' => 'img'));?>
    <div class="form-group">
      <label for="inputAddress" class="heading">Describe the service you're looking to purchase. Please be as detailed as possible</label>
      <br/>
      <label class="heading">Description</label>
      <textarea readonly name="description" class="form-control" rows="4" id="desc" maxlength="300" required="required" value="<?php echo set_value('description'); ?>" placeholder="I am looking for ..."><?php echo $description; ?></textarea>
      <p align="right"><span id="profiledescription" align="right">300</span> characters remaining</p>
      <span class="text-danger"><?php echo form_error("description"); ?></span>
    </div>
    <hr/>
    <div class="form-group">
      <label class="heading">Choose the category and subcategory that best fits your request.</label>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label class="heading">Category</label>
            <select name="serviceCategory_name" class="form-control" id="sel_crcategory" readonly>
              <option value="<?php echo $serviceCategory_name; ?>"><?php echo $serviceCategory_name; ?></option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label class="heading">Service</label>
            <select name="service_name" class="form-control" id="sel_crservice" readonly required="required">
              <option><?php echo $service_name; ?></option>
            </select>
          </div>
        </div>
          <hr/>

        <div class="form-group">
        <label for="inputAddress" class="heading">Once you place your order, when would you like your service delivered?</label>
        <br/>
        <label class="heading">Time Frame</label>
        <select name="duration" class="form-control" id="sel_crtime" required="required">
          <option value=<?php echo $duration ?>><?php echo $duration; ?> Days</option>
          <option value="1">1 Day</option>
          <option value="2">2 Days</option>
          <option value="3">3 Days</option>
          <option value="4">4 Days</option>
          <option value="5">5 Days</option>
          <option value="6">6 Days</option>
          <option value="7">7 Days</option>
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
          <input name="budget" type="text" class="form-control" id="inlineFormInputGroupUsername2" value="<?php echo $budget; ?>" placeholder="Limit $5-$999" maxlength="3" />
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
