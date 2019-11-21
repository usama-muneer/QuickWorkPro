<?php
  class Afreelancer_model extends CI_Model
  {

    function __construct(){
      parent::__construct();
    }
    // fetch freelancer data code start
    function view_freelancers(){
      $this->db->where('type', 'freelancer');
      //$this->db->where('status', 'Active');
      $this->db->order_by('username');
      $data = $this->db->get('users');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch freelancer data code end
    //update freelancer code start
    function update_freelancer($data, $user_id){
      $this->db->where('user_id', $user_id);
      $this->db->update('users', $data);
    }//update freelancer code start
  }
?>
