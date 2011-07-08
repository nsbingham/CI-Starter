<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('public_controller.php');

class Account extends Public_Controller {
	
	static $forgot_form = array(
		array('field'   => 'email'
			  , 'label' => 'E-Mail'
			  , 'rules' => 'required|valid_email'
			  )
	);

	static $login_form = array(
		array('field'   => 'email'
			  , 'label' => 'E-Mail'
			  , 'rules' => 'required|valid_email'
			  ),
		array('field'   => 'password'
			  , 'label' => 'Password'
			  , 'rules' => 'required'
			  )
	);
	
	static $register_form = array(
		array('field'   => 'email'
			  , 'label' => 'E-Mail'
			  , 'rules' => 'required|valid_email'
			  ),
		array('field'   => 'first_name'
			  , 'label' => 'First Name'
			  , 'rules' => 'trim|required'
			  ),
		array('field'   => 'last_name'
			  , 'label' => 'Last Name'
			  , 'rules' => 'trim|required'
			  ),
		array('field'   => 'password'
			  , 'label' => 'Password'
			  , 'rules' => 'trim|required'
			  )
	);

	public function index() {
		if (!$this->ion_auth->logged_in()) { redirect('account/login'); }
		
		$this->template->set($this->ion_auth->profile());
		$this->template->build('account/index');
	}
	
	
	public function login() {
		
		$this->form_validation->set_rules(self::$login_form);
		if($this->form_validation->run()) {
			if($this->ion_auth->login($this->input->post('email'), $this->input->post('password'))) {
				redirect('');
			} else {
				$this->set_message($this->ion_auth->errors());
				$_POST['email'] = '';
				$_POST['password'] = '';
			}
		}

		$this->template->build('account/login');
	}
	
	public function logout() {
		$this->ion_auth->logout();
		$this->set_message('You have logged out', 'success');
		redirect('');
	}
	
	public function register() {
		$this->form_validation->set_rules(self::$register_form);
		if($this->form_validation->run()) {
			
			$profile = array();
			foreach(array('first_name', 'last_name', 'phone_number') as $field) {
				$profile[$field] = $this->input->post($field);
			}
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->ion_auth->register($email, $password, $email, $profile)) {
				$this->ion_auth->login($email, $password, TRUE);
				$this->set_message($this->ion_auth->messages(), 'success');
				redirect('account');
			} else {
				$this->set_message($this->ion_auth->errors());
			}
		}
		$this->template->build('account/register');
	}

	public function forgot() {
		$this->template->build('account/forgot');
	}
}
