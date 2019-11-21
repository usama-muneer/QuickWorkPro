<?php

  class Agigc extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('Agig_model');
      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }
      //prevent buyer to access the gig pages
      if($this->session->userdata('user_type') == 'buyer'){
        redirect(base_url() . "bprofilec/view_profile");
      }
      //prevent buyer to access the gig pages
      if($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }
    }

    function update_gig(){
      $gig_id               = $this->input->post('gig_id');
      $data['gig_status']   = $this->input->post('gig_status');
      $this->Agig_model->update_gig($data, $gig_id);
      redirect(base_url(). 'view_gigs');
    }

    function delete_gig(){
      $gig_id = $this->input->post('gig_id');
      $this->Agig_model->delete_service($gig_id);
      redirect(base_url(). 'view_gigs');
    }
    //DO UPLOAD FUNCTION CODE START
    function do_upload(){
      $file_name = $_FILES['service_picture']['name'];
  		$file_temp = $_FILES['service_picture']['tmp_name'];
  		$upload_folder = "serviceimages/";
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
   	}//DO UPLOAD FUNCTION CODE END

  }

?>
