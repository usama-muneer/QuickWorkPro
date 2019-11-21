<?php

  class Freelancer_model extends CI_Model{

    public function __construct(){
      parent::__construct();
    }

    function insert_delivery($data){
      $this->db->insert('deliverorder', $data);
    }

    function update_status_delivered($order_id){
      $this->db->set('order_status', 'Delivered');
      $this->db->where('order_id', $order_id);
      $this->db->update('orders');
    }
  }

?>
