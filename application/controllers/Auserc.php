<?php

  class Auserc extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('Afreelancer_model');
      $this->load->model('Abuyer_model');
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

    function update_freelancer(){
      $data['status']   = $this->input->post('status');
      $user_id = $this->input->post('user_id');
      $this->Afreelancer_model->update_freelancer($data, $user_id);
      redirect(base_url(). 'freelancers');
    }

    function update_buyer(){
      $data['status']   = $this->input->post('status');
      $user_id = $this->input->post('user_id');
      $this->Abuyer_model->update_buyer($data, $user_id);
      redirect(base_url(). 'buyers');
    }

  }

?>
