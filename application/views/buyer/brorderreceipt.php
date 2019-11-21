
<br><br><br>
<form method="post" action="<?php echo base_url('borderc/verifypayment'); ?>">
<div class="container padding10">
  <div class="row">
        <div class="col-md-7">
        <div class="container padding10 border rounded">
        <h3>Your Order Receipt</h3>
        <hr/>

        <div class="form-group row">
          <label for="staticSeller" class="col-sm-3 col-form-label receiptheading">Seller</label>
          <div class="col-sm-8">
            <?php
            $sql = 'SELECT * FROM users WHERE user_id ='. $freelancer_id;
            $gigdata = $this->db->query($sql)->result_array();
            if($gigdata){
              foreach($gigdata as $data){
            ?>
            <input type="hidden" name="freelancer_id" value="<?php echo $freelancer_id; ?>">
            <input type="text" readonly class="form-control" id="staticSeller" value="<?php echo $data['username']; ?>">
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="staticBuyer" class="col-sm-3 col-form-label receiptheading">Buyer</label>
          <div class="col-sm-8">
            <?php
            $sql = 'SELECT * FROM users WHERE user_id ='. $buyer_id ;
            $gigdata = $this->db->query($sql)->result_array();
            if($gigdata){
              foreach($gigdata as $data){
            ?>
            <input type="hidden" name="buyer_id" value="<?php echo $buyer_id; ?>">
            <input type="text" readonly class="form-control" id="staticSeller" value="<?php echo $data['username']; ?>">
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="staticGig" class="col-sm-3 col-form-label receiptheading">Gig</label>
          <div class="col-sm-8">
            <input type="hidden" name="gig_id" value="<?php echo $gig_id; ?>">
            <?php
            $sql = 'SELECT * FROM gigs WHERE gig_id ='. $gig_id ;
            $gigdata = $this->db->query($sql)->result_array();
            if($gigdata){
              foreach($gigdata as $data){
            ?>
            <input type="text" readonly class="form-control" id="staticGig" value="<?php echo $data['gig_title']; ?>">
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="staticAmount" class="col-sm-3 col-form-label receiptheading">Amount (USD)</label>
          <div class="col-sm-8">
            <input type="text" name="gig_price" readonly class="form-control" id="staticAmount" value="<?php echo $budget; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="staticSDate" class="col-sm-3 col-form-label receiptheading">Start Date</label>
          <div class="col-sm-8">
            <input type="text" name="gig_startDate" readonly class="form-control" id="staticSDate" value="">
          </div>
        </div>

          <div class="form-group row">
            <label for="staticDuration" class="col-sm-3 col-form-label receiptheading">Duration (Days)</label>
            <div class="col-sm-8">
              <input type="text" name="gig_duration" readonly class="form-control" id="staticDuration" value="<?php echo $duration; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticDDate" class="col-sm-3 col-form-label receiptheading">Due Date</label>
            <div class="col-sm-8">
              <input type="text" name="gig_endDate" readonly class="form-control" id="staticDDate" value="">
            </div>
          </div>

    </div>
    </div>

    <div class="col-md-5">
      <div class="container padding10 border rounded">
        <h3>Payment Information</h3>
        <hr/>
        <span class="text-danger text-center"> <?php echo validation_errors(); ?></span>

        <label class="receiptheading">Select your Payment Medthod</label><br/>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio1" value="Visa" required="required">
          <label class="form-check-label" for="inlineRadio1">Visa</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2" value="MasterCard">
          <label class="form-check-label" for="inlineRadio2">Mastercard</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio3" value="PayPal">
          <label class="form-check-label" for="inlineRadio3">PayPal</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio3" value="Payoneer">
          <label class="form-check-label" for="inlineRadio3">Payoneer</label>
        </div>
        <hr/>

        <div class="form-group row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Card Number</label>
          <div class="col-sm-8">
            <input type="number" name="card_no" value="" class="form-control" id="txtCardNo" placeholder="16 Digits Card Number" required="required" pattern="\d*" maxlength="16" minlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            <span><?php //echo $form_error('unique_cardNo'); ?></span>
          </div>
        </div>

        <div class="form-group row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Expiry Date</label>
          <div class="col-sm-8">
            <input type="text" name="expiry_date" class="form-control" id="txtEDate" placeholder="MM/YY" required="required" minlength="5" maxlength="5" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          </div>
        </div>

        <div class="form-group row">
          <label for="staticEmail" class="col-sm-4 col-form-label">CVV Number</label>
          <div class="col-sm-6">
            <input type="number" name="cvv" class="form-control" id="txtCVV" placeholder="3 Digits CVV Number" required="required" minlength="3" maxlength="3" pattern="\d*" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          </div>
        </div> <hr/>

        <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required="required">
                <label class="form-check-label" for="defaultCheck1">I confirm the details above and want to place the order</label>
              </div> <hr/>

              <div>
                <button type="submit" class="btn btn-success">Proceed</button>
              </div>
          </div>

      </div>
    </div>
  </div>
</div>
</form>
<br><br><br>
<script type="text/javascript">
function getSDate(){
 var todaydate = new Date();
 var day = todaydate.getDate();
 var month = todaydate.getMonth() + 1;
 var year = todaydate.getFullYear();
 var hour = todaydate.getHours();
 var minute = todaydate.getMinutes();
 var second = todaydate.getSeconds();
 if(month < 10)
   month = "0" + month;
 if(day < 10)
   day = "0" + day;
 var datestring = year + "-" + month + "-" + day + " "+ hour + ":" + minute + ":" + second;
 document.getElementById("staticSDate").value = datestring;
}
function getDDate(){

 var duration = document.getElementById('staticDuration').value;
 var dur = parseInt(duration, 10);
 var todaydate = new Date();
 todaydate.setDate(todaydate.getDate() + dur);
 var day = todaydate.getDate() ;
 var month = todaydate.getMonth() + 1;
 var year = todaydate.getFullYear();
 var hour = todaydate.getHours();
 var minute = todaydate.getMinutes();
 var second = todaydate.getSeconds();
 if(month < 10)
   month = "0" + month;
 if(day < 10)
   day = "0" + day;
 var datestring = year + "-" + month + "-" + day + " "+ hour + ":" + minute + ":" + second;
 document.getElementById("staticDDate").value = datestring;
}

setInterval(getSDate, 1000);
setInterval(getDDate, 1000);
</script>
