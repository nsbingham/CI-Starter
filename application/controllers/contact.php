<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('public_controller.php');

class Contact extends Public_Controller {
	
	static $contact_form = array(
		array('field'   => 'email'
			  , 'label' => 'E-Mail'
			  , 'rules' => 'valid_email'
			  ),
		array('field'   => 'message'
			  , 'label' => 'Message'
			  , 'rules' => 'trim|required'
			  )
	);

	public function index() {
		$this->formbuilder->defaults['email'] = $this->session->userdata('email');

		$this->form_validation->set_rules(self::$contact_form);
		if($this->form_validation->run()) {
			// TODO: send mail here
			$this->set_message('Your message was sent. Thank you for your feedback.', 'success');
		}
		
		$this->template->build('contact');
	}

}
