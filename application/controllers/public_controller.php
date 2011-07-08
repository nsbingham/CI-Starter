<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/*
 * @property Menu $menu Menu class
*/
class Public_Controller extends MY_Controller
{
	
	function __construct(){
		parent::__construct();
		
		// set up navigation
		$this->nav = array(
			'products' => array('label' => 'Products'),
				'products/1' => array('label' => 'Product 1', 'parent_id' => 'products'),
				'products/2' => array('label' => 'Product 2', 'parent_id' => 'products'),
				'products/3' => array('label' => 'Product 3', 'parent_id' => 'products'),			
			'services' => array('label' => 'Services'),
			'about' => array('label' => 'About'),
				'blog' => array('label' => 'Blog', 'parent_id' => 'about'),
				'contact' => array('label' => 'Contact', 'parent_id' => 'about')
		);
		
		// logic for template
		if(is_object($this->template)) {
		$this->template->set_layout('default')
			->set_partial('metadata','partials/desktop/metadata')
			->set_partial('header','partials/desktop/header')
			->set_partial('footer','partials/desktop/footer');

		//public logic goes here
		$this->template->append_metadata(css('style.css'));
		$this->template->append_metadata(css('dropdown/dropdown.limited.css'));
		$this->template->append_metadata(css('dropdown/themes/default/default.css'));
		}
	}
	
}

