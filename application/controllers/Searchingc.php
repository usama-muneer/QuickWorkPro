<?php

  class Searchingc extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('Services_model');
    }

    function liveSearch(){
      $service_name = $this->input->post('searchval');
      //$data = $this->services_model->getAllServiceName($service_name);
      $query = "SELECT * FROM services WHERE service_name LIKE " . "'%" . $service_name . "%'";
      $data  = $this->db->query($query)->result_array();
      $view = "";
      if($data){
        foreach ($data as $sval) {
          $view = $view . '<option value="' . $sval['service_name'] .'">' . $sval['service_name'] . '</option>';
        }
      }
      else{
        $view = $view. '<option> No Data Found </option>';
      }
      echo $view;
    }

    function showgig(){
      $service_name = $this->input->get('search_service');
      $data = $this->Services_model->getGigDataUsingServiceName($service_name);
      if($data){
        $gig_data['gig_data'] = $data;
        $this->load->view('user/includes/user_VPheader');
        $this->load->view('user/includes/user_serviceBar');
        $this->load->view('user/va_gig', $gig_data);
        $this->load->view('user/includes/user_footer');
        $this->load->view('user/includes/user_end');
      }
      else{
        $sname['service_name'] = $service_name;
        $this->load->view('user/includes/user_VPheader');
        $this->load->view('user/includes/user_serviceBar');
        $this->load->view('user/va_gig', $sname);
        $this->load->view('user/includes/user_footer');
        $this->load->view('user/includes/user_end');
      }
    }

    function showgigb(){
      $service_name = $this->input->get('search_service');
      $g_data = $this->Services_model->getGigDataUsingServiceName($service_name);
      if($g_data){
        $gig_data['gig_data']     = $g_data;
        $gig_data['service_name'] = $service_name;
        $this->load->view('buyer/includes/buyer_VPheader');
        $this->load->view('buyer/includes/buyer_serviceBar');
        $this->load->view('buyer/va_gig', $gig_data);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
      else{
        //show all gigs
        $sql = 'SELECT * FROM gigs WHERE gig_status= "Active"';
        $g_data = $this->db->query($sql)->result_array();
        if($g_data){
          $gig_data['gig_data'] = $g_data;
          $gig_data['service_error'] = $service_name;
          $this->load->view('buyer/includes/buyer_VPheader');
          $this->load->view('buyer//includes/buyer_serviceBar');
          $this->load->view('buyer/va_gig', $gig_data);
          $this->load->view('buyer/includes/buyer_footer');
          $this->load->view('buyer/includes/buyer_end');
        }
      }
    }

  }
?>
