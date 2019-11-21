<?php

  class Borderc extends CI_Controller{

    //CONSTRUCTURE CODE START
    public function __construct(){
      parent::__construct();

      $this->load->model('brequest_model');
      $this->load->model('buyer_model');
      $this->load->model('notification_model');

      $this->load->library('form_validation');

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }

      //prevent freelancer to access the buyer profile pages
      if($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }

      //create profile if not exist
      $user_id = $this->session->userdata('buyer_id');
      $sql = "select * from userprofile where user_id = ". $user_id;
      $data = $this->db->query($sql)->result_array();
      if(!$data){
        $this->create_profile();
      }
    }
    //CONSTRUCTURE CODE END

    //VIEW ORDERS PAGE CODE START
    function va_orders(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer//includes/buyer_serviceBar');
      $this->load->view('buyer/order/va_order');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //VIEW ORDERS PAGE CODE END

    //VIEW ORDERS PAGE CODE START
    function viewprofile($user_id = null){
      if($user_id){
        $row['my_id'] = $user_id;
        $row['title'] = "Freealncer Profile";
         $this->load->view('buyer/includes/buyer_VPheader', $row);
        $this->load->view('buyer/includes/buyer_serviceBar');
        $this->load->view('buyer/view_fprofile', $row);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
    }
    //VIEW ORDERS PAGE CODE END

    //VIEW INDIVIDUAL GIG CODE START
    function viewgig($gig_id = null){
      $row['gig_id'] = $gig_id;
      if($row['gig_id']){
        $sql = 'SELECT * FROM gigs WHERE gig_id ='. $row['gig_id'] ;
        $gigdata = $this->db->query($sql)->result_array();
        if($gigdata){
          foreach($gigdata as $data){
            $row['serviceCategory_name'] = $data ['serviceCategory_name'];
            $row['service_name']         = $data ['service_name'];
            $row['gig_title']            = $data ['gig_title'];
            $row['gig_description']      = $data ['gig_description'];
            $row['gig_package_desc']     = $data ['gig_package_desc'];
            $row['gig_price']            = $data ['gig_price'];
            $row['gig_duration']         = $data ['gig_duration'];
            $row['gig_picture']          = $data ['gig_picture'];
            $row['user_id']             = $data ['user_id'];
          }
        }
      }
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/viewgig', $row);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //VIEW INDIVISUAL CODE END

    //SELECT PAYMENT METHOD CODE START
    function pselectmethod($id = null){
      $row['gig_id'] = $id;
      if($row['gig_id']){
        $sql = 'SELECT * FROM gigs WHERE gig_id ='. $row['gig_id'] ;
        $gigdata = $this->db->query($sql)->result_array();
        if($gigdata){
          foreach($gigdata as $data){
            $serviceCategory_id = $data ['serviceCategory_name'];
            $row['serviceCategory_name'] = $this->brequest_model->getServiceCategoryData($serviceCategory_id);
            $row['service_name']         = $data ['service_name'];
            $row['gig_title']            = $data ['gig_title'];
            $row['gig_description']      = $data ['gig_description'];
            $row['gig_package_desc']     = $data ['gig_package_desc'];
            $row['gig_price']            = $data ['gig_price'];
            $row['gig_duration']         = $data ['gig_duration'];
            $row['gig_picture']          = $data ['gig_picture'];
          }
        }
      }
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/paymentmethod', $row);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //SELECT PAYMENT METHOD CODE END

    //PLACE ORDER CODE START
    function placeorder($id = null){
      $row['gig_id'] = $id;
      if($row['gig_id']){
        $sql = 'SELECT * FROM gigs WHERE gig_id ='. $row['gig_id'] ;
        $gigdata = $this->db->query($sql)->result_array();
        if($gigdata){
          foreach($gigdata as $data){
            $serviceCategory_id = $data ['serviceCategory_name'];
            $row['serviceCategory_name'] = $this->brequest_model->getServiceCategoryData($serviceCategory_id);
            $row['service_name']         = $data ['service_name'];
            $row['gig_title']            = $data ['gig_title'];
            $row['gig_description']      = $data ['gig_description'];
            $row['gig_package_desc']     = $data ['gig_package_desc'];
            $row['gig_price']            = $data ['gig_price'];
            $row['gig_duration']         = $data ['gig_duration'];
            $row['gig_picture']          = $data ['gig_picture'];
            $row['freelancer_id']        = $data['user_id'];
          }
        }
      }
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/placeorder', $row);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //PLACE ORDER CODE START

    //SELECT GIG PAYMENT METHOD CODE START
    function borderreceipt($gig_id = null){
      $row['gig_id'] = $gig_id;
      if($row['gig_id']){
        $sql = 'SELECT * FROM gigs WHERE gig_id ='. $row['gig_id'] ;
        $gigdata = $this->db->query($sql)->result_array();
        if($gigdata){
          foreach($gigdata as $data){
            $serviceCategory_id = $data ['serviceCategory_name'];
            $row['serviceCategory_name'] = $this->brequest_model->getServiceCategoryData($serviceCategory_id);
            $row['service_name']         = $data ['service_name'];
            $row['gig_title']            = $data ['gig_title'];
            $row['gig_description']      = $data ['gig_description'];
            $row['gig_package_desc']     = $data ['gig_package_desc'];
            $row['gig_price']            = $data ['gig_price'];
            $row['gig_duration']         = $data ['gig_duration'];
            $row['gig_picture']          = $data ['gig_picture'];
            $row['buyer_id']             = $this->session->userdata('buyer_id');
            $row['freelancer_id']        = $data['user_id'];
          }
        }
      }
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/borderreceipt', $row);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //SELECT GIG PAYMENT METHOD CODE END

    //PAGE SELECT BUYER REQUEST PAYMENT METHOD CODE START
    function brorderreceipt($id = null){
      $data['$applyrequest_id'] = $id;
      if($data['$applyrequest_id']){
        $sql = 'SELECT * FROM applybuyerrequest WHERE applyRequest_id ='. $data['$applyrequest_id'] ;
        $gigdata = $this->db->query($sql)->result_array();
        if($gigdata){
          foreach($gigdata as $row){
            $data['description']      = $row['description'];
            $data['duration']         = $row['duration'];
            $data['budget']           = $row['budget'];
            $data['brequest_id']      = $row['brequest_id'];
            $data['freelancer_id']    = $row['freelancer_id'];
            $data['gig_id']           = $row['gig_id'];
            $data['time']             = $row['apply_time'];
            $data['buyer_id']         = $this->session->userdata('buyer_id');
          }
        }
      }
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/brorderreceipt', $data);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //PAGE SELECT BUYER REQUEST PAYMENT METHOD CODE END

    function approveorder($order_id){
      $this->buyer_model->update_status_approved($order_id);
      $sql       = 'SELECT * FROM orders WHERE order_id ='. $order_id;
      $orderdata = $this->db->query($sql)->result_array();
      if($orderdata){
        foreach($orderdata as $row){
          $earning['order_id']        = $order_id;
          $qwpearning['order_id']     = $order_id;
          $order_price                = $row['order_price'];
          $order_duration             = $row['order_duration'];
          $order_status               = $row['order_status'];
          $start_date                 = $row['start_date'];
          $complete_date              = $row['complete_date'];
          $gig_id                     = $row['gig_id'];
          $buyer_id                   = $row['buyer_id'];
          $earning['freelancer_id']   = $row['freelancer_id'];
          $earning['earn_amount']     = floor(($order_price * 90)/100);
          $qwpearning['earn_amount'] = $order_price - $earning['earn_amount'];
          $this->buyer_model->insert_qwpearning($qwpearning);
          $this->buyer_model->insert_earning($earning);
          $data1['user_id'] = $buyer_id;
          $data1['buyer_id'] = $buyer_id;
          $data1['freelancer_id'] = $row['freelancer_id'];
          $data1['order_id']      = $order_id;
          $data1['gig_id'] = $gig_id;
          $data1['notification_details'] = "Congrats! Your order is successfully completed. Click here to review....";
          $data1['status'] = "unread";
          $data1['time'] =  date('Y-m-d H:i:s');
          $this->notification_model->insert_notification($data1);
          redirect(base_url(). 'borderc/vcompletedorder/'.$order_id);
        }
      }
    }

    //VERIFY PAYMENT AND CREATE ORDER CODE START
    function verifypayment(){
      $gig_id = $this->input->post('gig_id');
      $this->form_validation->set_rules("card_no", "CardNumber", "required|is_natural_no_zero");
      $this->form_validation->set_rules("expiry_date", "ExpiryDate", "required");
      $this->form_validation->set_rules("cvv", "CVV", "required|is_natural_no_zero|callback_valid_cvv");

      $this->form_validation->set_message('unique_cardNo', 'Invalid Card Number');
      $this->form_validation->set_message('valid_date', 'Invalid data');
      $this->form_validation->set_message('valid_cvv', 'Invalid data');
      if($this->form_validation->run() == TRUE){
        $payment_method = $this->input->post('payment_method');
        $card_no        = $this->input->post('card_no');
        $expiry_date    = $this->input->post('expiry_date');
        $cvv            = $this->input->post('cvv');
        $data           = $this->buyer_model->verifypayment($card_no, $expiry_date, $cvv, $payment_method);
        if($data){
            $payment_id      = $data['payment_id'];
            $account_balance = $data['balance'];
            $gig_price       = $this->input->post("gig_price");
            //DEDUCT BALANCE
            $new_balance     = $account_balance - $gig_price;
            //ERROR IF BALANCE IS INSUFFICIENT
            if($new_balance < 1){
              echo "Insufficient balance";
              return false;
            }
            $balance_data['balance'] = $new_balance;
            //UPDATE NEW BALANCE
            $this->buyer_model->update_balance($balance_data,$payment_id);
            echo "balance successfully updated";
            $order_data['order_price']    =  $gig_price;
            $order_data['order_duration'] =  $this->input->post("gig_duration");
            $order_data['order_status']   =  "Active";
            $order_data['start_date']     =  $this->input->post("gig_startDate");
            $order_data['complete_date']  =  $this->input->post("gig_endDate");
            $order_data['buyer_id']       =  $this->input->post("buyer_id");
            $order_data['freelancer_id']  =  $this->input->post("freelancer_id");
            $order_data['gig_id']         =  $this->input->post("gig_id");
            //INSERT DATA INTO ORDER TABLE AND STRAT ORDER
            $order_id = $this->buyer_model->insert_order($order_data);
            //NOTIFICATION
            $data1['buyer_id'] = $this->session->userdata('buyer_id');
            $data1['user_id'] = $this->input->post("freelancer_id");
            $data1['freelancer_id'] = $this->input->post("freelancer_id");
            $data1['gig_id'] = $this->input->post("gig_id");
            $data1['notification_details'] = "Congrats! Your have a new order. Click here to review...";
            $data1['status'] = "unread";
            $data1['time'] =  date('Y-m-d H:i:s');
            $this->notification_model->insert_notification($data1);
            //LOAD ORDER REQUIREMENTS PAGE
            redirect(base_url(). 'borderc/orderrequirements/'. $order_id);
          //$this->orderrequirements($order_id);
          }
        else{
          $this->borderreceipt($gig_id);
        }
      }
      else{
        $this->borderreceipt($gig_id);
      }
    }
    //VERIFY PAYMENT AND CREATE ORDER CODE END

    //ORDER REQUIREMENTS PAGE CODE START
    function orderrequirements($order_id = null){
      $data['order_id']  = $this->uri->segment(3);
      if($data['order_id']){
        $this->load->view('buyer/includes/buyer_VPheader');
        $this->load->view('buyer/includes/buyer_serviceBar');
        $this->load->view('buyer/order/order_requirements', $data);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
    }
    //ORDER REQUIREMENTS PAGE CODE END

    //INSERT BUYER REQUIREMENTS AND START ORDER CODE START
    function orderstart(){
      //ORDER ID SEND TO PAGE
      $data['order_id']         = $this->input->post('order_id');
      //INSERT DATA
      $req_data['requirements'] = $this->input->post('requirements');
      $req_data['upload']       = $this->do_fileupload();
      $req_data['order_id']     = $this->input->post('order_id');
      $this->buyer_model->insert_requirements($req_data);
      redirect(base_url(). 'borderc/start_order/'. $data['order_id']);
    }
    //INSERT BUYER REQUIREMENTS AND START ORDER CODE END

    //PAGE VIEW ACTIVE ORDERS CODE START
    function start_order($order_id = null){
      $data['order_id'] = $this->uri->segment(3);
      $order_status = 'Delivered';
      $order_data = $this->buyer_model->getOrderStatusByOrderId($data['order_id'], $order_status);
      if($order_data){
          redirect(base_url().'borderc/va_orders');
      }
      else{
        $this->load->view('buyer/includes/buyer_VPheader');
        $this->load->view('buyer/includes/buyer_serviceBar');
        $this->load->view('buyer/order/order_activeview', $data);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
    }
    //PAGE VIEW START ORDER CODE END

    //PAGE VIEW ACTIVE ORDERS CODE START
    function vactiveorder($data){
      $row['order_id'] = $data;
      $order_status = 'Delivered';
      $order_data = $this->buyer_model->getOrderStatusByOrderId($row['order_id'], $order_status);
      if($order_data){
          redirect(base_url().'borderc/va_orders');
      }
      else{
        $this->load->view('buyer/includes/buyer_VPheader');
        $this->load->view('buyer/includes/buyer_serviceBar');
        $this->load->view('buyer/order/order_activeview', $row);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
    }
    //PAGE VIEW ACTIVE ORDERS CODE END

    //PAGE VIEW DELIVERED ORDERS CODE START
    function vdeliveredorder($data){
      $row['order_id'] = $data;
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/order/order_deliveredview', $row);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //PAGE VIEW DELIVERED ORDERS CODE END

    //PAGE VIEW COMPLETED ORDERS CODE START
    function vcompletedorder($data){
      $row['order_id'] = $data;
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer/includes/buyer_serviceBar');
      $this->load->view('buyer/order/order_completedview', $row);
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //PAGE VIEW COMPLETED ORDERS CODE END

    //PAGE VIEW REVISED ORDERS CODE START
    function reviseorder($order_id){
      $this->buyer_model->update_status_active($order_id);
      $data1['notification_details'] = "Your order is revised. Click here to review...";
      $data1['status'] = "unread";
      $data1['time'] =  date('Y-m-d H:i:s');
      $this->notification_model->updateOrderNotificationByOrderId($data1, $order_id);
      redirect(base_url() . "borderc/va_orders");
    }
    //PAGE VIEW REVISED ORDERS CODE END

    //PAGE VIEW REVISED ORDERS CODE START
    function requestdispute($order_id){
      $this->buyer_model->update_status_dispute($order_id);
      $data1['notification_details'] = "Dispute is open on your order. Oue team will review and let you know about the resolution.";
      $data1['status'] = "unread";
      $data1['time'] =  date('Y-m-d H:i:s');
      $this->notification_model->updateOrderNotificationByOrderId($data1, $order_id);
      redirect(base_url() . "borderc/va_orders");
    }
    //PAGE VIEW REVISED ORDERS CODE END

    //VALIDATION RULE FOR CALLBACK UNIQUE_TITLE  CODE START
    function unique_cardNo(){
      $card_no = $this->input->post('card_no');
      $buyer_id = $this->session->userdata('buyer_id');
      $check = $this->db->get_where('cardverification', array('card_no' => $card_no, 'buyer_id' => $buyer_id));
      if ($check->num_rows() > 0) {
        return TRUE;
      }
      return FALSE;
    }
    //VALIDATION RULE FOR CALLBACK UNIQUE_TITLE  CODE START

    //VALID DATE CODE Start
    function valid_date(){
      $card_no = $this->input->post('card_no');
      $expiry_date = $this->input->post('expiry_date');
      $buyer_id = $this->session->userdata('buyer_id');
      $check = $this->db->get_where('cardverification', array('card_no' => $card_no, 'expiry_date' => $expiry_date, 'buyer_id' => $buyer_id));
      if ($check->num_rows() > 0) {
        return TRUE;
      }
      return FALSE;
    }
     //VALID DATE CODE END

     //CHECK VALID CVV CODE START
    function valid_cvv(){
       $card_no = $this->input->post('card_no');
       $expiry_date = $this->input->post('expiry_date');
       $cvv = $this->input->post('cvv');
       $buyer_id = $this->session->userdata('buyer_id');
       $check = $this->db->get_where('cardverification', array('card_no' => $card_no, 'expiry_date' => $expiry_date, 'cvv' => $cvv , 'buyer_id' => $buyer_id));
       if ($check->num_rows() > 0) {
         return TRUE;
       }
       return FALSE;
    }
    //CHECK VALID CVV CODE END

    //DO UPLOAD FUNCTION CODE START
    function do_fileupload(){
      $file_name = $_FILES['upload']['name'];
  		$file_temp = $_FILES['upload']['tmp_name'];
  		$upload_folder = "orderfiles/";
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
   	}
    //DO UPLOAD FUNCTION CODE END
  }

?>
