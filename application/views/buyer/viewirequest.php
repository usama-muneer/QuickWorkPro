
<style media="screen">
#img-top{
  display: inline-block;
  position: relative;
  width: 50px;
  height: 50px;
  overflow: hidden;
  border-radius: 50%;
}
.img-va-brequest{
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 50%;
}
#img-viewgig{
  display: inline-block;
  position: relative;
  width: 100px;
  height: 50px;
  overflow: hidden;
}
</style>


    <br><br>
    <div class="container padding table-responsive">
      <h5>Request Description</h5>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" readonly><?php echo $description; ?></textarea>
      <br><br>
      <hr>
      <h5>Offers</h5>
      <table class="table">
        <thead class="">
        <tr>
          <th scope="col">freelancer</th>
          <th scope="col">Description</th>
          <th scope="col">Duration</th>
          <th scope="col">Amount</th>
          <th scope="col">Response</th>
        </tr>
        </thead>
        <tbody>
          <?php
            //Apply Buyer Request Condition Check
            $apr_sql = "SELECT * FROM applybuyerrequest WHERE brequest_id =" . $brequest_id;
            $apr_data = $this->db->query($apr_sql)->result_array();
            if($apr_data){
              foreach ($apr_data as $row) {
                $applyrequest_id  = $row['applyRequest_id'];
                $description      = $row['description'];
                $duration         = $row['duration'];
                $budget           = $row['budget'];
                $brequest_id      = $row['brequest_id'];
                $freelancer_id    = $row['freelancer_id'];
                $gig_id           = $row['gig_id'];
                $time             = $row['apply_time'];
                //$time             = date("h:i:sa" );

  							//fetch profile DATA
  							$sql1 = 'select * from userprofile where user_id =' . $freelancer_id ;
  							$data = $this->db->query($sql1)->result_array();
  							if($data){
  								foreach($data as $row1):
  									$picture = 	$row1['picture'];

            ?>
            <tr>
              <th scope="row"><img class="img-va-brequest" src="<?php echo base_url().$picture; ?>" alt="<?php echo $brequest_id; ?>"></th>
              <td><?php echo $description; ?></td>
              <td align="center"><?php echo $duration; ?></td>
              <td align="center">$<?php echo $budget; ?></td>
  						<td colspan="2">
  							<a href="<?php echo base_url("borderc/brorderreceipt/" . $applyrequest_id); ?>" class="btn btn-success">Place Order</a>
  						</td>
            <?php
  									endforeach;
                  }
  							}
              }
              else{
            ?>
            <td colspan="4"> <?php echo "<h5>No Data found</h5>"; } ?> </td>
            </tr>
        </tbody>
      </table>
    </div>
<br><br><br><br><br>
