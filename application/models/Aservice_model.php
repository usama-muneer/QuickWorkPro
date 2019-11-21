<?php
  class Aservice_model extends CI_Model{

    function __construct(){
      parent::__construct();
    }
    //insert services code start
    function insert_service($data){
      $this->db->insert('services',$data);
    }//insert services code end
    //fetch services data code start
    function view_services(){
      $data = $this->db->get('services');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch services data code end
    //fetch services data using serviceCategory_id code start
    function getServiceDataByServiceCategoryId($serviceCategory_id = null){
      if($serviceCategory_id){
        $this->db->where('serviceCategory_id', $serviceCategory_id);
        $data = $this->db->get('services')->result_array();
        if($data){
          return $data;
        }
        else{
          return false;
        }
      }
    }//fetch services data using serviceCategory_id code start
    //fetch services name using service_id code start
    function getServiceNameByServiceId($service_id){
      if($service_id){
        $this->db->where('service_id', $service_id);
        $this->db->order_by('service_name');
        $data = $this->db->get('services')->result_array();
        $service_name = "";
        if($data){
          foreach ($data as $row) {
            $service_name = $row['service_name'];
          }
          return $service_name;
        }
        else{
          return false;
        }
      }
    }//fetch services data using service_id code start
    //update services code start
    function update_service($data, $service_id){
      $this->db->where('service_id', $service_id);
      $this->db->update('services', $data);
    }//update services code start
    //update services code start
    function delete_service($service_id = null){
      if($service_id){
        $this->db->where('service_id',$service_id);
        $this->db->delete('services');
      }
    }//update services code start
  }
?>
