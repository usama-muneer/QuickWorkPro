
<style media="screen">
.img-viewgig{
  display: inline-block;
  position: relative;
  width: 350px;
  height: 200px;
  overflow: hidden;
}

.pfont{
  font-size: 13px;
  color: Black;
}
.pfont1{
  font-size: 13px;
  color: white;
}

</style>

<script type="text/javascript">
  $(document).ready(function(){
    function load_gig_data(page){
      .ajax({
        url: "<?php echo base_url(); ?>brequestc/pagination"+page,
        method: "GET",
        dataType: "json",
        success:function(data){
          $('#gig_table').html(data.gig_table);
          $('#pagination_link').html(data.pagination_link)
        }
      });
    }
    //load_gig_data(1);
  });
</script>

<br><br><br>
<!-- SHOW GIG DYNAMICALLY CODE START  -->
<!--
<div class="" align="right" id="pagination_link"></div>
<div class="table-responsive" id="gig_table"></div>-->
<?php
  if(isset($service_error)){
    echo '<div class="container jumbotron" style="margin-top:-70px;height:50px;">
            <h5 class = "text-center">Gigs related to this service  <b class="text-warning">"'. $service_error .'"</b> are not found.</h5>
          </div>';
  }
?>
<?php
  if(isset($service_name)){
    echo '<div class="container jumbotron" style="margin-top:-70px;height:50px;">
            <h1 class = "text-center" style="margin-top:-20px;">'. $service_name .'</h1>
          </div>';
  }
?>
<div class="container" style="margin-top:-35px;">
  <div class="row">
<div class="col-sm-2 border bg-light" style="padding-top:57px;height:300px;">
  <div class="card" >
    <div class="card-body text-center">
      <p class="">Post Your Request </p>
    </div>
    <div class="card-footer">
    <p class="text-center"><a href="<?php echo base_url(); ?>brequestc/create_brequest" style="color:black;font-weight:bolder;">Post</a> </p>
  </div>
  </div>
</div>


<div class="contact-detail col-sm-10 border" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
      <?php
        if(isset($gig_data)){
          foreach($gig_data as $data){
            $sql1 = 'SELECT username FROM users WHERE user_id =' . $data['user_id'];
            $userdata = $this->db->query($sql1)->result_array();
            foreach($userdata as $udata){
        ?>
        <div class="col-md-4 padding card-deck">
        <div class="card">
          <a href="<?php echo base_url('borderc/viewgig/'. $data['gig_id']); ?>"><img src="<?php echo base_url().$data['gig_picture']; ?>" class="img-fluid img-viewgig" alt="Image not found" /></a>
          <div class="card-body text-center">
            <h5><?php echo anchor("borderc/viewgig/{$data['gig_id']}", $data['gig_title'], ['class'=>'pfont']); ?></h5>
          </div>
          <div class="card-footer">
          <span class=""><small><?php echo anchor("borderc/viewprofile/{$data['user_id']}", $udata['username'], ['class'=>'pfont1 btn btn-info']); ?>
            </small></span>
          <span class="text-center float-right"><small>Starting from $<?php echo $data['gig_price']; ?></small></span>
        </div>
        </div>
      </div>
      <?php
            }
          }
        }
      ?>

    </div>
</div>
<!-- SHOW GIG DYNAMICALLY CODE END  -->
</div>
</div>
<br><br><br><br><br><br>
