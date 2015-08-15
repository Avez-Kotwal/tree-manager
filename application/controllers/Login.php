<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @package    CI
* @subpackage Login Controller
* @author     Techno-Harbour Space
*/

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$router =& load_class('Router', 'core');
		$this->load->helper(array('form', 'url'));
		define('CLASS_NAME', (string) ucfirst($router->fetch_class()));
		define('METHOD_NAME', (string) ucfirst($router->fetch_method()));
    }

/**
 *  
 * Index method to load login page
 * 
*/
	public function index() {
		$this->load->view("blocks/Common/head");		
		$this->load->view("blocks/".CLASS_NAME."/index");
	}
}
