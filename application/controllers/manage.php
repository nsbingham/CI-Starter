<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('admin_controller.php');

class Manage extends Admin_Controller {
	
	static $tables = array(
		'users' => 'username, ip_address, email, from_unixtime(created_on) AS created'
		, 'groups' => '*'
		, 'profiles' => '*'
		);
	
	public function index() {
		$this->template->build('manage/index');
	}

	public function browse($table, $start = 0, $sort = null) {
		if(!array_key_exists($table, self::$tables)) {
			$this->set_message("Table $table not editable");
			redirect('manage');
		}
		
		$this->load->library('table');
		$this->db->select(self::$tables[$table]);
		$q = $this->db->get($table, 20, $start);
		
		$this->template->set('grid', $this->table->generate($q));
		$pagination = '';
		$this->template->build('manage/browse', compact('table', 'pagination'));
	}
}
