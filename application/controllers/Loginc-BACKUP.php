<?php

class Loginc extends CI_Controller{

    function __construct(){
      parent::__construct();
    }

    public function login(){
      $this->load->view('home/includes/home_lheader');
      $this->load->view('home/home_login');
      $this->load->view('home/includes/home_footer');
      $this->load->view('home/includes/home_model');
      $this->load->view('home/includes/home_end');
    }


    public function userlogin(){


			//load model and pass data to model insert function using $data array
			$this->load->model('user_model');

			//load all data into variables
				$username = $this->input->post("u_usernamelogin");
				$password = $this->input->post("u_passwordlogin");

			//pass data to model insert function
			if($this->user_model->login_user($username,$password)){
          $session_data = array(
            'id'       => $id,
            'username' => $username,
            'email'    => $email,
            'loggedIn' => true,
            'type'     => $type
          );
          $this->session->set_userdata($session_data);
			    redirect(base_url() . "userc/viewprofile");
      }
      else{
        $this->session->set_flastdata('error','Invalid username and password');
        redirect(base_url() . "loginc/login");
      }
		}
		else
		{
      $this->login();
		}
  }

  public function enter(){
    if($this->session->userdata('username') != ''){
      echo '<h1>  Welcome - '.$this->session_userdata('username').'</h1>';
      echo '<label><a href="'. base_url() .'auth/logout">Logout</a></label>';
    }
    else{
      redirect(base_url() . "users/view/index");
    }
  }
  function logout(){
    $this->session->unset_userdata('username');
    redirect(base_url() . "users/view/index");
  }
}

 ?>
