<?php
  class Abuyer_model extends CI_Model
  {

    function __construct(){
      parent::__construct();
    }
    // fetch freelancer data code start
    function view_buyers(){
      $this->db->where('type', 'buyer');
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
    function update_buyer($data, $user_id){
      $this->db->where('user_id', $user_id);
      $this->db->update('users', $data);
    }//update freelancer code start
  }
?>
