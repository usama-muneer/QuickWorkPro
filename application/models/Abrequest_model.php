<?php
/**
 *
 */
class Abrequest_model extends CI_model{

  function __construct(){
    parent::__construct();
  }
  function viewActive_brequests(){
    $this->db->where('brequest_status','active');
    $data = $this->db->get('buyerrequest');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function viewPending_brequests(){
    $this->db->where('brequest_status','pending');
    $data = $this->db->get('buyerrequest');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function viewDeleted_brequests(){
    $this->db->where('brequest_status','deleted');
    $data = $this->db->get('buyerrequest');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function view_brequests(){
    $data = $this->db->get('buyerrequest');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function update_brequest($data, $brequest_id){
    $this->db->where('brequest_id', $brequest_id);
    $this->db->update('buyerrequest

    ', $data);
  }

  function delete_brequest($brequest_id){
    $this->db->where('brequest_id', $brequest_id);
    $this->db->delete('buyerrequest');
  }
}
 ?>
