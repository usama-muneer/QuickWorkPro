<?php
/*
if($gig_id){
$sql = 'SELECT * FROM gigs WHERE gig_id ='. $gig_id ;
$gigdata = $this->db->query($sql)->result_array();
if($gigdata){
    foreach($gigdata as $data){
      $gig_id               = $data ['gig_id'];
      $serviceCategory_id = $data ['serviceCategory_name'];
      $this->load->model('brequest_model');
      $serviceCategory_name = $this->brequest_model->ajaxGetServiceName($serviceCategory_id);
      $service_name         = $data ['service_name'];
      $gig_title            = $data ['gig_title'];
      $gig_description      = $data ['gig_description'];
      $gig_package_desc     = $data ['gig_package_desc'];
      $gig_price            = $data ['gig_price'];
      $gig_duration         = $data ['gig_duration'];
      $gig_picture          = $data ['gig_picture'];
      */
  ?>
<link rel="stylesheet" href="/css/master.css">
<style>

.main-section{
	padding:30px 15px;
}
.rating-part-left h1{
	font-size:75px;
	margin:0px;
	color: #8EBF1D;
}
.rating-part-left i{
	font-size:22px;
	padding:2px;
	color:#FDC91B;
}
.rating-part-left p{
	font-size:18px;
	color:#504F55;
}
.progress{
	background: #f1f1f1;
	box-shadow: none;
	border-radius: 0px;
	margin:7px 0px;
}
.progress .progress-bar{
	background: #8EBF1D;
}
.rating-part-right i,.review-part-right i{
	font-size: 20px;
	padding:4px 0px;
	color:#FDC91B;
}
.rating-part-right span{
	color:#8EBF1D;
	font-size:17px;
	padding-left: 5px;
}
.review-section{
	padding: 0px 15px;
}
.review-part-left img{
	height:75px;
	width:75px;
	border-radius: 50%;
	border:2px solid #8EBF1D;
}
.review-part-left p{
	margin:0px;
	font-size:17px;
	color:#B3B5B4;
}
.review-part-left span{
	font-size:19px;
}
.review-part-left small{
	color:#B3B5B4;
}
.review-part-right p{
	font-size: 18px;
	color:#919191;
}
.checked {
  color: orange;
}
.details{
  border: 1px solid lightgrey;
}
.gigdescription{
  border: 1px solid lightgrey;
}
#img-viewgig{
  display: inline-block;
  position: relative;
  width: 530px;
  height: 380px;
  overflow: hidden;
}
</style>

<!--  VIEW GIG START -->
<br/>
<div class="container padding">
<div class="row padding">
	<div class="col-md-6 col-sm-12 col-12">
		<img src="<?php echo base_url().$gig_picture;?>" class="img-fluid" id="img-viewgig" alt="Image not found" />
	</div>
	<div class="details col-md-6 col-sm-12 col-12 rounded">
		<h4><?php echo $gig_title; ?></h4>
		<hr/>
		<a href="#"><?php  echo $serviceCategory_name; ?></a> / <a href="#"><?php echo $service_name; ?></a>
    <?php echo anchor("bchatc/chat/{$user_id}", 'Contact', ['class'=>'btn btn-info']); ?>
		<hr/>
		<div class="row">
		<div class="col-md-3 text-center">
		  <h3>$<?php echo $gig_price; ?> </h3>
    </div>
    <div class="col-md-3 text-center">
      <h3 class=""><?php echo $gig_duration; ?> Day/s</h3>
		</div>
		<div class="col-md-3">
      <?php echo anchor("borderc/borderreceipt/{$gig_id}", 'Place Order', ['class'=>'btn btn-success']); ?>
    </div>
		</div>
		<hr/>
		<h5>Package Description</h5>
		<p><?php echo $gig_package_desc; ?></p>
	</div>
</div>
</div>
<!-- GIG DESCRIPTION -->
<br/>
<div class="container">
	<div class="container">
	<div class="gigdescription col-12 col-md-12 rounded">
		<h5>Gig Description</h5>
		<p><?php echo $gig_description; ?></p>
	</div>
</div>
</div>
<br/><br><br>

<?php
/*
}
}
}

*/
 ?>
