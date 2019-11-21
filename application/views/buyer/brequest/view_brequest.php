
<br>
<div class="container">
  <h2>Buyer Request</h2>

<div class="d-flex flex-row-reverse">
  <div class="p-2">
    <a class="btn btn-info" style="color:white" href="<?php echo base_url(); ?>brequestc/va_brequest">View All Request</a>
    <a class="btn btn-success" style="color:white" href="<?php echo base_url(); ?>brequestc/create_brequest">Post New Request</a>
  </div>
</div>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Active</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Paused</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pending Approval</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <!--  ACTIVE GIGS CODE START  -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="container">
      <div class="row">
        <table class="table table-bordered">
          <thead class="thead-light">
            <tr>
              <th scope="col" >#</th>
              <th scope="col">Description</th>
              <th scope="col">Duration</th>
              <th scope="col">Budget</th>
              <th scope="col" colspan="4" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $buyer_id = $this->session->userdata('buyer_id');
              $sql = 'SELECT * FROM buyerrequest WHERE brequest_status= "Active" AND buyer_id ='. $buyer_id ;
              $data = $this->db->query($sql)->result_array();
              if($data){
                  $val = 1;
                  foreach($data as $row){
                    $description = $row['description'];
                    $duration    = $row['duration'];
                    $budget      = $row['budget'];
                    $id          = $row['brequest_id'];
              ?>

              <tr>
                <th scope="row"><?php echo $val ?></th>
                <td ><?php echo $description; ?></td>
                <td><?php echo $duration; ?></td>
                <td>$<?php echo $budget; ?></td>
                <td><?php echo anchor("brequestc/viewirequest/{$id}", 'View', ['class'=>'btn btn-success']); ?></td>
                <td><?php echo anchor("brequestc/edit_brequest/{$id}", 'Edit', ['class'=>'btn btn-info']); ?></td>
                <td><?php echo anchor("brequestc/pausebrequest/{$id}", 'Pause', ['class'=>'btn btn-warning']); ?></td>
                <td><?php echo anchor("brequestc/deletebrequest/{$id}", 'Delete', ['class'=>'btn btn-danger']); ?></td>
                  <?php
                  $val = $val + 1;
                    }
                  }
                  else{
                    ?>
                <td colspan="4"> <?php echo "<h5>No Data found</h5>"; } ?> </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--  ACTIVE GIGS CODE END  -->

  <!--  PAUSED GIGS CODE START  -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Description</th>
          <th scope="col">Duration</th>
          <th scope="col">Budget</th>
          <th scope="col" colspan="4" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $buyer_id = $this->session->userdata('buyer_id');
          $sql = 'SELECT * FROM buyerrequest WHERE brequest_status= "Pause" AND buyer_id ='. $buyer_id ;
          $data = $this->db->query($sql)->result_array();
          if($data){
              $val = 1;
              foreach($data as $row){
                $description = $row['description'];
                $duration    = $row['duration'];
                $budget      = $row['budget'];
                $id          = $row['brequest_id'];
          ?>
          <tr>
            <th scope="row"><?php echo $val ?></th>
            <td><?php echo $description; ?></td>
            <td><?php echo $duration; ?></td>
            <td>$<?php echo $budget; ?></td>
            <td><?php echo anchor("brequestc/resumebrequest/{$id}", 'Resume', ['class'=>'btn btn-warning']); ?></td>
            <td><?php echo anchor("brequestc/deletebrequest/{$id}", 'Delete', ['class'=>'btn btn-danger']); ?></td>
              <?php
              $val = $val + 1;
                }
              }
              else{
                ?>
          <td colspan="4"> <?php echo "<h5>No Data found</h5>"; } ?> </td>
          </tr>
      </tbody>
    </table>
  </div>
  <!--  PAUSED GIGS CODE END  -->

  <!--  PENDING GIGS CODE START  -->
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Description</th>
          <th scope="col">Duration</th>
          <th scope="col">Budget</th>
          <th scope="col" colspan="4" class="text-center">Action</th>
        </tr>
      </thead>
      <?php
        $buyer_id = $this->session->userdata('buyer_id');
        $sql = 'SELECT * FROM buyerrequest WHERE brequest_status= "Pending" AND buyer_id ='. $buyer_id ;
        $data = $this->db->query($sql)->result_array();
        if($data){
            $val = 1;
            foreach($data as $row){
              $description = $row['description'];
              $duration = $row['duration'];
              $budget = $row['budget'];
              $id          = $row['brequest_id'];
        ?>
        <tr>
          <th scope="row"><?php echo $val ?></th>
          <td><?php echo $description; ?></td>
          <td><?php echo $duration; ?></td>
          <td>$<?php echo $budget; ?></td>
          <td>
            <?php echo anchor("brequestc/deletebrequest/{$id}", 'Delete', ['class'=>'btn btn-danger']); ?>
          </td>
            <?php
            $val = $val + 1;
              }
            }
            else{
              ?>
        <td colspan="4"> <?php echo "<h5>No Data found</h5>"; } ?> </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--  PENDING GIGS CODE END  -->
</div>
</div>
<br><br><br><br><br><br>
