<?php
/**
 *
 */
class Aorder_model extends CI_model{

  function __construct()
  {
    parent::__construct();
  }
  function viewActive_orders(){
    $this->db->where('order_status','active');
    $data = $this->db->get('orders');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function viewCompleted_orders(){
    $this->db->where('order_status','completed');
    $data = $this->db->get('orders');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function viewCancelled_orders(){
    $this->db->where('order_status','Cancelled');
    $data = $this->db->get('orders');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function viewDisputed_orders(){
    $this->db->where('order_status','Disputed');
    $data = $this->db->get('orders');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function view_orders(){
    $data = $this->db->get('orders');
    if($data){
      return $data;
    }
    else{
      return false;
    }
  }

  function update_order($data, $order_id){
    $this->db->where('order_id', $order_id);
    $this->db->update('orders', $data);
  }
}



 ?>
