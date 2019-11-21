<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminc extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Acategory_model');
    $this->load->model('Adashboard_model');
    $this->load->model('Aservice_model');
    $this->load->model('Afreelancer_model');
    $this->load->model('Abuyer_model');
    $this->load->model('Agig_model');
    $this->load->model('Aorder_model');
    $this->load->model('Abrequest_model');
    $this->load->model('Aearning_model');
    if($this->session->userdata('logged_in') != true){
      redirect(base_url() . "admin_login");
    }
    if($this->session->userdata('user_type') == 'buyer'){
      redirect(base_url() . "brequestc/va_gig");
    }
    elseif($this->session->userdata('user_type') == 'freelancer'){
      redirect(base_url() . "profilec/view_profile");
    }
  }

  //dashboard start
  function index(){
    $user_data = $this->Adashboard_model->getAllUsers();
    if($user_data){
      foreach ($user_data as $user_row) {
        $data['tusers'] = $user_row['total_users'];
      }
    }
    $gig_data = $this->Adashboard_model->getAllGigs();
    if($gig_data){
      foreach ($gig_data as $gig_row) {
        $data['tgigs'] = $gig_row['total_gigs'];
      }
    }
    $request_data = $this->Adashboard_model->getAllRequests();
    if($request_data){
      foreach ($request_data as $request_row) {
        $data['trequests'] = $request_row['total_requests'];
      }
    }
    $order_data = $this->Adashboard_model->getAllOrders();
    if($order_data){
      foreach ($order_data as $order_row) {
        $data['torders'] = $order_row['total_orders'];
      }
    }
    $category_data = $this->Adashboard_model->getAllCategories();
    if($category_data){
      foreach ($category_data as $category_row) {
        $data['tcategories'] = $category_row['total_categories'];
      }
    }
    $service_data = $this->Adashboard_model->getAllServices();
    if($service_data){
      foreach ($service_data as $service_row) {
        $data['tservices'] = $service_row['total_services'];
      }
    }
    $freelancer_data = $this->Adashboard_model->getAllFreelancers();
    if($freelancer_data){
      foreach ($freelancer_data as $freelancer_row) {
        $data['tfreelancers'] = $freelancer_row['total_freelancers'];
      }
    }
    $buyer_data = $this->Adashboard_model->getAllBuyers();
    if($buyer_data){
      foreach ($buyer_data as $buyer_row) {
        $data['tbuyers'] = $buyer_row['total_buyers'];
      }
    }
    $row['title'] = "Admin Dashboard | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/admin_dashboard', $data);
    $this->load->view('admin/includes/admin_bodyend');
  }//dashboard end

  function categories(){
    $category_data['data'] = $this->Acategory_model->view_categories()->result_array();
    $row['title'] = "Categories | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/view_categories.php', $category_data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function services(){
    $service_data['category_data'] = $this->Acategory_model->view_categories()->result_array();
    $service_data['service_data'] = $this->Aservice_model->view_services()->result_array();
    $row['title'] = "Services | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/view_services.php', $service_data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function freelancers(){
    $data['freelancer_data'] = $this->Afreelancer_model->view_freelancers()->result_array();
    if($data){
      $row['title'] = "Freelancers | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/users/view_freelancers', $data);
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
    else {
      $row['title'] = "Freelancers | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/users/view_freelancers');
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function buyers(){
    $data['buyer_data'] = $this->Abuyer_model->view_buyers()->result_array();
    if($data){
      $row['title'] = "Buyers | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/users/view_buyers', $data);
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
    else{
      $row['title'] = "Buyers | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/users/view_buyers');
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function active_gigs(){
    $data['gig_data'] = $this->Agig_model->viewActive_gigs()->result_array();
    if($data){
    $row['title'] = "Active Gigs | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/gigs/active_gigs', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
    }
    else{
      $row['title'] = "Active Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/active_gigs');
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function pending_gigs(){
    $data['gig_data'] = $this->Agig_model->viewPending_gigs()->result_array();
    if($data){
      $row['title'] = "Pending Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/pending_gigs', $data);
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
    else{
      $row['title'] = "Pending Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/pending_gigs');
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function deleted_gigs(){
    $data['gig_data'] = $this->Agig_model->viewDeleted_gigs()->result_array();
    if($data){
      $row['title'] = "Deleted Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/deleted_gigs', $data);
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
    else{
      $row['title'] = "Deleted Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/deleted_gigs');
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function deactivated_gigs(){
    $data['gig_data'] = $this->Agig_model->viewDeactivated_gigs()->result_array();
    if($data){
      $row['title'] = "Deactivated Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/deactivated_gigs', $data);
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function view_gigs(){
    $data['gig_data'] = $this->Agig_model->view_gigs()->result_array();
    if($data){
    $row['title'] = "All Gigs | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/gigs/view_gigs', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
    }
    else{
      $row['title'] = "All Gigs | QWP";
      $this->load->view('admin/includes/admin_header', $row);
      $this->load->view('admin/includes/admin_sidebar');
      $this->load->view('admin/includes/admin_navbar');
      $this->load->view('admin/gigs/view_gigs');
      $this->load->view('admin/includes/admin_bodyend');
      $this->load->view('admin/includes/admin_modals');
    }
  }

  function active_orders(){
    $data['order_data'] = $this->Aorder_model->viewActive_orders()->result_array();
    $row['title'] = "Active Orders | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/orders/active_orders', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function completed_orders(){
    $data['order_data'] = $this->Aorder_model->viewCompleted_orders()->result_array();
    $row['title'] = "Completed Orders | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/orders/completed_orders', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function cancelled_orders(){
    $data['order_data'] = $this->Aorder_model->viewCancelled_orders()->result_array();
    $row['title'] = "Cancelled Orders | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/orders/cancelled_orders', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function disputed_orders(){
    $data['order_data'] = $this->Aorder_model->viewDisputed_orders()->result_array();
    $row['title'] = "Disputed Orders | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/orders/disputed_orders', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function view_orders(){
    $data['order_data'] = $this->Aorder_model->view_orders()->result_array();
    $row['title'] = "All Orders | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/orders/view_orders',$data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function active_requests(){
    $data['brequest_data'] = $this->Abrequest_model->viewActive_brequests()->result_array();
    $row['title'] = "Active Requests | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/buyerrequests/active_requests', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function pending_requests(){
    $data['brequest_data'] = $this->Abrequest_model->viewPending_brequests()->result_array();
    $row['title'] = "Pending Requests | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/buyerrequests/pending_requests', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function deleted_requests(){
    $data['brequest_data'] = $this->Abrequest_model->viewDeleted_brequests()->result_array();
    $row['title'] = "Deleted Requests | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/buyerrequests/deleted_requests', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function view_requests(){
    $data['brequest_data'] = $this->Abrequest_model->view_brequests()->result_array();
    $row['title'] = "All Requests | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/buyerrequests/view_requests', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function view_flearnings(){
    $data['fearning_data'] = $this->Aearning_model->viewFreelancer_earnings()->result_array();
    $row['title'] = "Freelancers Earnings | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/earnings/view_flearnings', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function view_qwpearnings(){
    $data['qwpearning_data'] = $this->Aearning_model->viewQWP_earnings()->result_array();
    $row['title'] = "QWP Earnings | QWP";
    $this->load->view('admin/includes/admin_header', $row);
    $this->load->view('admin/includes/admin_sidebar');
    $this->load->view('admin/includes/admin_navbar');
    $this->load->view('admin/earnings/view_qwpearnings', $data);
    $this->load->view('admin/includes/admin_bodyend');
    $this->load->view('admin/includes/admin_modals');
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url(). "admin_login");
  }
}
?>
