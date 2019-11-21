

<br>
<!-- REQUIREMENTS FORM START -->
  <div class="padding10">
    <div class="container padding10 border rounded">
      <?php echo form_open_multipart('borderc/orderstart/' , array('id' => 'img'));?>
        <h3>Submit your requirements for the order</h3>
        <hr/>

        <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="formheading">1. Give a detailed description about what you are expecting from this order?</label>
          <textarea class="form-control" name="requirements" id="exampleFormControlTextarea1" rows="7" required="required"></textarea>
        </div> <hr/>

        <div class="form-group">
          <label for="exampleFormControlFile1" class="formheading">2. Upload any work related file</label>
          <input type="file" name="upload" class="form-control-file" id="exampleFormControlFile1">
        </div> <hr/>

        <div class="form-group row">
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required="required">
            <label class="form-check-label" for="defaultCheck1">I confirm that the information above is complete</label>
          </div>
        </div>

        <div class="col-sm-2">
          <div>
            <button type="submit" class="btn btn-success">Place Order</button>
          </div>
        </div>
      </div>


      </form>
    </div>
  </div>
	<!-- REQUIREMENTS FORM END -->
<br><br><br>
