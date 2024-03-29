<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homec extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    if($this->session->userdata('logged_in') == true){
      if($this->session->userdata('user_type') == 'admin'){
        redirect(base_url() . "dashboard");
      }
      if($this->session->userdata('user_type') == 'buyer'){
        redirect(base_url() . "brequestc/va_gig");
      }
      elseif($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }
    }
  }

  public function index(){
    $this->load->view('home/includes/home_header');
    $this->load->view('home/home_index');
    $this->load->view('home/includes/home_footer');
    $this->load->view('home/includes/home_model');
    $this->load->view('home/includes/home_end');
  }

  function howitworks(){
    $this->load->view('home/includes/home_hiwheader');
    $this->load->view('home/home_howitworks');
    $this->load->view('home/includes/home_footer');
    $this->load->view('home/includes/home_model');
    $this->load->view('home/includes/home_end');
  }

  function login(){
    $data = $this->uri->segment(3);
    if($data == 'error'){
      $d['error'] = $data;
      $this->load->view('home/includes/home_lheader');
      $this->load->view('home/home_login', $d);
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }
    elseif($data == '1'){
      $d['success'] = $data;
      $this->load->view('home/includes/home_lheader');
      $this->load->view('home/home_login', $d);
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }
    else{
      $this->load->view('home/includes/home_lheader');
      $this->load->view('home/home_login');
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }
  }

  function signup(){
    $data = $this->uri->segment(3);
    if($data == 'registered'){
      $d['registered'] = $data;
      $this->load->view('home/includes/home_header');
      $this->load->view('home/home_signup', $d);
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }
    else{
      $this->load->view('home/includes/home_header');
      $this->load->view('home/home_signup');
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }
  }

  public function view_services($serviceCategory_id = null){
    if($serviceCategory_id){
      //$serviceCategory_id = rawurldecod($serviceCategory_id);
      $this->load->model('Aservice_model');
      $service_data['service_data'] = $this->Aservice_model->getServiceDataByServiceCategoryId($serviceCategory_id);
      $this->load->view('home/includes/home_hiwheader');
      $this->load->view('home/view_services', $service_data);
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }
  }

  function view_gigs($service_id = null){
    if($service_id){
      $this->load->model('Aservice_model');
      $service_name         = $this->Aservice_model->getServiceNameByServiceId($service_id);
      $this->load->model('Gig_model');
      $g_data = $this->Gig_model->getGigDataByServiceName($service_name);
      if($g_data){
        $gig_data['gig_data'] = $g_data;
        $this->load->view('home/includes/home_hiwheader');
        $this->load->view('home/view_gigs', $gig_data);
        $this->load->view('home/includes/home_footer');
        $this->load->view('home/includes/home_model');
        $this->load->view('home/includes/home_end');
      }else{
        $service['service_name'] = $service_name;
        $this->load->view('home/includes/home_hiwheader');
        $this->load->view('home/view_gigs', $service);
        $this->load->view('home/includes/home_footer');
        $this->load->view('home/includes/home_model');
        $this->load->view('home/includes/home_end');
      }
    }
  }

  function show_gigs(){
    $service_name = $this->input->get('search_service');
    if($service_name){
      $this->load->model('Gig_model');
      $g_data = $this->Gig_model->getGigDataByServiceName($service_name);
      if($g_data){
        $gig_data['gig_data'] = $g_data;
        $this->load->view('home/includes/home_hiwheader');
        $this->load->view('home/view_gigs', $gig_data);
        $this->load->view('home/includes/home_footer');
        $this->load->view('home/includes/home_model');
        $this->load->view('home/includes/home_end');
      }else{
        $service['service_name'] = $service_name;
        $this->load->view('home/includes/home_hiwheader');
        $this->load->view('home/view_gigs', $service);
        $this->load->view('home/includes/home_footer');
        $this->load->view('home/includes/home_model');
        $this->load->view('home/includes/home_end');
      }
    }
  }

  function change_password(){
      $email['email'] = $this->input->post('email');
      $this->db->where('email', $email['email']);
      $data = $this->db->get('users')->result_array();
      if($data){
        $this->load->view('home/includes/home_hiwheader');
        $this->load->view('home/change_password', $email);
        $this->load->view('home/includes/home_footer');
        $this->load->view('home/includes/home_model');
        $this->load->view('home/includes/home_end');
      }
    else{
      $error = 'error';
      redirect(base_url(). "homec/login/". $error);
    }
  }

  function changepassword(){
    $this->form_validation->set_rules("newpassword", "New Password", "trim|required|min_length[8]");
    $this->form_validation->set_rules("confirmpassword", "Confirm Password", "trim|required|matches[newpassword]");

    if($this->form_validation->run() == true){
      //make salt Password
      $email = $this->input->post('email');
      $this->load->model('user_model');
      $salt = $this->user_model->salt();
      $newpassword = $this->user_model->makePassword($this->input->post("newpassword"),$salt);

      //load all data into array
      $data = array(
        "password" => $newpassword,
        "salt"     => $salt
      );
      $this->db->where('email', $email);
      $this->db->update('users', $data);
      $success = '1';
      redirect(base_url(). "homec/login/" .$success);
      //redirect(base_url(). "homec/change_password");
    }
    else{
      $this->change_password();
    }
  }

  function check_email($email){
    $this->db->where('email', $email);
    $data = $this->db->get('users');
    if($data){
      return true;
    }
    else{
      return false;
    }
  }

}
?>
