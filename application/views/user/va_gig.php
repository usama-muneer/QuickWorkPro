
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
    color: gray;
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
  if(isset($service_name)){
    echo '<div class="container jumbotron" style="margin-top:-70px;height:50px;">
            <h5 class = "text-center">Gigs related to this service  <b class="text-warning">"'. $service_name .'"</b> are not found.</h5>
          </div>';
  }
?>
<div class="container" style="margin-top:-35px;">
  <div class="row">
<div class="col-sm-2 border bg-light" style="padding-top:57px;height:300px;">
  <div class="card" >
    <div class="card-body text-center">
      <p>Create Your Own gig</p>
    </div>
    <div class="card-footer">
    <p class="text-center"><a class="btn btn-success" href="<?php echo base_url(); ?>userc/creategig" style="font-weight:bolder;">CREATE</a> </p>
  </div>
  </div>
</div>


<div class="contact-detail col-sm-10 border" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
      <?php
        if(isset($gig_data)){
          foreach ($gig_data as $data) {
            echo '<div class="col-md-4 padding card-deck">
                    <div class="card">
                      <a href="'. base_url('homec/signup/') .'" class="border"><img src="'.base_url().$data['gig_picture'] .'" class="img-fluid img-viewgig" alt="Image not found" /></a>
                      <div class="card-body text-center">
                        <p class="card-text"><small class="text-muted"><a href="'.base_url("homec/signup/") .'" class="text-dark">'. $data['gig_title'] .'</a></small></p>
                      </div>
                      <div class="card-footer text-center">
                        <span class="text-center"><small>Starting from $'. $data['gig_price'] .'</small></span>
                      </div>
                    </div>
                  </div>';
          }
        }
      ?>

    </div>
</div>
<!-- SHOW GIG DYNAMICALLY CODE END  -->
</div>
</div>
<br><br><br><br><br><br>
