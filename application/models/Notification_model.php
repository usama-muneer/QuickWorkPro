<?php

  class Notification_model extends CI_Model{

    function __constuct(){
      parent::__construct();

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }
    }

    //UPDATE BUYER REQUEST DATA code START
    function update_brequest($data = null, $brequest_id = null){
        $this->db->where('brequest_id', $brequest_id);
        $this->db->update('buyerrequest', $data);
    }
    //UPDATE BUYER REQUEST DATA code END

    //INSERT BUYER REQUEST code START
    function insert_notification($data1){
      $this->db->insert('notifications',$data1);
    }
    //INSERT BUYER REQUEST code END

    function updateOrderNotificationByOrderId($data, $order_id){
      $this->db->where('order_id', $order_id);
      $this->db->update('notifications', $data);
    }

    function updateGigNotificationByGigId($data, $gig_id){
      $this->db->where('gig_id', $gig_id);
      $this->db->update('notifications', $data);
    }

    function updateBrequestNotificationByBrequestId($data, $brequest_id){
      $this->db->where('brequest_id', $brequest_id);
      $this->db->update('notifications', $data);
    }

  }
?>
