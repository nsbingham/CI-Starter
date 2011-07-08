<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/*
 
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 * @property CI_Benchmark $benchmark
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Exceptions $exceptions
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Hooks $hooks
 * @property CI_Image_lib $image_lib
 * @property CI_Input $input
 * @property CI_Language $language
 * @property MY_Loader $load
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Router $router
 * @property CI_Session $session
 * @property CI_Sha1 $sha1
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit_test
 * @property CI_Upload $upload
 * @property CI_URI $uri
 * @property CI_User_agent $user_agent
 * @property CI_Validation $validation
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 
 * ==== Autoloaded sparks ====
 * @property Formbuilder $formbuilder The form builder class
 * @property Template $template The Template spark class
 * @property Ion_auth $ion_auth The authorization class
*/
class MY_Controller extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		
		//The Public_Controller and Admin_Controller will inherit this logic
		if(isset($this->template)) $this->template->title($this->config->item('site_name'));
		$this->menu->container_tag_class = 'dropdown';		
	}
	
	// put a message at the top of the screen
	public function set_message($message, $type = 'error') {
		$data = compact('message', 'type');
		$this->template->set($data);
		$this->session->set_flashdata($data);
	}
	
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */