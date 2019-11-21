<?php

  class Profilec extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->profile_model();
      $error = array(
        'error_image' => '';
        'error_name'  => '';
      );
      $this->load->view('user/includes/user_CPheader');
      $this->load->view('user/profile/user_create', $error);
      $this->load->view('user/includes/user_end');

    }

    public function createprofile_page(){
      $this->load->view('user/includes/user_CPheader');
      $this->load->view('user/profile/user_create');
      $this->load->view('user/includes/user_end');
    }

    public function createprofile(){
      $config_image = array();
      $config_image['upload_path']  = '../profile_image';
      $config_image['allowed_type'] = 'jpg|png|jpeg|gif';
      $config_image['max_size']     = '1024';
//      $config_image['max_width']    = '300';
//      $config_image-'max_height']   = '300';

      $this->load->library('upload',$config_image);
      $this->load->library('form_validation');
      $this->form_validation->set_rules("p_description", "Description", "trim|required");
			//
      if($this->form_validation->run() == false AND empty($FILES['p_pic']['name'][0])){
        $error = array(
          'error_image'   => 'Please choose profile image to upload',
          'error_message' => 'Please fill the form correctly'
        );
        $this->load->view('user/includes/user_CPheader');
        $this->load->view('user/profile/user_create', $error);
        $this->load->view('user/includes/user_end');
      }
      elseif($this->form_validation->run() == true AND empty($FILES['p_pic']['name'][0])){
        $error = array(
          'error_image'   => 'Please choose profile image to upload',
          'error_message' => ''
        );
        $this->load->view('user/includes/user_CPheader');
        $this->load->view('user/profile/user_create', $error);
        $this->load->view('user/includes/user_end');
      }
      elseif ($this->form_validation->run() == false AND !empty($FILES['p_pic']['name'][0])) {
        !this->upload->data();
        $error = array(
          'error_image'   => '',
          'error_message' => 'Please fill the form correctly'
        );
        $this->load->view('user/includes/user_CPheader');
        $this->load->view('user/profile/user_create', $error);
        $this->load->view('user/includes/user_end');
      }
      elseif ($this->form_validation->run() == true AND !empty($FILES['p_pic']['name'][0])) {
        $path  = $this->upload->do_upload();
        //$data = array('upload_data' => $this->upload->data());
        //$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
  			$profileData = array(
          'description'   => $this->input->get('p_description'),
          'country'       => $this->input->get('p_country'),
          'gender'        => $this->input->get('p_gender'),
          'qualification' => '',
          'picture'       => $path,
          'user_id'       => $this->session->userdata('user_id')
        );
			  //pass data to model insert function
			  $this->profile_model->insert_profile($profileData);
  			redirect(base_url() . "userc/viewprofile");
      }
      else{
          $this->createprofile_page();
      }
    }

    public function viewprofile(){

    }

    public function editprofile(){

    }

  }

?>
