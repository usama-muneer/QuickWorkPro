<?php

class Gig_model extends CI_Model{


  function __construct(){
    parent::__construct();
  }


  //Profile TABLE CODE START
  function insert_gig($data){
    $this->db->insert("gigs",$data);
  }
  //profile TABLE CODE END

  //view_gig code start
  function view_gig($user_id = null){
    $sql = 'SELECT * FROM gigs WHERE user_id ='. $user_id;
    $query = $this->db->query($sql, array($user_id));
    //$this->db->where('user_id',$user_id);
    //$query = $this->db->get('gigs');
    //this query is = select * from users where username=$username and password=$password;
      return $query->result_array();
  }
  //view gig code end

  //get gig id code start
  function getGigID(){
    $sql = 'SELECT gig_id FROM gigs WHERE gig_title ='. $gig_title;
    $query = $this->db->query($sql);
    if($query){
      return $query;
    }
    else{
      return false;
    }
  }
  //get gig id code END

  //edit gig code start
  function edit_gig($data){
    $this->db->where('user_id', $data['gig_id']);
    $this->db->update('userprofile', $data);
  }
  //edit gig code end

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

  //fetch services name using service_id code start
  function getGigDataByServiceName($service_name){
    if($service_name){
      $this->db->where('service_name', $service_name);
      $data = $this->db->get('gigs')->result_array();
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }
  }//fetch services data using service_id code start

}


 ?>
