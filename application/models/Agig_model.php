<?php
  class Agig_model extends CI_Model
  {

    function __construct(){
      parent::__construct();
    }
    //insert service category code start
    function insert_gig($data){
      $this->db->insert('gigs',$data);
    }//insert category code end
    // fetch service categories data code start
    function view_gigs(){
      $this->db->order_by('gig_id');
      $data = $this->db->get('gigs');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch service categories data code end
    // fetch active service categories data code start
    function viewActive_gigs(){
      $this->db->where('gig_status', 'Active');
      $this->db->order_by('gig_id');
      $data = $this->db->get('gigs');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch active GIGS data code end
    // fetch deactivated GIGS data code start
    function viewDeactivated_gigs(){
      $gig_status = "gig_status = 'Deactivated' OR gig_status = 'ADeactivated'";
      $this->db->where($gig_status);
      $data = $this->db->get('gigs' );
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch deactivated service categories data code end
    // fetch DELETED GIGS data code start
    function viewDeleted_gigs(){
      $this->db->where('gig_status', 'Deleted');
      $this->db->order_by('gig_id');
      $data = $this->db->get('gigs');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch DELETED GIGS data code end
    // fetch PENDING GIGS data code start
    function viewPending_gigs(){
      $this->db->where('gig_status', 'Pending');
      $this->db->order_by('gig_id');
      $data = $this->db->get('gigs');
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }// fetch PENDING GIGS data code end
    //update GIGS code start
    function update_gig($data, $gig_id){
      $this->db->where('gig_id', $gig_id);
      $this->db->update('gigs', $data);
    }//update GIGS code END
    //DELETE GIGS code start
    function delete_gig($gig_id = null){
      if($gig_id){
        $this->db->where('gig_id',$gig_id);
        $this->db->delete('gigs');
      }
    }//DELETE GIG code END
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
