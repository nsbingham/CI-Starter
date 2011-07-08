<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller
{
	
	function __construct() {
		parent::__construct();
		
		if(!$this->ion_auth->is_admin()) {
			$this->set_message('Admin access required');
			redirect('account/login');
		}
		
		$this->nav = array(
			'manage/browse/users' => array('label' => 'Users'),
			'manage/browse/groups' => array('label' => 'Groups'),
		);
		
		// logic for template
	    $this->template->set_layout('admin');
		$this->template
			->set_partial('metadata','partials/admin/metadata')
			->set_partial('header','partials/admin/header')
			->set_partial('footer','partials/admin/footer');

		$this->template->append_metadata(css('style.css'));
		$this->template->append_metadata(css('dropdown/dropdown.limited.css'));
		$this->template->append_metadata(css('dropdown/themes/default/default.css'));
	}
	
}
