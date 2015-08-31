<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Form Validations For Add New Job Page
$config = array(
   'add-job' => array(
        array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
             ),
		array(
                'field' => 'jobnumber',
                'label' => 'Job Number',
                'rules' => 'trim|required|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid number.',
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'claimnumber',
                'label' => 'Claim Number',
                'rules' => 'trim|required|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid number.',
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'receiveddate',
                'label' => 'Received Date',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'providerrefno',
                'label' => 'Provider Ref. Number',
                'rules' => 'trim|required|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid number.',
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'tpresponseby',
                'label' => 'TP Response By',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'specialnote',
                'label' => 'Special Note',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'note',
                'label' => 'Note',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'riskaddress',
                'label' => 'Risk Address',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'risksuburb',
                'label' => 'Risk Suburb',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'riskpostcode',
                'label' => 'Risk PostCode',
                'rules' => 'trim|required|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid.',
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'firstname',
                'label' => 'First Name',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'contactaddress',
                'label' => 'Address',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'surname',
                'label' => 'Surname',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'contactsuburb',
                'label' => 'Suburb',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'company',
                'label' => 'Company',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'contactstate',
                'label' => 'State',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'contactemail',
                'label' => 'Email',
                'rules' => 'trim|required',
				'errors' => array(
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'contactpostcode',
                'label' => 'PostCode',
                'rules' => 'trim|required|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid.',
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'mobile',
                'label' => 'Mobile',
                'rules' => 'trim|required|min_length[10]|max_length[10]|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid number.',
				  'min_length' => 'Invalid.', 
				  'max_length' => 'Invalid.', 
			      'required' => 'This is required.'
			    )
			),
		array(
			'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'trim|required|min_length[10]|max_length[10]|is_natural_no_zero',
				'errors' => array(
			      'is_natural_no_zero' => 'Invalid number.',
				  'min_length' => 'Invalid.', 
				  'max_length' => 'Invalid.', 
			      'required' => 'This is required.'
			    )
			)
	)
);