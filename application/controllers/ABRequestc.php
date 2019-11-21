<?php

  class Abrequestc extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('Abrequest_model');
      if($this->session->userdata('logged_in') != true){
        redirect(base_url(), '');
      }
      if($this->session->userdata('user_type') == 'buyer'){
        redirect(base_url() . "bprofilec/view_profile");
      }
      if($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }
    }

    function update_brequest(){
      $brequest_id             = $this->input->post('brequest_id');
      $data['brequest_status'] = $this->input->post('brequest_status');
      $this->Abrequest_model->update_brequest($data, $brequest_id);
      redirect(base_url(). "view_requests");
    }

    function delete_brequest(){
      $brequest_id             = $this->input->post('brequest_id');
      $this->Abrequest_model->delete_brequest($brequest_id);
      redirect(base_url(). "active_requests");
    }

  }

?>
