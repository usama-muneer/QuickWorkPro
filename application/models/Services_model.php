<?php

  class Services_model extends CI_Model{

    function __constuct(){
      parent::__construct();

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }
    }

    function getAllServiceName($service_name = null){
      if($service_name){
        $query = "SELECT * FROM gigs WHERE service_name = '" . $service_name . "'";
        $data  = $this->db->query($query)->result_array();
        if($data){
          return $data;
        }
        else{
          return false;
        }
      }
    }

    function getGigDataUsingServiceName($service_name = null){
      if($service_name){
        $query = "SELECT * FROM gigs WHERE service_name = '" . $service_name . "'";
        $data  = $this->db->query($query)->result_array();
        if($data){
          return $data;
        }
        else{
          return false;
        }
      }
    }

  }
?>
