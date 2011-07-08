<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('public_controller.php');

class Test extends Public_Controller {
	public function index() {
		phpinfo();
	}
}
