<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('public_controller.php');

class Static_Page extends Public_Controller {	
	public function index() {
		$this->view('index');
	}
	
	public function view($method = '') {
		if(empty($method)) { $method = uri_string(); }
				
		if (file_exists(APPPATH . 'views/static/' . $method . '.php')) {
			$this->load->helper('inflector');
			$this->template->title(humanize($method));
			$this->template->build('static/' . $method);
		} elseif (file_exists(APPPATH . 'views/static/404.php')) {
			$this->template->title('Page Not Found');
			$this->template->build('static/404');
		} else {
			show_404($method);
		}
	}
}
