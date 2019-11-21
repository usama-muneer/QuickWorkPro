


<!--- Signup Heading CODE START -->
<div class="container-fluid">
	<div class="row welcome text-center">
		<div class="col-12" id="welcome-text-padding">
			<h1 class="display-4">Join Quick Work Pro</h1>
		</div>
		<hr>
		<div class="col-12" id="community-text-padding">
			<p class="lead">Join the community either as Buyer or a Freelancer</p><br/>
		</div>
	</div>
</div>
<!--- Signup Heading CODE END -->

<!--- PHP CODE SHOW USER INSERTED CODE START
<div class="container-fluid"> -->
	<?php
	if(isset($registered)){
			echo  '<p class="text-success text-center"><b>User Successfully Registered.</b></p>';
		}
	 ?>
<!--</div>
PHP CODE SHOW USER INSERTED CODE END -->
<!--- JOIN AS BUYER CODE START -->

<div class="container-fluid" id="join-text-padding">
	<div class="row">
		<label class="col-md-2"></label>
		<!--- JOIN AS BUYER CODE START -->
		<div class="col-md-4">
			<div class="card">
				<div class="card-header text-center">JOIN AS BUYER</div>
				<a href="#"data-toggle="modal" data-target="#modaljoinbuyer"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/client.jpg"></a>
				<div class="card-body text-center">
					<h5><a href="#" data-toggle="modal" data-target="#modaljoinbuyer">SIGN UP</a></h5>
				</div>
			</div>
		</div>
		<!--- JOIN AS BUYER CODE END -->

		<!--- JOIN AS FREELANCER CODE START -->
		<div class="col-md-4">
			<div class="card">
				<div class="card-header text-center">JOIN AS FREELANCER</div>
				<a href="#" data-toggle="modal" data-target="#modaljoinfreelancer"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/Freelancer.jpg"></a>
				<div class="card-body text-center">
					<h5><a href="#" data-toggle="modal" data-target="#modaljoinfreelancer">SIGN UP</a></h5>
				</div>
			</div>
		</div>
		<!--- JOIN AS FREELANCER CODE END -->

		<label class="col-md-2"></label>
	</div>
</div>


<!-- Modal Join Buyer CODE START -->
<div class="modal hide fade" id="modaljoinbuyer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      		<h4 class="modal-title text-center" id="exampleModalLongTitle">Join QWP as Buyer</h4>
	      	<div class="col-12 user-img">
					<img src="<?php echo base_url(); ?>assets/img/face.png" class="rounded-circle">
			</div>
        	<hr>
      <form class="col-12" method="post" action="<?php echo base_url();?>registerc/bForm_validation">

				<div class="form-group">
					<input type="text" name="b_usernamejoin" class="form-control" placeholder="Choose a Username" value="<?php echo set_value('b_usernamejoin'); ?>" required>
          <span class="text-danger"><?php echo form_error("b_usernamejoin"); ?></span>
        </div>
				<div class="form-group">
					<input type="Email" name="b_emailjoin" class="form-control" placeholder="Enter your Email" value="<?php echo set_value('b_emailjoin'); ?>" required>

				</div>
				<div class="form-group">
					<input type="password" name="b_passwordjoin" class="form-control" placeholder="Choose a Password" value="<?php echo set_value('b_passwordjoin'); ?>" required>

				</div>
				<div class="form-group">
					<input type="password" name="b_confirmpasswordjoin" class="form-control" placeholder="Reenter the Password" value="<?php echo set_value('b_confirmpasswordjoin'); ?>" required>
				</div>
				<button type="submit" name="btn_b_join" class="btns btn btn-default form-control"><i class="fas fa-user-plus"></i> Sign Up</button>
			</form>
		<br>
		  <div class="col-12 forgot">
				By joining, you agree to QWP's <a href="#">Terms of Service</a>
				<br />
				<a href="<?php echo base_url(); ?>login">Already a User? Sign In</a>
			</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Join Buyer CODE END -->

<!-- Modal Join Freelancer CODE START -->
<div class="modal hide fade" id="modaljoinfreelancer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      		<h4 class="modal-title text-center" id="exampleModalLongTitle">Join QWP as Freelancer</h4>
	      	<div class="col-12 user-img">
				<img src="<?php echo base_url(); ?>assets/img/face.png" class="rounded-circle">
			</div>
        	<hr>
        <form class="col-12" method="post" action="<?php echo base_url();?>registerc/fForm_validation">
					<div class="form-group">
						<input type="text" name="f_usernamejoin" class="form-control" placeholder="Choose a Username" value="<?php echo set_value('f_usernamejoin'); ?>" required>
						<span class="text-danger"><?php echo form_error("f_usernamejoin"); ?></span>
					</div>
					<div class="form-group">
						<input type="Email" name="f_emailjoin" class="form-control" placeholder="Enter your Email" value="<?php echo set_value('f_emailjoin'); ?>" required>
						<span class="text-danger"><?php echo form_error("f_emailjoin"); ?></span>
					</div>
					<div class="form-group">
						<input type="password" name="f_passwordjoin" class="form-control" placeholder="Choose a Password" value="<?php echo set_value('f_passwordjoin'); ?>" required>
						<span class="text-danger"><?php echo form_error("f_passwordjoin"); ?></span>
					</div>
					<div class="form-group">
						<input type="password" name="f_confirmpasswordjoin" class="form-control" placeholder="Reenter the Password" value="<?php echo set_value('f_confirmpasswordjoin'); ?>" required>
						<span class="text-danger"><?php echo form_error("f_confirmpasswordjoin"); ?></span>
					</div>
					<button type="submit" name="btn_f_join" class="btns btn btn-default form-control"><i class="fas fa-user-plus"></i> Sign Up</button>
		</form>
		<br>
		<div class="col-12 forgot">
				By joining, you agree to QWP's <a href="#">Terms of Service</a>
				<br>
				<a "<?php echo base_url(); ?>login">Already a User? Sign In</a>
			</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Join Freelancer CODE END -->
