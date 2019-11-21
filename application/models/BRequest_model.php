<?php

  class BRequest_model extends CI_Model{

    function __constuct(){
      parent::__construct();

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }

      //prevent freelancer to post the buyer request pages
      if($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }

    }

    //INSERT BUYER REQUEST code START
    function insert_brequest($data){
      $this->db->insert('buyerrequest',$data);
    }
    //INSERT BUYER REQUEST code END

    //GET BUYER REQUEST DATA code START
    function getBRequestData($brequest_id = null){
      if($brequest_id){
        $this->db->where('brequest_id', $brequest_id);
        $data = $this->db->get('buyerrequest')->result_array();
        return $data;
      }
      else{
        return false;
      }
    }
    //GET BUYER REQUEST DATA code END

    //GET SERVICE CATEGORY DATA code START
    function getServiceCategoryData($serviceCategory_id = null){
      if($serviceCategory_id){
        $this->db->where('serviceCategory_id', $serviceCategory_id);
        $data = $this->db->get('servicecategories')->result_array();
        if($data){
          foreach($data as $row){
            $serviceCategory_name = $row['serviceCategory_name'];
            return $serviceCategory_name;
          }
        }
      }
      else{
        return false;
      }
    }
    //GET SERVICE CATEGORY DATA code END

    //UPDATE BUYER REQUEST DATA code START
    function update_brequest($data = null, $brequest_id = null){
        $this->db->where('brequest_id', $brequest_id);
        $this->db->update('buyerrequest', $data);
    }
    //UPDATE BUYER REQUEST DATA code END

    //INSERT BUYER REQUEST code START
    function insert_sendbr($data){
      $this->db->insert('applybuyerrequest',$data);
    }
    //INSERT BUYER REQUEST code END


  }
?>
