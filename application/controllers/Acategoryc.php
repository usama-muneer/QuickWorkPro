<?php

  class Acategoryc extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('Acategory_model');
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

    function insert_category(){
      $data['serviceCategory_name'] = $this->input->post('category_name');
      $this->Acategory_model->insert_category($data);
      redirect(base_url(). 'categories');
    }

    function update_category(){
      $data['serviceCategory_id'] = $this->input->post('category_id');
      $data['serviceCategory_name'] = $this->input->post('category_name');
      $this->Acategory_model->update_category($data);
      redirect(base_url(). 'categories');
    }

    function delete_category(){
      $serviceCategory_id = $this->input->post('category_id');
      $this->Acategory_model->delete_category($serviceCategory_id);
      redirect(base_url(). 'categories');
    }
  }

?>
