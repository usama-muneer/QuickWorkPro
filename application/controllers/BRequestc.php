<?php

  class BRequestc extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('notification_model');
      $this->load->model('brequest_model');

      //prevent user if not logged in into the system
      if($this->session->userdata('logged_in') != true ){
        redirect(base_url(), '');
      }
      //prevent buyer to access the gig pages
      if($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }
    }

    //page VIEW ALL BUYER REQUEST CODE START
    function va_brequest(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer//includes/buyer_serviceBar');
      $this->load->view('buyer/all_brequest');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //page VIEW ALL BUYER REQUEST CODE START

    //page VIEW BUYER REQUEST CODE START
    function view_brequest(){
      $this->load->view('buyer/includes/buyer_VPheader');
      $this->load->view('buyer//includes/buyer_serviceBar');
      $this->load->view('buyer/brequest/view_brequest');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //page EDIT BUYER REQUEST CODE END


    //PAGINATION CODE Starting
    function gig_pagination(){
      $this->load->view('buyer/ajax_pagination');
    }
    //PAGINATION CODE END

    //GIG PAGINATION LINK CODE START
    function pagination(){
      $this->load->model('ajax_pagination_model');
      $this->load->library('pagination');
      $config = array();
      $config["base_url"] = "#";
      $config["total_rows"] = $this->ajax_pagination_model->count_all();
      $config["per_page"] = 3;
      $config["uri_segment"] = 3;
      $config["use_page_numbers"] = TRUE;
      $config["full_tag_open"] = '<ul class="pagination">';
      $config["full_tag_close"] = '</ul>';
      $config["first_tag_open"] = '<li>';
      $config["first_tag_close"] = '</li>';
      $config["last_tag_open"] = '<li>';
      $config["last_tag_close"] = '</li>';
      $config["next_link"] = '$gt;';
      $config["next_tag_open"] = '<li>';
      $config["next_tag_close"] = '</li>';
      $config["prev_link"] = '$lt;';
      $config["prev-tag_open"] = '<li>';
      $config["prev_tag_close"] = '</li>';
      $config["cur_tag_open"] = '<li class = "active"><a href="#">';
      $config["cur_tag_close"] = '</a></li>';
      $config["num_tag_open"] = '<li>';
      $config["num_tag_close"] = '</li>';
      $config["num_links"] = 1;
      $this->pagination->initialize($config);
      $page = $this->uri->segment(3);
      $start = ($page - 1) * $config["per_page"];

      $output = array(
        'pagination_link' =>  $this->pagination->create_links(),
        'gig_table'       =>  $this->ajax_pagination_model->fetch_details($config["per_page"], $start)
      );

      echo json_encode($output);
    }
    //GIG PAGINATION LINK CODE END

    //Page CREATE BUYER REQUEST CODE START
    function create_brequest(){
      $data['title'] = "Create Buyer Request";
      $this->load->view('buyer/includes/buyer_VPheader', $data);
      $this->load->view('buyer//includes/buyer_serviceBar');
      $this->load->view('buyer/brequest/create_brequest');
      $this->load->view('buyer/includes/buyer_footer');
      $this->load->view('buyer/includes/buyer_end');
    }
    //page CREATE BUYER REQUEST CODE END

    //CREATE BUYER REQUEST CODE START
    function createbrequest(){
      $this->form_validation->set_rules("description", "description", "trim|required|callback_unique_description");
      $this->form_validation->set_rules("budget", "budget", "trim|required|max_length[3]|greater_than_equal_to[5]");
      //Error message if user or email already exists
      $this->form_validation->set_message('unique_description', 'The {field} already exist');

      $this->form_validation->set_message('greater_than_equal_to', 'The budget must be greater than $5.');

      if($this->form_validation->run() == TRUE){
        //profile create code start
        $serviceCategory_id = $this->input->post('serviceCategory_name');
        $data['serviceCategory_name'] = $this->brequest_model->getServiceCategoryData($serviceCategory_id);
        $data ['service_name'] = $this->input->post('service_name');
        $data ['description'] = $this->input->post('description');
        $data ['budget'] = $this->input->post('budget');
        $data ['duration'] = $this->input->post('duration');
        $data ['brequest_status'] = 'Pending';
        if($this->session->userdata('buyer_id')){
          $data ['buyer_id'] = $this->session->userdata('buyer_id');
          $this->load->model('brequest_model');
          $this->brequest_model->insert_brequest($data);
          $data1['user_id'] = $this->session->userdata('buyer_id');
          $data1['notification_details'] = "Your request is now Live. Review your unread offers";
          $data1['status'] = "unread";
          $data1['time'] =  date('Y-m-d H:i:s');
          $this->notification_model->insert_notification($data1);
          redirect(base_url() . 'brequestc/view_brequest', 'refresh');// Redirect to Success page
          //profile create code end
          }
        else{
          echo "Please Enter Correct Data";
        }
      }
      else{
        $this->create_brequest();
      }
    }
    //CREATE BUYER REQUEST CODE END

    //page EDIT BUYER REQUEST CODE START
    function edit_brequest($id = null){
      if($id)
        $this->load->model('brequest_model');
        $brequestdata = $this->brequest_model->getBRequestData($id);
        if($brequestdata){
          foreach ($brequestdata as $data) {
            $row['serviceCategory_name']   = $data['serviceCategory_name'];
            $row['brequest_id']           = $data['brequest_id'];
            $row['service_name']          = $data['service_name'];
            $row['description']           = $data['description'];
            $row['duration']              = $data['duration'];
            $row['budget']                = $data['budget'];
          }
          $this->load->view('buyer/includes/buyer_VPheader');
          $this->load->view('buyer//includes/buyer_serviceBar');
          $this->load->view('buyer/brequest/edit_brequest', $row);
          $this->load->view('buyer/includes/buyer_footer');
          $this->load->view('buyer/includes/buyer_end');
        }
      }
    //page EDIT BUYER REQUEST CODE END

    //CREATE BUYER REQUEST CODE START
    function editbrequest($brequest_id){
      $this->form_validation->set_rules("description", "description", "trim|required");
      $this->form_validation->set_rules("budget", "budget", "trim|required|max_length[3]|greater_than_equal_to[5]");
      //Error message if user or email already exists
      $this->form_validation->set_message('unique_description', 'The {field} already exist');

      $this->form_validation->set_message('greater_than_equal_to', 'The budget must be greater than $5.');

      if($this->form_validation->run() == TRUE){
        //profile create code start
        $serviceCategory_id           = $this->input->post('serviceCategory_name');
        if(is_numeric($serviceCategory_id)){
          $data['serviceCategory_name'] = $this->brequest_model->getServiceCategoryData($serviceCategory_id);
        }
        else{
          $data['serviceCategory_name'] = $this->input->post('serviceCategory_name');
        }
        $data ['service_name']        = $this->input->post('service_name');
        $data ['description']         = $this->input->post('description');
        $data ['budget']              = $this->input->post('budget');
        $data ['duration']            = $this->input->post('duration');
        $data ['brequest_status']     = 'Pending';
        if($brequest_id){
          $this->load->model('brequest_model');
          $this->brequest_model->update_brequest($data,$brequest_id);
          $data1['user_id'] = $this->session->userdata('buyer_id');
          $data1['brequest_id'] = $brequest_id;
          $data1['notification_details'] = "Your request is updated successfully. Click here to review your request offers";
          $data1['status'] = "unread";
          $data1['time'] =  date('Y-m-d H:i:s');
          $this->notification_model->insert_notification($data1);
          redirect(base_url() . 'brequestc/view_brequest', 'refresh');// Redirect to Success page
          //profile create code end
        }
        else{
          echo "Please Enter Correct Data";
        }
      }
      else{
        $this->edit_brequest($brequest_id);
      }
    }
    //CREATE BUYER REQUEST CODE END

    //Dynamically service name load in create buyer request page  code start
    function ajaxGetServiceName(){
      if($this->input->post('serviceCategory_id')){
        $serviceCategory_id = $this->input->post('serviceCategory_id');
        $sql = "SELECT * FROM services WHERE serviceCategory_id =" . $serviceCategory_id;
      }
      else{
        $sql = "SELECT * FROM services";
      }
      $data = $this->db->query($sql, array($serviceCategory_id))->result_array();
      if($data){
        echo '<option value="">Select Service</option>';
        foreach($data as $row){
            echo '<option value="'.$row['service_name'].'">'.$row['service_name'].'</option>';
        }
      }
    }
    //Dynamically service name load in create buyer request page  code start

    //PAUSE BUYER REQUEST CODE START
    function pausebrequest($id){
      $brequest_id = $id;
      if($brequest_id){
        $data['brequest_status'] = 'Pause';
        $this->db->where('brequest_id', $brequest_id);
        $this->db->update('buyerrequest', $data);
        redirect(base_url(). "brequestc/view_brequest");
      }
    }
    //PAUSE BUYER REQUEST CODE END

    //RESUME BUYER REQUEST CODE START
    function resumebrequest($id){
      $brequest_id = $id;
      if($brequest_id){
        $data['brequest_status'] = 'Active';
        $this->db->where('brequest_id', $brequest_id);
        $this->db->update('buyerrequest', $data);
        redirect(base_url(). "brequestc/view_brequest");
      }
    }
    //RESUME BUYER REQUEST CODE END

    //DELETE BUYER REQUEST CODE START
    function deletebrequest($id){
      $brequest_id = $id;
      if($brequest_id){
        $data['brequest_status'] = 'Deleted';
        $this->db->where('brequest_id', $brequest_id);
        $this->db->update('buyerrequest', $data);
        redirect(base_url(). "brequestc/view_brequest");
      }
    }
    //DELETE BUYER REQUEST CODE END

    //VALIDATION RULE FOR CALLBACK UNIQUE_TITLE  CODE START
    function unique_description(){
      $description = $this->input->post('description');
      $buyer_id = $this->session->userdata('buyer_id');
      $check = $this->db->get_where('buyerrequest', array('description' => $description, 'buyer_id' => $buyer_id));
      if ($check->num_rows() > 0) {
        return FALSE;
      }
      return TRUE;
    }
    //VALIDATION RULE FOR CALLBACK UNIQUE_TITLE  CODE START

    //page EDIT BUYER REQUEST CODE START
    function viewirequest($id = null){
      $row['brequest_id'] = $id;
      if($row['brequest_id'])
        $this->load->model('brequest_model');
        $brequestdata = $this->brequest_model->getBRequestData($row['brequest_id']);
        if($brequestdata){
          foreach ($brequestdata as $data) {
            $row['service_name']          = $data['service_name'];
            $row['description']           = $data['description'];
            $row['duration']              = $data['duration'];
            $row['budget']                = $data['budget'];
          }
          $this->load->view('buyer/includes/buyer_VPheader');
          $this->load->view('buyer//includes/buyer_serviceBar');
          $this->load->view('buyer/viewirequest', $row);
          $this->load->view('buyer/includes/buyer_footer');
          $this->load->view('buyer/includes/buyer_end');
        }
      }
    //page EDIT BUYER REQUEST CODE END

    //VIEW ALL GIG CODE START
    function va_gig(){
      $sql = 'SELECT * FROM gigs WHERE gig_status= "Active"';
      $g_data = $this->db->query($sql)->result_array();
      if($g_data){
        $gig_data['gig_data'] = $g_data;
        $this->load->view('buyer/includes/buyer_VPheader');
        $this->load->view('buyer//includes/buyer_serviceBar');
        $this->load->view('buyer/va_gig', $gig_data);
        $this->load->view('buyer/includes/buyer_footer');
        $this->load->view('buyer/includes/buyer_end');
      }
    }
    //VIEW ALL GIG CODE START

  }

?>
