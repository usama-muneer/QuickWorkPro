<?php
  class Dashboardc extends CI_Controller{

    public function __construct(){
      parent::__construct();

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }

      //prevent freelancer to access the buyer profile pages
      if($this->session->userdata('user_type') == 'buyer'){
        redirect(base_url() . "bprofilec/view_profile");
      }

      $user_id = $this->session->userdata('user_id');
      $sql = "select * from userprofile where user_id = ". $user_id;
      $data = $this->db->query($sql)->result_array();
      if(!$data){
        redirect(base_url() . "dashboard/create_profile");
      }
    }


    public function create_profile(){
      $this->load->view('user/profile/user_create');
    }

    //View Profile CODE START
    function dashboard(){
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/dashboard');
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }
    //View Profile CODE END

    //Update Profile CODE START
    function edit_profile(){
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/profile/user_update');
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }
    //Update Profile CODE END

  }

?>
