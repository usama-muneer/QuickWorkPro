
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
  <h2>Spending</h2>
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
          <th scope="col">#</th>
          <th scope="col">Complete Date</th>
          <th scope="col">Spending</th>
          <th scope="col">Order ID</th>
          <th scope="col">Freelancer Name</th>
        </tr>
      </thead>
			<tbody>
			<?php
				$spendings_sql = 'SELECT * FROM orders WHERE  buyer_id=' . $this->session->userdata('buyer_id') .' AND approve_date <> ""';
				$spendings_data = $this->db->query($spendings_sql)->result_array();
				if($spendings_data){
					$val = 1;
					foreach($spendings_data as $row){
						$complete_date 		= $row['approve_date'];
						$earning    			= $row['order_price'];
						$order_id 				= $row['order_id'];
						$freelancer_id    = $row['freelancer_id'];
						$usersql = 'SELECT * FROM users WHERE  user_id=' . $freelancer_id;
						$userdata = $this->db->query($usersql)->result_array();
						if($userdata){
							foreach($userdata as $row2){
								$username = $row2['username'];
				?>
				<tr>
					<th scope="row" align="center" class=""><?php echo $val; ?></th>
					<td class=""><?php echo $complete_date; ?></td>
					<td class="">$<?php echo $earning; ?></td>
					<td class=""><?php echo $order_id; ?></td>
					<td class=""><?php echo $username; ?></td>
					<?php
								}
							}
						$val =$val + 1;
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
