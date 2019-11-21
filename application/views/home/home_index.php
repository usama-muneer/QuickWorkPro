
<!--- Image Slider CODE START -->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
  	<li data-target="#slides" data-slide-to="0" class="active"></li>
  	<li data-target="#slides" data-slide-to="1"></li>
  	<li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner text-center">
  	<div class="carousel-item active">
  		<img src="<?php echo base_url(); ?>assets/img/fl2.jpg">
  		<div class="carousel-caption">
  		  <h1 class="display-2">QuickWorkPro</h1>
  		  <h4>Freelance Services Marketplace</h4>
      </div>
    </div>
    <div class="carousel-item">
  	  <img src="<?php echo base_url(); ?>assets/img/fl4.jpg">
  	  <div class="carousel-caption">
        <h1>QuickWorkPro</h1>
        <h4>Freelance Services Marketplace</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/img/fl3.jpg">
      <div class="carousel-caption">
         <h1>QuickWorkPro</h1>
        <h4>Freelance Services Marketplace</h4>
      </div>
    </div>
  </div>
</div>
<!--- Image Slider CODE END -->

<!--- Marketplace Heading CODE START -->
<div class="container-fluid padding">
  <div class="row welcome text-center">
	  <div class="col-12">
			<h1 class="display-4">Explore the Marketplace</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">QuickWorkPro is a complete freelance services marketplace where you can get work done easily, efficiently and within budget. Explore our Service Categories to see whats on the offer.</p>
		</div>
	</div>
</div>
<!--- Marketplace Heading CODE END-->

<!--- Services Section CODE START -->
<div class="container-fluid padding">
  <div class="row text-center padding">
  	<div class="col-xs-12 col-sm-6 col-md-3">
  		<i class="fas fa-paint-brush"></i>
      <?php $gd = "1"; ?>
  		<h3><a href="<?php echo base_url('homec/view_services/'. $gd); ?>" class="service-color">Graphics & Design</a></h3>
  		<p>Logo Design, Flyers, Infographics, Presentations & lots more</p>
  	</div>
    <div class="col-xs-12 col-sm-6 col-md-3">
  		<i class="fas fa-bullhorn"></i>
      <?php $dm = "2"; ?>
  		<h3><a href="<?php echo base_url('homec/view_services/'. $dm); ?>" class="service-color">Digital Marketing</a></h3>
  		<p>Social Media, SEO, Content Marketing & lots more</p>
  	</div>
    <div class="col-sm-12 col-md-3">
  		<i class="fas fa-pencil-alt"></i>
      <?php $wt = "3"; ?>
  		<h3><a href="<?php echo base_url('homec/view_services/'. $wt); ?>" class="service-color">Writing & Translation</a></h3>
  		<p>Resumes, Proofreading, Translations & lots more</p>
  	</div>
    <div class="col-sm-12 col-md-3">
  		<i class="fas fa-video"></i>
      <?php $va = "4"; ?>
  		<h3><a href="<?php echo base_url('homec/view_services/'. $va); ?>" class="service-color">Video & Animation</a></h3>
  		<p>Whiteboard, Animated Logos, Brand Videos & lots more</p>
  	</div>
  	<div class="col-xs-12 col-sm-6 col-md-3">
  		<i class="fas fa-music"></i>
      <?php $ma = "5"; ?>
  		<h3><a href="<?php echo base_url('homec/view_services/'. $ma); ?>" class="service-color">Music & Audio</a></h3>
  		<p>Voice Over, Mixing, Producers, Composers & lots more</p>
  	</div>
    <div class="col-xs-12 col-sm-6 col-md-3">
    	<i class="fas fa-file-code"></i>
      <?php $pt = "6"; ?>
    	<h3><a href="<?php echo base_url('homec/view_services/'. $pt); ?>" class="service-color">Programming & Tech</a></h3>
    	<p>Wordpress, Chatbots, Programming & lots more</p>
    </div>
    <div class="col-sm-12 col-md-3">
    	<i class="fas fa-briefcase"></i>
      <?php $b = "7"; ?>
    	<h3><a href="<?php echo base_url('homec/view_services/'. $b); ?>" class="service-color">Business</a></h3>
    	<p>Virtual Assistance, Market Research, Business Plans & lots more</p>
    </div>
    <div class="col-sm-12 col-md-3">
    	<i class="fas fa-glass-martini"></i>
      <?php $fl = "8"; ?>
    	<h3><a href="<?php echo base_url('homec/view_services/'. $fl); ?>" class="service-color">Fun & Lifestyle</a></h3>
    	<p>Online Lessons, Crafts, Relationship Advice & lots more</p>
    </div>
  </div>
  <hr class="my-4">
