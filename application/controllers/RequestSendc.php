<?php

  class RequestSendc extends CI_Controller{

    function __construct(){
      parent::__construct();

      $this->load->model('brequest_model');
      $this->load->model('notification_model');
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
        redirect(base_url() . "profilec/create_profile");
      }
    }

    //page VIEW ALL BUYER REQUEST CODE START
    function va_brequest(){
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/all_brequest');
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }
    //page VIEW ALL BUYER REQUEST CODE START

    //APPLY BUYER REQUEST CODE START
    function applybr(){
      $data ['description'] = $this->input->post('description');
      $data ['budget'] = $this->input->post('budget');
      $data ['duration'] = $this->input->post('duration');
      $data ['brequest_id'] = $this->input->post('brequest_id');
      $data ['freelancer_id'] = $this->session->userdata('user_id');
      $data ['gig_id'] = $this->input->post('gig_id');
      $this->brequest_model->insert_sendbr($data);
      $data1['gig_id'] = $this->input->post('gig_id');
      $data1['brequest_id'] = $this->input->post('brequest_id');
      $data1['notification_details'] = "Your have received an offer on your request. Click here to review....";
      $data1['status'] = "unread";
      $data1['time'] =  date('Y-m-d H:i:s');
      $this->notification_model->insert_notification($data1);
      redirect(base_url() . 'requestsendc/va_brequest', 'refresh');// Redirect to Success page
      //profile create code end
    }
    //APPLY BUYER REQUEST CODE END
  }

?>
