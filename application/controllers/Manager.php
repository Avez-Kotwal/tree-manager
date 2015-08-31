<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		//Login Check
	    if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}		
		$router =& load_class('Router', 'core');
		$this->load->helper(array('form', 'url'));
		define('CLASS_NAME', (string) ucfirst($router->fetch_class()));
		define('METHOD_NAME', (string) ucfirst($router->fetch_method()));
		$user_session_details = $this -> session -> all_userdata();
		//User Group Check
		if(CLASS_NAME != ucfirst($user_session_details['loggedin_group_name'])){
			// redirect them to the login page
			redirect(strtolower($user_session_details['loggedin_group_name']).'-dashboard', 'refresh');
		}
    }
		
	/**
	 * Dashboard Page for this controller.
	 */
	public function Dashboard() {
		$className = (string) ucfirst($this->router->class);
		$methodName = (string) ucfirst($this->router->method);		
		$this->load->view("blocks/Common/head");
		//$this->load->view("blocks/Common/$className-Header");
		//$this->load->view("blocks/Common/$className-LeftBar");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/Common/LeftBar");
		$this->load->view("blocks/$className/$methodName");
		//$this->load->view("blocks/Common/$className-RightBar");
		$this->load->view("blocks/Common/RightBar");
		$this->load->view("blocks/Common/footer");
	}
}
