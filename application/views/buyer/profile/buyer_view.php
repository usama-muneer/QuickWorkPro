<?php
	//fetch profile DATA
	$user_id = $this->session->userdata('buyer_id');
	$sql1 = 'select * from userprofile where user_id =' . $user_id ;
	$data = $this->db->query($sql1)->result_array();
	if($data){
		foreach($data as $row):
		  $id = $row['user_id'];
		  $country = $row['country'];
		  $gender = $row['gender'];
		  $description = $row['description'];
		  $qualification = $row['qualification'];
		  $picture = base_url().$row['picture'];
		  endforeach;
		  }
	else{
		$not = "No data found.";
	}
	// fetch user data
	$sql2 = 'select * from users where user_id =' . $user_id ;
	$data2 = $this->db->query($sql2)->result_array();
	if($data2){
		foreach($data2 as $row):
		  $username = $row['username'];
		  $email = $row['email'];
			$date = $row['join_date'];
			$join_since = date('Y',strtotime($date));
		  endforeach;
		  }
	else{
		$not = "No data found.";
	}
	//FETCH COUNTRY INFO
	$sql3 = 'select * from countries where country_code =' . "'" . $country . "'" ;
	$data3 = $this->db->query($sql3)->result_array();
	if($data3){
		foreach($data3 as $row):
		  $country_name = $row['country_name'];
		  endforeach;
		  }
	else{
		$not = "No data found.";
	}
?>

<style media="screen">
#blah{
	display: inline-block;
	position: relative;
	width: 130px;
	height: 130px;
	overflow: hidden;
	border-radius: 50%;
}
#img-gig{
	display: inline-block;
  position: relative;
  width: 250px;
  height: 200px;
  overflow: hidden;
}
</style>

<script type="text/javascript">
/*
$(document).ready(function(){
	$('#pic').on('change',function(){
			var pic = $(this).val();
			if(pic){
					$.ajax({
						type:'POST',
						url:'<?php echo base_url(); ?>bprofilec/ajaxUpdatePic',
						data:'pic='+pic,
						success:function(html){
								$('#blah').html(html);
						}
					});
			}
			else{
					$('#service').html('<option value="">Select category first</option>');
			}
	});
});
*/
</script>

<!-- PROFILE START -->
<!-- PROFILE MAIN SECTION START -->
	<div class="container main-section pt-20">
		<div class="row">
			<!-- PROFILE MAIN HEADER SECTION START -->
			<div class="col-lg-3 col-sm-12 col-12 text-center detail-part">
				<div class="row image-part m-0">
					<div class="col-lg-12 col-sm-12 col-12 user-img">
						<div class="">
							<img align="center" id="blah" class="img-editprofile" src="<?php echo $picture; ?>"class="border" alt="Profile" id="blah">
						</div><br>
					</div>
					<div class="col-lg-12 col-sm-12 col-12 user-name">
						<h2><?php echo $username; ?></h2>
						<!--	<p>Top Rated Seller</p>  -->
					</div>
					<div class="col-lg-12 col-sm-12 col-12 user-detail text-left p-2">
            <p>Gender: <span style="padding-left:67px;"><?php echo $gender; ?></span></p>
						<p>From: <span style="padding-left:80px;"><?php echo $country_name; ?></span></p>
						<p>Member Since: <span style="padding-left:26px;"><?php echo $join_since; ?></span></p>
						<p>User Type: <span style="padding-left:50px;"><?php echo $this->session->userdata('user_type'); ?></span></p>
					</div>
					<div class="col-lg-12 col-sm-12 col-12 user-name">
						<small></small>
					</div>
					<div class="col-lg-12 col-sm-12 col-12 information-button">
						<a class="btn btn-success w-75" href="<?php echo base_url(); ?>bprofilec/edit_profile">Edit</a>
					</div>
					<br><br><br>
				</div>
			</div>
			<!-- PROFILE MAIN SECTION END -->

			<!-- PROFILE DETAIL SECTION START -->
			<div class="col-lg-9 detail-part">
				<div class="container">
					<div class="row description">
						<div class="col-lg-12 col-12 bg-white rounded-top tab-head">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About Me</a>
						  </li>
						</ul>
						</div>
						<div class="col-lg-12 bg-white">
							<!-- DYNAMIC DATA - Description- Language- Skill - Education - GIGs View Code end   -->
							<div class="tab-content" id="myTabContent">
								<!-- DYNAMIC DATA - Description- Language- Skill - Education View Code end   -->
							  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							    <div class="row">
										<!--  Description View Code start   -->
							        <div class="col-lg-12 about-detail">
							            <h5 class="text-primary mb-1">Description</h5>
							            <p><?php echo $description; ?></p>
							        </div>
										<!--  Description View Code end   -->

										<!--  Language View Code start   -->
							       <div class="col-lg-12 about-detail">
											<table class="table">
												<thead>
													<tr>
														<td><h5 class="text-primary mb-1">language</h5></td>
														<td><h5 class="text-primary mb-1">Level</h5></td>
													</tr>
												</thead>
													<?php
													$langsql = 'select * from languages where user_id =' . $this->session->userdata('buyer_id');
													$lang = $this->db->query($langsql)->result_array();
													if($lang){
														foreach ($lang as $row) {
													?>
													<div class="container">
														<div class="row">
															<tr>
																<td class="col-sm-8"><?php echo $row['language']; ?></td>
																<td class="col-sm-4"><?php echo $row['level']; ?></td>
															</tr>
														</div>
													</div>
													<?php
															}
														}
														else{
															?>
																<tr>
																	<td colspan="4">No Data found</td>
																</tr>
													 <?php
														}
													 ?>
											  </table>
							        </div>
										<!--  Language View Code end   -->
							  	</div>
							  </div>
								<!-- DYNAMIC DATA - Description- Language- Skill - Education View Code end   -->
						  </div>
							<!-- DYNAMIC DATA - Description- Language- Skill - Education - GIGs View Code end   -->
					  </div>
				  </div>
			  </div>
			</div>
		</div>
	</div>
	<br><br><br>
  <!-- PROFILE DETAIL SECTION END -->
<!-- PROFILE END -->
<script type="text/javascript">
function readURL(input) {
	if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
					$('#blah')
							.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
}
</script>
