<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$router =& load_class('Router', 'core');
		$this->load->helper(array('form', 'url'));
		define('CLASS_NAME', (string) ucfirst($router->fetch_class()));
		define('METHOD_NAME', (string) ucfirst($router->fetch_method()));
    }
		
	/**
	 * Dashboard Page for this controller.
	 */
	public function Dashboard() {
		$className = (string) ucfirst($this->router->class);
		$methodName = (string) ucfirst($this->router->method);
		$this->load->view("blocks/Common/head");
		$this->load->view("blocks/Common/$className-Header");
		$this->load->view("blocks/Common/$className-LeftBar");
		$this->load->view("blocks/$className/$methodName");
		$this->load->view("blocks/Common/$className-RightBar");
		$this->load->view("blocks/Common/footer");
	}
}
