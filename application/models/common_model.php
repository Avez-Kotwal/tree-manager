<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Name:  Commmon Model
 *
 * Author:  TechnoSpace
 *
 * Added Awesomeness: Avez Kotwal
 *
 * Description: Common controller
 *
 * Requirements: PHP5 or above
 *
 */

class common_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function get_form_util($table_name = '', $for = '' , $id = '') {
		$this -> db -> select();
		$this -> db -> from($table_name);
		if ($id != FALSE) {
			$this -> db -> where($for . '_id', $id);
		}
		$query = $this -> db -> get();
		$result = $query -> result();
		return $result;
	}
	
	public function get_complete_jobs($for = '' , $id = '') {
		$this->db->select('*');
		$this->db->from('job_details');
		$this->db->join('job_contacts', 'job_details.job_id = job_contacts.job_id');
		if ($id != FALSE) {
			$this -> db -> where($for, $id);
		}
		$query = $this -> db -> get();
		$result = $query -> result();
		return $result;
	}
	
	public function get_jobs($table_name = '', $for = '' , $id = '') {
		$this -> db -> select();
		$this -> db -> from($table_name);
		if ($id != FALSE) {
			$this -> db -> where($for, $id);
		}
		$query = $this -> db -> get();
		$result = $query -> result();
		return $result;
	}
	
	public function prepare_job_details($params) {		
		$return_array = array();
		for( $innerLoop=0; $innerLoop<COUNT($params); $innerLoop++){
			foreach ($params[$innerLoop] as $key => $value) {
				$return_array[$innerLoop][$key] = $params[$innerLoop]->$key;
				switch ($key) {
					case 'type_id':
						$data['job_types'] = $this->get_form_util('job_types', 'type', $value);
						$return_array[$innerLoop]['type_name'] = $data['job_types'][0]->type_name;
						break;
						
					case 'event_id':
						$data['job_events'] = $this->get_form_util('job_events', 'event', $value);
						$return_array[$innerLoop]['event_name'] = $data['job_events'][0]->event_name;
						break;
						
					case 'job_project_manager':
						$manager_details = $this->ion_auth->user($value)->row();				
						$return_array[$innerLoop]['manager_name'] = $manager_details->first_name;
						break;
						
					case 'priority_id':
						$data['job_priorities'] = $this->get_form_util('job_priorities', 'priority', $value);			
						$return_array[$innerLoop]['priority_name'] = $data['job_priorities'][0]->priority_name;
						break;
						
					case 'job_received_date':
						$data_only = explode(' ', $value);
						$data['job_priorities'] = $this->get_form_util('job_priorities', 'priority', $value);			
						$return_array[$innerLoop]['job_received_date_only'] = $data_only[0];
						break;
						
					case 'contact_id':
						$data['contact_types'] = $this->get_form_util('contact_types', 'contact', $value);			
						$return_array[$innerLoop]['contact_name'] = $data['contact_types'][0]->contact_name;
						break;
						
					case 'state_id':
						$data['states'] = $this->get_form_util('states', 'state', $value);			
						$return_array[$innerLoop]['state_name'] = $data['states'][0]->state_name;
						break;						
											
						
					default:
						//Do nothing
						break;
				}
			}
		}
		return $return_array;
	}
	
	function db_instert($table,$params) {
		$this->db->insert($table,$params);
    	return $this->db->insert_id();
	}
	
	function httpPost($url,$params) {
	  $postData = '';
	   //create name value pairs seperated by &
	   foreach($params as $k => $v) 
	   { 
	      $postData .= $k . '='.$v.'&'; 
	   }
	   rtrim($postData, '&');
	 
	    $ch = curl_init();  
	 
	    curl_setopt($ch,CURLOPT_URL,$url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	    curl_setopt($ch,CURLOPT_HEADER, false); 
	    curl_setopt($ch, CURLOPT_POST, count($postData));
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
	 
	    $output=curl_exec($ch);
	 
	    curl_close($ch);
	    return $output;
	 
	}
	
	public function checkDateFormat($date) { 
			if (preg_match("/[0-31]{2}\/[0-12]{2}\/[0-9]{4}/", $date)) {
				if(checkdate(substr($date, 3, 2), substr($date, 0, 2), substr($date, 6, 4)))
					return true;
				else
					return false;
				} else {
					return false;
			}
		}

}
