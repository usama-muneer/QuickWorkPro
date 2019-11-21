<?php

  class Orderc extends CI_Controller{

    public function __construct(){
      parent::__construct();

      $this->load->model('freelancer_model');
      $this->load->model('notification_model');
      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }

      //prevent freelancer to access the buyer profile pages
      if($this->session->userdata('user_type') == 'buyer'){
        redirect(base_url() . "bprofilec/view_profile");
      }

      $user_id = $this->session->userdata('user_id');
      $sql = "select * from userprofile where user_id = ". $user_id;
      $data = $this->db->query($sql)->result_array();
      if(!$data){
        redirect(base_url() . "profilec/create_profile");
      }
    }

    //VIEW ORDERS PAGE CODE START
    function va_orders(){
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/order/va_order');
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }
    //VIEW ORDERS PAGE CODE END

    function vactiveorder($data){
      $row['order_id'] = $data;
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/order/order_activeview', $row);
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }

    function vdeliveredorder($id){
      $data['order_id'] = $id;
      $order_status = 'Delivered';
      $this->load->model('buyer_model');
      $order_data = $this->buyer_model->getOrderStatusByOrderId($data['order_id'], $order_status);
      if($order_data){
        $this->load->view('user/includes/user_VPheader');
        $this->load->view('user/includes/user_serviceBar');
        $this->load->view('user/order/order_deliveredview', $data);
        $this->load->view('user/includes/user_footer');
        $this->load->view('user/includes/user_end');
      }
      else{
        redirect(base_url().'orderc/va_orders');
      }
    }

    function vcompletedorder($data){
      $row['order_id'] = $data;
      $this->load->view('user/includes/user_VPheader');
      $this->load->view('user/includes/user_serviceBar');
      $this->load->view('user/order/order_completedview', $row);
      $this->load->view('user/includes/user_footer');
      $this->load->view('user/includes/user_end');
    }

    function deliverorder($order_id){
      if($order_id){
        $data['description'] = $this->input->post('description');
        $data['attach_file'] = $this->do_upload();
        $data['order_id']    = $order_id;
        if($data){
          $this->freelancer_model->insert_delivery($data);
          $this->freelancer_model->update_status_delivered($order_id);
          $data1['user_id'] = $this->session->userdata('user_id');
          $data1['notification_details'] = "Your order is delivered. Click here to review your delivery....";
          $data1['order_id']  = $order_id;
          $data1['status'] = "unread";
          $data1['time'] =  date('Y-m-d H:i:s');
          $this->notification_model->insert_notification($data1);
        }
        redirect(base_url() . "orderc/va_orders");
      }
    }

    //DO UPLOAD FUNCTION CODE START
    function do_upload(){
    		$file_name = $_FILES['dfile']['name'];
    		$file_temp = $_FILES['dfile']['tmp_name'];
    		$upload_folder = "deliveredfiles/";
    		if(is_uploaded_file($file_name)){
    		  $movefile = move_uploaded_file( $file_temp, $upload_folder . $file_name);
    		}
    	  $image = basename($file_name);
    	  $image=str_replace(' ','|',$image);
    	  $type = explode(".",$image);
    	  $type = $type[count($type)-1];
    	  if (in_array($type,array('jpg','jpeg','png','gif','jpe', 'pdf', 'doc', 'docx', 'rtf', 'text', 'txt'))){
    	    $tmppath=$upload_folder.uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
    	    if(is_uploaded_file($file_temp)){
    	      move_uploaded_file($file_temp,$tmppath);
    	      return $tmppath; // returns the url of uploaded image.
    	    }
    	  }
    	  else
    	  {
    	    redirect(base_url() . 'Welcome/not_img', 'refresh');// redirect to show file type not support message
    	  }
  	}
    //DO UPLOAD FUNCTION CODE END

  }

?>
