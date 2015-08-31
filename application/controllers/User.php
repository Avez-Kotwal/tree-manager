<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
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
		if(is_array($user_session_details)){
			if(CLASS_NAME != ucfirst($user_session_details['loggedin_group_name'])){
				// redirect them to the login page
				redirect(strtolower($user_session_details['loggedin_group_name']).'-dashboard', 'refresh');
			}
		}		
    }
	
		
	/**
	 * Dashboard page controller.
	 */
	public function Dashboard() {
		$data['job_list'] = array();
		$user_session_details = $this -> session -> all_userdata();
		$this->load->model("common_model");
		$data['jobs'] = $this->common_model->get_complete_jobs('id', $user_session_details['user_id']);
		$data['job_details_list'] = $this->common_model->prepare_job_details($data['jobs']);			
		$this->load->view("blocks/Common/head");
		//$this->load->view("blocks/Common/$className-Header");
		//$this->load->view("blocks/Common/$className-LeftBar");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/".CLASS_NAME."/LeftBar");
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME, $data);
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME."-RightBar");
		$this->load->view("blocks/Common/footer");
	}
	
	
	/**
	 * Jobs page controller.
	 */
	public function Jobs() {
		$this->load->view("blocks/Common/head");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/".CLASS_NAME."/LeftBar");
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME);
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME."-RightBar");
		$this->load->view("blocks/Common/footer");
	}
	
	/**
	 * Jobs details page controller.
	 */
	public function JobDetails() {
		$this->load->view("blocks/Common/head");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/".CLASS_NAME."/LeftBar");
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME);
		$this->load->view("blocks/Common/footer");
	}
	
	/**
	 * Add New Job page controller.
	 */
	public function AddNewJob() {				
		//Form validation section
		$this->load->library('form_validation');
		$this->load->model("common_model");
		$this->form_validation->set_error_delimiters('<label class="control-label">', '</label>');	 
		
		if ($this->form_validation->run('add-job') == FALSE) {
			$project_managers = array();
			$innerLoop = 0;
			$data['job_types'] = $this->common_model->get_form_util('job_types');
			$data['job_events'] = $this->common_model->get_form_util('job_events');
			$project_managers_list = $this->common_model->get_form_util('users_groups', 'group', 2);
			foreach ($project_managers_list as $key => $value) {
				$manager_details = $this->ion_auth->user($value->user_id)->row();				
				$project_managers[$innerLoop]['manager_id'] = $manager_details->id;
				$project_managers[$innerLoop]['manager_name'] = $manager_details->first_name;
				$innerLoop++;
			}
			$data['project_managers'] = $project_managers;
			$data['job_priorities'] = $this->common_model->get_form_util('job_priorities');
			$data['contact_types'] = $this->common_model->get_form_util('contact_types');
			$data['states'] = $this->common_model->get_form_util('states');
			$this->load->view("blocks/Common/head");
			$this->load->view("blocks/Common/Header");
			$this->load->view("blocks/".CLASS_NAME."/LeftBar");
			$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME, $data);
			$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME."-RightBar");
			$this->load->view("blocks/Common/footer");
		} else {
			$user_session_details = $this -> session -> all_userdata();
			$job_details = array(
							'id' => $user_session_details['user_id'],
							'job_description' => $this->input->post('description', TRUE),
							'type_id' => $this->input->post('job_type', TRUE),
							'event_id' => $this->input->post('event', TRUE),
							'job_claim_no' => $this->input->post('claimnumber', TRUE),
							'job_received_date' => $this->input->post('receiveddate', TRUE).' '.date('H:i:s'),
							'job_provider_ref_no' => $this->input->post('providerrefno', TRUE),
							'job_project_manager' => $this->input->post('manager', TRUE),
							'job_tp_response_by' => $this->input->post('tpresponseby', TRUE).' '.date('H:i:s'),
							'priority_id' => $this->input->post('priority', TRUE),
							'job_special_note' => $this->input->post('specialnote', TRUE),
							'job_note' => $this->input->post('note')
						); 
			$details_result = $this->common_model->db_instert('job_details', $job_details);
			
			$job_contacts = array(
							'job_id' => $details_result,
							'job_risk_address' => $this->input->post('riskaddress', TRUE),
							'state_id' => $this->input->post('state', TRUE),
							'job_risk_suburb' => $this->input->post('risksuburb', TRUE),
							'job_risk_postcode' => $this->input->post('riskpostcode', TRUE),
							'contact_id' => $this->input->post('contact_type', TRUE),
							'job_main_contact' => $this->input->post('maincontact', TRUE),
							'job_first_name' => $this->input->post('firstname', TRUE),
							'job_surname' => $this->input->post('surname', TRUE),
							'job_company' => $this->input->post('company', TRUE),
							'job_contact_address' => $this->input->post('contactaddress', TRUE),
							'job_contact_state' => $this->input->post('contactstate', TRUE),
							'job_contact_suburb' => $this->input->post('contactsuburb', TRUE),
							'job_contact_postcode' => $this->input->post('contactpostcode', TRUE),
							'job_mobile' => $this->input->post('mobile', TRUE),
							'job_is_mobile_best' => $this->input->post('bestmobile', TRUE),
							'job_phone' => $this->input->post('phone', TRUE),
							'job_is_phone_best' => $this->input->post('bestphone', TRUE),
							'job_email' => $this->input->post('contactemail', TRUE)
						);
			$contacts_result = $this->common_model->db_instert('job_contacts', $job_contacts);
			
			if( !empty($contacts_result) ){			
				$error_string = "<div id=\"infoMessage\" class=\"alert alert-success alert-dismissable\"> Job Added Successfully. </div>\n";
				$this->session->set_flashdata("form_error", $error_string);
				redirect("add-job");
			} else {
				$error_string = "<div id=\"infoMessage\" class=\"alert alert-danger alert-dismissable\"> Error Occured Please Try Again. </div>\n";
				$this->session->set_flashdata("form_error", $error_string);
				redirect("add-job", 'refresh');
			}			
		}
	}
		 
	
	/**
	 * Submit Job page controller.
	 */
	public function SubmitJob() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->model("common_model");
			$data['job_types'] = $this->common_model->get_form_util('job_types');
			$data['job_events'] = $this->common_model->get_form_util('job_events');
			$data['job_priorities'] = $this->common_model->get_form_util('job_priorities');
			$data['contact_types'] = $this->common_model->get_form_util('contact_types');
			$data['states'] = $this->common_model->get_form_util('states');
			$this->load->view("blocks/Common/head");
			$this->load->view("blocks/Common/Header");
			$this->load->view("blocks/User/LeftBar");
			$this->load->view("blocks/User/AddNewJob", $data);
			$this->load->view("blocks/User/AddNewJob"."-RightBar");
			$this->load->view("blocks/Common/footer");
		} else {
			$this->load->view('formsuccess');
		}
	}
	
	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}
	
	
	/**
	 * Kpi page controller.
	 */
	public function Kpis() {
		$this->load->view("blocks/Common/head");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/".CLASS_NAME."/LeftBar");
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME);
		$this->load->view("blocks/Common/footer");
	}
	
	
	/**
	 * Compliance page controller.
	 */
	public function Compliance() {
		$this->load->view("blocks/Common/head");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/".CLASS_NAME."/LeftBar");
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME);
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME."-RightBar");
		$this->load->view("blocks/Common/footer");
	}
	
	
	/**
	 * Setting page controller.
	 */
	public function Settings() {
		$this->load->view("blocks/Common/head");
		$this->load->view("blocks/Common/Header");
		$this->load->view("blocks/".CLASS_NAME."/LeftBar");
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME);
		$this->load->view("blocks/".CLASS_NAME."/".METHOD_NAME."-RightBar");
		$this->load->view("blocks/Common/footer");
	}
}