</div>
<!--- Services Section CODE END -->

<!--- Jumbotron TERM TIMELINE Safety CODE START -->
  <div class="jumbotron">
    	<div class="row">
  	  	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 col-xl-4 text-center tts-color">
  	    <h1>Your Terms</h1>
  	    <p>Whatever you need to simplify your to do list, no matter your budget.</p>
    		</div>

    		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 col-xl-4 text-center tts-color">
    	    <h1>Your Timeline</h1>
    	    <p>Find services based on your goals and deadlines, it’s that simple.</p>
    		</div>

    		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 col-xl-4 text-center tts-color">
    	    <h1>Your Safety</h1>
    	    <p>Your payment is always secure, Fiverr is built to protect your peace of mind.</p>
    		</div>
  	  </div>
    </div>
<!--- Jumbotron TERM TIMELINE Safety CODE END -->

<!--- Two Column Section CODE START -->
<div class="container-fluid padding">
  <div class="row padding">
  	<div class="col-lg-6 text-center">
  		<h2>Need work done?</h2>
  		<p> It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes.</p>
  		<p> Whatever your needs, there will be a freelancer to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more).</p>
  		<p> With secure payments and thousands of reviewed professional to choose from, QuickWorkPro.com is the simplest and safest way to get work done online.</p>
  		<br>
  		<a href="#" class="btn btn-primary">Learn More</a>
  	</div>
  	<div class="col-lg-6">
  		<img src="<?php echo base_url(); ?>assets/img/desk.png" class="img-fluid">
  	</div>
  </div>
</div>
<!--- Two Column Section CODE END -->

<!--- Top Services TEXT Section CODE START -->
<div class="container-fluid padding">
  <div class="row welcome text-center">
  	<div class="col-12">
  		<h1 class="display-4">Take the First Step</h1>
  	</div>
  	<hr>
  	<div class="col-12">
  			<p class="lead">Whatever your goal, here are a few places to get started</p>
  		</div>
  </div>
</div>
<!--- Top Services TEXT Section CODE END -->

<!--- Top Services CODE START -->
<div class="container-fluid padding">
  <div class="row padding">

  	<div class="col-md-3">
  		<div class="card">
  			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/logo_design.png"></a>
  			<div class="card-body text-center">
  				<h5><a href="#">Logo Design</a></h5>
  				<p id="card_text">Build Your Brand</p>
  			</div>
  		</div>
  	</div>

  	<div class="col-md-3">
    		<div class="card">
    			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/webdesign.jpg"></a>
    			<div class="card-body text-center">
    				<h5><a href="#">Word Press</a></h5>
    				<p id="card_text">Customize Your Site</p>
    			</div>
    		</div>
    	</div>

  	<div class="col-md-3">
   		<div class="card">
   			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/voiceover.jpg"></a>
   			<div class="card-body text-center">
   				<h5><a href="#">Voice Over</a></h5>
   				<p id="card_text">Share Your Message</p>
   			</div>
   		</div>
	  </div>

  	<div class="col-md-3">
  		<div class="card">
  			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/whiteboard.jpg"></a>
  			<div class="card-body text-center">
  				<h5><a href="#">Whiteboard</a></h5>
  				<p id="card_text">Engage Your Audience</p>
  			</div>
  		</div>
  	</div>

  	<div class="col-md-3">
  		<div class="card">
  			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/socialmedia.jpg"></a>
  			<div class="card-body text-center">
  				<h5><a href="#">Social Media</a></h5>
  				<p id="card_text">Reach More Customers</p>
  			</div>
  		</div>
  	</div>

  	<div class="col-md-3">
  		<div class="card">
  			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/seo.jpg"></a>
  			<div class="card-body text-center">
  				<h5><a href="#">SEO</a></h5>
  				<p id="card_text">Unlock Growth Online</p>
  			</div>
  		</div>
  	</div>

  	<div class="col-md-3">
  		<div class="card">
  			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/resume.jpg"></a>
  			<div class="card-body text-center">
  				<h5><a href="#">Resumes</a></h5>
  				<p id="card_text">Show Your Best Self</p>
  			</div>
  		</div>
  	</div>

  	<div class="col-md-3">
  		<div class="card">
  			<a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/presentation.jpg"></a>
  			<div class="card-body text-center">
  				<h5><a href="#">Presentations</a></h5>
  				<p id="card_text">Present Your Ideas</p>
  			</div>
  		</div>
  	</div>

  </div>
</div>
<!--- Top Services CODE END -->
