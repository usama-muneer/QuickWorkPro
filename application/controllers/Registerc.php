<?php

class Registerc extends CI_Controller{

  //__construct CODE START
  function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));
    if($this->session->userdata('logged_in') == true){
      if($this->session->userdata('user_type') == 'buyer'){
        redirect(base_url() . "bprofilec/view_profile");
      }
      elseif($this->session->userdata('user_type') == 'freelancer'){
        redirect(base_url() . "profilec/view_profile");
      }
    }
  }
  //__construct CODE END

  //SIGNUP PAGE LOAD WITH ERROR CODE START
  public function signup(){
    $this->load->view('home/includes/home_header');
    $this->load->view('home/home_signup');
    $this->load->view('home/includes/home_footer');
    $this->load->view('home/includes/home_model');
    $this->load->view('home/includes/home_modelError');
    $this->load->view('home/includes/home_end');
  }
  //SIGNUP PAGE LOAD WITH ERROR CODE END

	//BUYER FORM VALIDATION CODE START
	function bForm_validation(){
		//set validation rules
    $this->form_validation->set_rules("b_usernamejoin", "Username", "trim|regex_match[/^[a-z0-9]+$/]|is_unique[users.username]|min_length[5]|max_length[12]");
		$this->form_validation->set_rules("b_emailjoin", "Email", "trim|is_unique[users.email]|valid_email");
		$this->form_validation->set_rules("b_passwordjoin", "Password", "trim|alpha_numeric|required|min_length[8]");
		$this->form_validation->set_rules("b_confirmpasswordjoin", "Password Confirmation", "trim|required|matches[b_passwordjoin]");

    //Error message if user or email already exists
    $errorMsg = $this->form_validation->set_message('is_unique', 'The {field} already exist');

		if($this->form_validation->run() == TRUE){
      //make salt Password
      $salt = $this->user_model->salt();
      $password = $this->user_model->makePassword($this->input->post("b_passwordjoin"),$salt);

			//load all data into array
			$data = array(
				"username" => $this->input->post("b_usernamejoin"),
				"email"    => $this->input->post("b_emailjoin"),
				"password" => $password,
        "salt"     => $salt,
				"type"     => "buyer",
        "status"   => "Active"
			);

			//pass data to model insert function
			$this->user_model->insert_user($data);
      $success = 'registered';
			redirect(base_url() . "homec/signup/". $success);
		}
		else
		{
      $this->signup();
		}
	}
	//BUYER FORM VALIDATION CODE END


	//FREELANCER FORM VALIDATION CODE START
	function fForm_validation(){

		//load form_validation library
		$this->load->library('form_validation');

		//set validation rules
		$this->form_validation->set_rules("f_usernamejoin", "Username", "trim|required|regex_match[/^[a-z0-9]+$/]|min_length[5]|max_length[12]|is_unique[users.username]");
		$this->form_validation->set_rules("f_emailjoin", "Email", "trim|required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("f_passwordjoin", "Password", "trim|alpha_numeric|required|min_length[8]");
		$this->form_validation->set_rules("f_confirmpasswordjoin", "Password Confirmation", "trim|required|matches[f_passwordjoin]");

    //error message if email and username already exist in database
    $errorMsg = $this->form_validation->set_message('is_unique', 'The {field} already exist');

		if($this->form_validation->run() == TRUE){
      //load model and pass data to model insert function using $data array

      //make salt Password
      $salt = $this->user_model->salt();
      $password = $this->user_model->makePassword($this->input->post("f_passwordjoin"),$salt);

			//load all data into array
			$data = array(
        "username" => $this->input->post("f_usernamejoin"),
				"email"    => $this->input->post("f_emailjoin"),
				"password" => $password,
        "salt"     => $salt,
				"type"     => "freelancer",
        "status"   => "Active"
			);

			//pass data to model insert function
			$this->user_model->insert_user($data);
      $success = 'registered';
      redirect(base_url() . "homec/signup/". $success);
		}
		else
		{
      $this->signup();
		}
	}
	//FREELANCER FORM VALIDATION CODE END


	//USER INSERTED FUNCTION CODE START
	public function user_inserted(){
    redirect(base_url() . "login");
	}
	//USER INSERTED FUNCTION CODE END
}

?>
