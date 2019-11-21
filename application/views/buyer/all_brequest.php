
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

<br>
<div class="container">
  <h2>Buyer Request</h2>
	<br>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <!-- SHOW ACTIVE BREQUEST CODE START  -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <table class="table">
      <thead class="thead-light">
				<tr>
          <th scope="col">User</th>
          <th scope="col">Description</th>
          <th scope="col">Duration</th>
          <th scope="col">Budget</th>
          <th scope="col" colspan="1" style="width:150px;" ali>Request Sent</th>
        </tr>
      </thead>
			<tbody>
			<?php
				$brequestsql = 'SELECT * FROM buyerrequest WHERE brequest_status = "Active" order by request_date desc' ;
				$brequestdata = $this->db->query($brequestsql)->result_array();
				if($brequestdata){
					foreach($brequestdata as $row){
						$description = $row['description'];
						$duration    = $row['duration'];
						$budget      = $row['budget'];
						$brequest_id = $row['brequest_id'];
						$buyer_id    = $row['buyer_id'];


						//fetch all numbers of request on a post
						$this->db->select('*, COUNT(*) as count');// no need select as you only want counts
						$this->db->from('applybuyerrequest');
						$this->db->where('brequest_id', $brequest_id);
						$offers = $this->db->count_all_results();
						//$apr_sql = "SELECT count(*) as 'offers' FROM applybuyerrequest WHERE brequest_id =" . $brequest_id;
						//$offers_count = $this->db->query($apr_sql)->result_array();
						//foreach ($offers_count as $row) {
							//$total_offers = $row[''];
						//}

						//fetch profile DATA
						$sql1 = 'select * from userprofile where user_id =' . $buyer_id ;
						$data = $this->db->query($sql1)->result_array();
						if($data){
							foreach($data as $row):
								$picture = 	$row['picture'];

				?>
				<tr>
					<th scope="row"><img class="img-va-brequest" src="<?php echo base_url().$picture; ?>" alt="<?php echo $brequest_id; ?>"></th>
					<td><?php echo $description; ?></td>
					<td align="center"><?php echo $duration; ?></td>
					<td align="center">$<?php echo $budget; ?></td>
					<td align="center"><?php echo $offers; ?></td>
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
  <!-- SHOW ACTIVE BREQUEST CODE END  -->
</div>
</div>
<br><br><br><br><br><br>
