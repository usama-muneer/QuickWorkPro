<?php

  class BProfilec extends CI_Controller{

    public function __construct(){
      parent::__construct();

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }

      //prevent freelancer to access the buyer profile pages
      if($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }
    }


    public function create_profile(){
      //create profile if not exist
      $user_id = $this->session->userdata('buyer_id');
      $sql = "select * from userprofile where user_id = ". $user_id;
      $data = $this->db->query($sql)->result_array();
      if($data){
        redirect(base_url() . "bprofilec/view_profile");
      }
      else{
        $this->load->view('buyer/profile/buyer_create');
      }
    }


    function fetch(){
      $this->load->model('autocomplete_model');
      echo $this->autocomplete_model->fetch_data($this->uri->segment(4));
    }

    function deactivate_profile(){
      $user_id        = $this->session->userdata('buyer_id');
      $data['status'] = 'Deactivated';
      //Deactivate Account Status
      $this->db->where('user_id', $user_id);
      $this->db->update('users', $data);
      $this->logout();
    }

    //View Profile CODE START
    function view_dashboard(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/dashboard');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //View Profile CODE END

    //View Profile CODE START
    function view_spending(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/va_spending');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //View Profile CODE END

    //View Profile CODE START
    function view_profile(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/profile/buyer_view');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //View Profile CODE END

    //Update Profile CODE START
    function edit_profile(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/profile/buyer_update');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //Update Profile CODE END

    //create profile code start
    //DO UPLOAD FUNCTION CODE START
    function do_upload(){
      $file_name = $_FILES['pic']['name'];
  		$file_temp = $_FILES['pic']['tmp_name'];
  		$upload_folder = "images/";
  		if(is_uploaded_file($file_name)){
  		$movefile = move_uploaded_file( $file_temp, $upload_folder . $file_name);
  		//$url = base_url()."images/".$_FILES['pic']['name'];
  		//if(is_uploaded_file($file_name)){
  			//echo "asdads";
  			//move_uploaded_file($_FILES['pic']['tmp_name'], $url);
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
   	}
    //DO UPLOAD FUNCTION CODE END

    public function createuserprofile(){

      //languages code end
      if($this->input->post('language1')){
        $language = array(
          'user_id' => $this->session->userdata('buyer_id'),
          'language' => $this->input->post('language1'),
          'level' => $this->input->post('llevel1')
        );
        if($language){
          $this->db->insert('languages', $language);
        }
      }
      if($this->input->post('language2')){
        $language = array(
          'user_id' => $this->session->userdata('buyer_id'),
          'language' => $this->input->post('language2'),
          'level' => $this->input->post('llevel2')
        );
        if($language){
          $this->db->insert('languages', $language);
        }
      }
      if($this->input->post('language3')){
        $language = array(
          'user_id' => $this->session->userdata('buyer_id'),
          'language' => $this->input->post('language3'),
          'level' => $this->input->post('llevel3')
        );
        if($language){
          $this->db->insert('languages', $language);
        }
      }
      //languages code end

      //profile create code start
      $data ['description'] = $this->input->post('description');
      $data ['country'] = $this->input->post('country');
      $data ['gender'] = $this->input->post('gender');
      $data ['picture']= $this->do_upload($this->input->post('file'));
      $data ['user_id'] = $this->session->userdata('buyer_id');
      $this->load->model('profile_model');
      $this->profile_model->insert_profile($data);
      redirect(base_url() . 'bprofilec/view_profile', 'refresh');// Redirect to Success page
      //profile create code end
    }

    //edit profile code START
    function edituserprofile(){
      //languages code end
      if($this->input->post('language1')){
        $language = array(
          'user_id' => $this->session->userdata('buyer_id'),
          'language' => $this->input->post('language1'),
          'level' => $this->input->post('llevel1')
        );
        if($language){
          $this->db->insert('languages', $language);
        }
      }
      if($this->input->post('language2')){
        $language = array(
          'user_id' => $this->session->userdata('buyer_id'),
          'language' => $this->input->post('language2'),
          'level' => $this->input->post('llevel2')
        );
        if($language){
          $this->db->insert('languages', $language);
        }
      }
      if($this->input->post('language3')){
        $language = array(
          'user_id' => $this->session->userdata('buyer_id'),
          'language' => $this->input->post('language3'),
          'level' => $this->input->post('llevel3')
        );
        if($language){
          $this->db->insert('languages', $language);
        }
      }
      //languages code end

      //profile create code start
      $data ['description'] = $this->input->post('description');
  		$data ['qualification'] = $this->input->post('degreetitle');
      if($data){
        $this->db->where('user_id', $this->session->userdata('buyer_id'));
        $this->db->update('userprofile', $data);
      }
  	  redirect(base_url() . 'bprofilec/view_profile', 'refresh');// Redirect to Success page
    }
    //edit profile code end

    //edit profile code START
    function updatepic(){
      //profile create code start
      $data['picture'] = $this->do_upload();
      if($data){
        $this->db->where('user_id', $this->session->userdata('buyer_id'));
        $this->db->update('userprofile', $data);
      }
  	  redirect(base_url() . 'bprofilec/view_profile', 'refresh');// Redirect to Success page
    }
    //edit profile code end

    //LOGOUT FUNCTION CODE START
    public function logout(){
      $this->session->sess_destroy();
      redirect(base_url() . "");
    }
    //LOGOUT FUNCTION CODE END

    //PAGE SETTINGS CODE START
    function settings(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/profile/settings');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //PAGE SETTINGS CODE END

    //CHANGE PASSWORD CODE START
    function changepassword(){
      $this->form_validation->set_rules("currentpassword", "Password", "trim|required|min_length[8]");
  		$this->form_validation->set_rules("newpassword", "Password", "trim|required|min_length[8]");
  		$this->form_validation->set_rules("newpasswordconfirm", "Password Confirmation", "trim|required|matches[newpasswordconfirm]");

      $this->form_validation->set_message('check_currpassword', "The {field} is incorrect.");
      if($this->form_validation->run() == true){
        //make salt Password
        $this->load->model('user_model');
        $salt = $this->user_model->salt();
        $newpassword = $this->user_model->makePassword($this->input->post("newpassword"),$salt);

        //load all data into array
  			$data = array(
  				"password" => $newpassword,
          "salt"     => $salt
  			);
        $this->db->where('user_id', $this->session->userdata('buyer_id'));
        $this->db->update('users', $data);
        echo '<p class="text-success">Password Successfully Updates</p>';
        redirect(base_url(). "bprofilec/settings");
      }
      else{
        echo '<p class="text-danger">Incorrect Password</p>';
      }
    }
    //CHANGE PASSWORD CODE END

    function check_currpassword(){
      $this->load->model('user_model');
      $user_id = $this->session->userdata('user_id');
      $currentpassword = $this->input->post('currentpassword');
      $data = $this->user_model->check_currpassword($user_id, $currentpassword);
      if($data){
        return true;
      }
      else{
        return false;
      }
    }

    //VIEW ALL GIG CODE START
    function va_gig($service_id = null){
      if($service_id){
        $this->load->model('Aservice_model');
        $this->load->model('Gig_model');
        $service_name = $this->Aservice_model->getServiceNameByServiceId($service_id);
        $g_data       = $this->Gig_model->getGigDataByServiceName($service_name);
        if($g_data){
          $gig_data['gig_data']     = $g_data;
          $gig_data['service_name'] = $service_name;
          $this->load->view('buyer/includes/buyer_VPheader');
          $this->load->view('buyer/includes/buyer_serviceBar');
          $this->load->view('buyer/va_gig', $gig_data);
          $this->load->view('buyer/includes/buyer_footer');
          $this->load->view('buyer/includes/buyer_end');
        }
        else {
          $gig_data['service_error'] = $service_name;
          $this->load->view('buyer/includes/buyer_VPheader');
          $this->load->view('buyer//includes/buyer_serviceBar');
          $this->load->view('buyer/va_gig', $gig_data);
          $this->load->view('buyer/includes/buyer_footer');
          $this->load->view('buyer/includes/buyer_end');
        }
      }
    }
    //VIEW ALL GIG CODE START

    //VIEW ALL GIG CODE START
    function view_services($serviceCategory_id){
      if($serviceCategory_id){
        //$serviceCategory_id = rawurldecod($serviceCategory_id);
        $this->load->model('Aservice_model');
        $service_data['service_data'] = $this->Aservice_model->getServiceDataByServiceCategoryId($serviceCategory_id);
        $this->load->view('buyer/includes/buyer_VPheader');
        $this->load->view('buyer/includes/buyer_serviceBar');
        $this->load->view('buyer/view_services', $service_data);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
    }
    //VIEW ALL GIG CODE START

  }

?>
