<?php
  class Aearning_model extends CI_Model{

    function __construct(){
      parent::__construct();
    }
    // fetch freelancer earning data code start
    function viewFreelancer_earnings(){
      $data = $this->db->get('earnings');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch freelancer earning data code end
    // fetch qwp earning data code start
    function viewQWP_earnings(){
      $data = $this->db->get('qwpearnings');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch qwp earning data code end
  }
?>
