<?php

class Gigc extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('notification_model');
    $this->load->model('brequest_model');
    //prevent user if not logged in into the system
    if($this->session->userdata('logged_in') != true ){
      redirect(base_url(), '');
    }
    //prevent buyer to access the gig pages
    if($this->session->userdata('user_type') == 'buyer'){
      redirect(base_url() . "bprofilec/view_profile");
    }
  }


  //Dynamically service name load in create buyer request page  code start
  function ajaxGetServiceName(){
    if($this->input->post('serviceCategory_id')){
      $serviceCategory_id = $this->input->post('serviceCategory_id');
      echo $serviceCategory_id;
      $sql = "SELECT * FROM services WHERE serviceCategory_id =" . $serviceCategory_id;
    }
    else{
      $sql = "SELECT * FROM services";
    }
    $data = $this->db->query($sql, array($serviceCategory_id))->result_array();
    if($data){
      echo '<option value="">Select Service</option>';
      foreach($data as $row){
          echo '<option value="'.$row['service_name'].'">'.$row['service_name'].'</option>';
      }
    }
  }
  //Dynamically service name load in create buyer request page  code start

  //page Create GIG code start
  function create_gig($errorMsg = null){
    $this->load->view('user/includes/user_VPheader');
    $this->load->view('user/includes/user_serviceBar');
    $this->load->view('user/gig/creategigerror', $errorMsg);
    $this->load->view('user/includes/user_footer');
    $this->load->view('user/includes/user_end');
  }
  //page Create GIG code start

  //page VIEW GIG CODE START
  function viewgig(){
    $user_id          = $this->session->userdata('user_id');
    $sql              = 'SELECT * FROM gigs WHERE gig_status= "Active" AND user_id ='. $user_id ;
    $data['gig_data'] = $this->db->query($sql)->result_array();
    if($data){
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/gig/viewgig', $data);
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }
  }
  //VIEW GIG CODE END

  //page VIEW INDIVISUAL GIG CODE START
  function viewigig($gig_id = null){
    $sql = 'SELECT * FROM gigs WHERE gig_id ='. $gig_id;
    $gig_data['gig_data'] = $this->db->query($sql)->result_array();
    if($gig_data){
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/gig/viewigig', $gig_data);
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }
  }
  //VIEW INDIVISUAL GIG CODE END

  //DO UPLOAD FUNCTION CODE START
  function do_upload(){
  		$file_name = $_FILES['gig_picture']['name'];
  		$file_temp = $_FILES['gig_picture']['tmp_name'];
  		$upload_folder = "images/";
  		if(is_uploaded_file($file_name)){
  		  $movefile = move_uploaded_file( $file_temp, $upload_folder . $file_name);
  		}
  	  $image = basename($file_name);
  	  $image=str_replace(' ','|',$image);
  	  $type = explode(".",$image);
  	  $type = $type[count($type)-1];
  	  if (in_array($type,array('jpg','jpeg','png','gif'))){
  	    $tmppath=$upload_folder.uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
  	    if(is_uploaded_file($file_temp)){
  	      move_uploaded_file($file_temp,$tmppath);
  	      return $tmppath; // returns the url of uploaded image.
  	    }
  	  }
  	  else
  	  {
  	    redirect(base_url() . 'Welcome/not_img', 'refresh');// redirect to show file type not support message
  	  }
	}
  //DO UPLOAD FUNCTION CODE END

  //GET SERVICE CATEGORY DATA code START
  function getGigPicture($gig_id = null){
    if($gig_id){
      $this->db->where('gig_id', $gig_id);
      $data = $this->db->get('gigs')->result_array();
      if($data){
        foreach($data as $row){
          $gig_picture = $row['gig_picture'];
          return $gig_picture;
        }
      }
    }
    else{
      return false;
    }
  }
  //GET SERVICE CATEGORY DATA code END

  //CREATE GIG CODE START
  function creategig(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules("gig_title", "gig_title", "trim|callback_unique_title");
    $this->form_validation->set_rules("gig_price", "gig_price", "trim|Integer");
    //Error message if user or email already exists
    $errorMsg = $this->form_validation->set_message('unique_title', 'The {field} already exist');

    if($this->form_validation->run() == TRUE){
      //profile create code start
      $serviceCategory_id = $this->input->post('serviceCategory_name');
      $data ['serviceCategory_name'] = $this->brequest_model->getServiceCategoryData($serviceCategory_id);
      $data ['service_name'] = $this->input->post('service_name');
      $data ['gig_title'] = $this->input->post('gig_title');
      $data ['gig_description'] = $this->input->post('gig_description');
      $data ['gig_package_desc'] = $this->input->post('gig_package_desc');
      $data ['gig_price'] = $this->input->post('gig_price');
      $data ['gig_duration'] = $this->input->post('gig_duration');
      $data ['gig_picture']= $this->do_upload();
      $data ['gig_status'] = 'Pending';
      if($this->session->userdata('user_id')){
        $data ['user_id'] = $this->session->userdata('user_id');
        $this->load->model('gig_model');
        $this->gig_model->insert_gig($data);
        $data1['user_id'] = $this->session->userdata('user_id');
        $data1['notification_details'] = "Your gig hase been created. Click here to review your gig....";
        $data1['status'] = "unread";
        $data1['time'] =  date('Y-m-d H:i:s');
        $this->notification_model->insert_notification($data1);
        redirect(base_url() . 'userc/viewgig', 'refresh');// Redirect to Success page
        //profile create code end
      }
      else{
        echo "Please Enter Correct Data";
      }
    }
    else{
      redirect(base_url(). "gigc/create_gig" . $errorMsg);
    }
  }
  //CREATE GIG CODE END

  //EDIT GIG CODE START
  function editgig($gig_id = null){
    $gigid = $gig_id;
    $data['serviceCategory_name'] = $this->input->post('serviceCategory_name');
    $data ['service_name']        = $this->input->post('service_name');
    $data ['gig_title']           = $this->input->post('gig_title');
    $data ['gig_description']     = $this->input->post('gig_description');
    $data ['gig_package_desc']    = $this->input->post('gig_package_desc');
    $data ['gig_price']           = $this->input->post('gig_price');
    $data ['gig_duration']        = $this->input->post('gig_duration');
    if($this->input->post('gig_picture') != null){
      $data ['gig_picture']= $this->do_upload();
    }
    if($data){
      $data ['user_id'] = $this->session->userdata('user_id');
        $this->db->where('gig_id', $gigid);
        $this->db->update('gigs', $data);
        $data1['user_id'] = $this->session->userdata('user_id');
        $data1['notification_details'] = "Your gig is successfully updated. Click here to review your gig....";
        $data1['gig_id']  = $gigid;
        $data1['status'] = "unread";
        $data1['time'] =  date('Y-m-d H:i:s');
        $this->notification_model->insert_notification($data1);
        redirect(base_url() . 'userc/viewgig', 'refresh');// Redirect to Success page
      }
    }
  //EDIT GIG CODE end

  //PAUSE GIG CODE START
  function pausegig($id){
    $gig_id = $id;
    if($gig_id){
      $data['gig_status'] = 'Pause';
      $this->db->where('gig_id', $gig_id);
      $this->db->update('gigs', $data);
      redirect(base_url(). "gigc/viewgig");
    }
  }
  //PAUSE GIG CODE END

  //RESUME GIG CODE START
  function resumegig($id){
    $gig_id = $id;
    if($gig_id){
      $data['gig_status'] = 'Active';
      $this->db->where('gig_id', $gig_id);
      $this->db->update('gigs', $data);
      redirect(base_url(). "gigc/viewgig");
    }
  }
  //RESUME GIG CODE END

  //DELETE GIG CODE END
  function deletegig($id){
    $gig_id = $id;
    if($gig_id){
      $data['gig_status'] = 'Deleted';
      $this->db->where('gig_id', $gig_id);
      $this->db->update('gigs', $data);
      redirect(base_url(). "gigc/viewgig");
    }
  }
  //DEDLETE GIG CODE END

  //VALIDATION RULE FOR CALLBACK UNIQUE_TITLE  CODE START
  public function unique_title(){
    $gig_title = $this->input->post('gig_title');
    $user_id = $this->session->userdata('user_id');
    $check = $this->db->get_where('gigs', array('gig_title' => $gig_title, 'user_id' => $user_id), 1);
    if ($check->num_rows() > 0) {
      return FALSE;
    }
    return TRUE;
  }
  //VALIDATION RULE FOR CALLBACK UNIQUE_TITLE  CODE START
}

?>
