<?php
  class Acategory_model extends CI_Model
  {

    function __construct(){
      parent::__construct();
    }
    //insert service category code start
    function insert_category($data){
      $this->db->insert('servicecategories',$data);
    }//insert category code end
    // fetch service categories data code start
    function view_categories(){
      $this->db->order_by('serviceCategory_id');
      $data = $this->db->get('servicecategories');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch service categories data code end
    //update service categories code start
    function update_category($data){
      $this->db->replace('servicecategories', $data);
    }//update service categories code start
    //update service categories code start
    function delete_category($serviceCategory_id = null){
      if($serviceCategory_id){
        $this->db->where('serviceCategory_id',$serviceCategory_id);
        $this->db->delete('servicecategories');
      }
    }//update service categories code start
    //fetch service using service category id code start
    function getCategoryName($serviceCategory_id = null){
      if($serviceCategory_id){
        $this->db->where('serviceCategory_id', $serviceCategory_id);
        $data = $this->db->get('servicecategories')->result_array();
        $serviceCategory_name = "";
        if($data){
          foreach ($data as $row) {
            $serviceCategory_name = $row['serviceCategory_name'];
          }
          return $serviceCategory_name;
        }
        else{
          return false;
        }
      }
    }// fetch service using service category id code end
  }
?>
