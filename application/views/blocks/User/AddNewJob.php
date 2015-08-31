<?php 
$globalStyle = 'margin-left: 0px; margin-bottom: 0px;';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Jobs </h1>

	</section>
	<!-- Main content -->
	<section class="content">
		<div class="col-md-9">

			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Job</h3>
					<!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="nav-tabs-custom">								
								<div class="tab-content">
									<div class="tab-pane fade active in box-body" id="jobdetail">																				
										<?php $attributes = array('class' => 'form-horizontal');
										echo form_open(site_url().'add-job', $attributes);
										?>
										<div class="box-body">						
											<?php 
											if($this->session->flashdata("form_error") !== FALSE) {
	    										echo $this->session->flashdata("form_error");
											} ?>					
											<h3 class="box-title">Job Details</h3>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Job Description</label>
														<?php $divClass = form_error('description') ? 'col-sm-10 form-group has-error' : 'col-sm-10'; 
														$styleAttr = form_error('description') ? $globalStyle : ''; ?>
														<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $descriptionValue = set_value('description') ? set_value('description') : '';
															$user_data = array('type' => 'text', 'name' => 'description', 'id' => 'description', 'value' => $descriptionValue, 'placeholder' => 'Job Description', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('description') != '') { echo form_error('description'); } ?>
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Job Type</label>
														<div class="col-sm-8">
															<?php $options = array();
															$attributes = array('class' => 'form-control', 'name' => 'job_type');
															foreach ($job_types as $key => $value) {
																$options[$value -> type_id] = ucfirst($value -> type_name);
															}
															echo form_dropdown($attributes, $options);
															?>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">Job Number</label>
														<?php $divClass = form_error('jobnumber') ? 'col-sm-8 form-group has-error' : 'col-sm-8'; 
														$styleAttr = form_error('jobnumber') ? $globalStyle : ''; ?>
														<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $jobnumberValue = set_value('jobnumber') ? set_value('jobnumber') : '';
															$user_data = array('type' => 'text', 'name' => 'jobnumber', 'id' => 'jobnumber', 'value' => $jobnumberValue, 'placeholder' => 'Job Number', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('jobnumber') != '') { echo form_error('jobnumber'); } ?>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Job Event</label>
														<div class="col-sm-8">
															<?php $options = array();
															$attributes = array('class' => 'form-control', 'name' => 'event');
															foreach ($job_events as $key => $value) {
																$options[$value -> event_id] = ucfirst($value -> event_name);
															}
															echo form_dropdown($attributes, $options);
															?>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">Claim No</label>
														<?php $divClass = form_error('claimnumber') ? 'col-sm-8 form-group has-error' : 'col-sm-8'; 
														$styleAttr = form_error('claimnumber') ? $globalStyle : ''; ?>
														<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $claimnumberValue = set_value('claimnumber') ? set_value('claimnumber') : '';
															$user_data = array('type' => 'text', 'name' => 'claimnumber', 'id' => 'claimnumber', 'value' => $claimnumberValue, 'placeholder' => 'Claim Number', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('claimnumber') != '') { echo form_error('claimnumber'); } ?>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Received Date</label>
														<?php $divClass = form_error('receiveddate') ? 'col-sm-8 form-group has-error' : 'col-sm-8'; 
														$styleAttr = form_error('receiveddate') ? $globalStyle : ''; ?>
														<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
														<?php $receiveddateValue = set_value('receiveddate') ? set_value('receiveddate') : '';
														$user_data = array('type' => 'text', 'name' => 'receiveddate', 'id' => 'receiveddate', 'value' => $receiveddateValue, 'placeholder' => 'dd/mm/yyyy', 'class' => 'datepicker form-control');
														echo form_input($user_data);
														?>
														<?php if (form_error('receiveddate') != '') { echo form_error('receiveddate'); } ?>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">Provider Ref. No</label>
														<?php $divClass = form_error('providerrefno') ? 'col-sm-8 form-group has-error' : 'col-sm-8'; 
														$styleAttr = form_error('providerrefno') ? $globalStyle : ''; ?>
														<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $providerrefnumberValue = set_value('providerrefno') ? set_value('providerrefno') : '';
															$user_data = array('type' => 'text', 'name' => 'providerrefno', 'id' => 'providerrefno', 'value' => $providerrefnumberValue, 'placeholder' => 'Provider Ref. Number', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('providerrefno') != '') { echo form_error('providerrefno'); } ?>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Project Manager</label>
														<div class="col-sm-8">
															<?php $options = array();
															$attributes = array('class' => 'form-control', 'name' => 'manager');
															foreach ($project_managers as $key => $value) {
																$options[trim($value['manager_id'])] = ucfirst(trim($value['manager_name']));
															}
															echo form_dropdown($attributes, $options);
															?>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">TP Response By</label>
															<?php $divClass = form_error('tpresponseby') ? 'col-sm-8 form-group has-error' : 'col-sm-8'; 
															$styleAttr = form_error('tpresponseby') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $providerrefnumberValue = set_value('tpresponseby') ? set_value('tpresponseby') : '';
															$user_data = array('type' => 'text', 'name' => 'tpresponseby', 'id' => 'tpresponseby', 'value' => $providerrefnumberValue, 'placeholder' => 'dd/mm/yyyy', 'class' => 'datepicker form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('tpresponseby') != '') { echo form_error('tpresponseby'); } ?>													
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Priority</label>
														<div class="col-sm-10">
															<?php $options = array();
															$attributes = array('class' => 'form-control', 'name' => 'priority');
															foreach ($job_priorities as $key => $value) {
																$options[$value -> priority_id] = ucfirst($value -> priority_name);
															}
															echo form_dropdown($attributes, $options);
															?>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Special Note</label>
															<?php $divClass = form_error('specialnote') ? 'col-sm-10 form-group has-error' : 'col-sm-10';
															$styleAttr = form_error('specialnote') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $specialnoteValue = set_value('specialnote') ? set_value('specialnote') : '';
															$user_data = array('type' => 'text', 'name' => 'specialnote', 'id' => 'specialnote', 'value' => $specialnoteValue, 'placeholder' => 'Special Note', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('specialnote') != '') { echo form_error('specialnote'); } ?>															
															</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Notes</label>
															<?php $divClass = form_error('note') ? 'col-sm-10 form-group has-error' : 'col-sm-10'; 
															$styleAttr = form_error('note') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $noteValue = set_value('note') ? set_value('note') : '';
															$user_data = array('name' => 'note', 'id' => 'note', 'value' => $noteValue, 'placeholder' => 'Note', 'class' => 'form-control', 'rows' => '3');
															echo form_textarea($user_data);
															?>
															<?php if (form_error('note') != '') { echo form_error('note'); } ?>
														</div>
													</div>
												</div>
											</div>

										</div><!-- /.box-body -->

										<div class="box-body">
											<h3 class="box-title">Risk Address</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Address</label>
															<?php $divClass = form_error('riskaddress') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('riskaddress') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $specialnoteValue = set_value('specialnote') ? set_value('specialnote') : '';
															$user_data = array('type' => 'text', 'name' => 'riskaddress', 'id' => 'riskaddress', 'value' => $specialnoteValue, 'placeholder' => 'Risk Address', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('riskaddress') != '') { echo form_error('specialnote'); } ?>															
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">State</label>
														<div class="col-sm-8">
															<?php $options = array();
															$attributes = array('class' => 'form-control', 'name' => 'state');
															foreach ($states as $key => $value) {
																$options[$value -> state_id] = ucfirst($value -> state_name);
															}
															echo form_dropdown($attributes, $options);
															?>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Suburb</label>
															<?php $divClass = form_error('risksuburb') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('risksuburb') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $risksuburbValue = set_value('risksuburb') ? set_value('risksuburb') : '';
															$user_data = array('type' => 'text', 'name' => 'risksuburb', 'id' => 'risksuburb', 'value' => $risksuburbValue, 'placeholder' => 'Risk Suburb', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('risksuburb') != '') { echo form_error('risksuburb'); } ?>
													</div>
												</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">PostCode</label>
															<?php $divClass = form_error('riskpostcode') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('riskpostcode') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $riskpostcodeValue = set_value('riskpostcode') ? set_value('riskpostcode') : '';
															$user_data = array('type' => 'text', 'name' => 'riskpostcode', 'id' => 'riskpostcode', 'value' => $riskpostcodeValue, 'placeholder' => 'Risk PostCode', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('riskpostcode') != '') { echo form_error('riskpostcode'); } ?>
													</div>
												</div>
											</div>
											</div>
											<h3 class="box-title">Contact</h3>

											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Contact Type</label>
														<div class="col-sm-8">
															<?php $options = array();
															$attributes = array('class' => 'form-control', 'name' => 'contact_type');
															foreach ($contact_types as $key => $value) {
																$options[$value -> contact_id] = ucfirst($value -> contact_name);
															}
															echo form_dropdown($attributes, $options);
															?>
														</div>
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														<label class="checkbox-inline"> <?php $currentRememberValue = $this -> input -> post('maincontact') ? (bool)$this -> input -> post('maincontact') : 1;
														echo form_checkbox('maincontact', '1', $currentRememberValue, 'id="maincontact"');
															?>
															Main Contact </label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">1st Name </label>
															<?php $divClass = form_error('firstname') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('firstname') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $firstnameValue = set_value('riskpostcode') ? set_value('riskpostcode') : '';
															$user_data = array('type' => 'text', 'name' => 'firstname', 'id' => 'firstname', 'value' => $firstnameValue, 'placeholder' => 'First Name', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('firstname') != '') { echo form_error('firstname'); } ?>
													</div>
												</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">Address</label>
															<?php $divClass = form_error('contactaddress') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('contactaddress') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $contactaddressValue = set_value('contactaddress') ? set_value('contactaddress') : '';
															$user_data = array('type' => 'text', 'name' => 'contactaddress', 'id' => 'contactaddress', 'value' => $contactaddressValue, 'placeholder' => 'Contact Address', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('contactaddress') != '') { echo form_error('contactaddress'); } ?>
													</div>
												</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Surname</label>
															<?php $divClass = form_error('surname') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('surname') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $surnameValue = set_value('surname') ? set_value('surname') : '';
															$user_data = array('type' => 'text', 'name' => 'surname', 'id' => 'surname', 'value' => $surnameValue, 'placeholder' => 'Surname', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('surname') != '') { echo form_error('surname'); } ?>
													</div>
												</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">Suburb</label>
															<?php $divClass = form_error('contactsuburb') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('contactsuburb') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $contactsuburbValue = set_value('contactsuburb') ? set_value('contactsuburb') : '';
															$user_data = array('type' => 'text', 'name' => 'contactsuburb', 'id' => 'contactsuburb', 'value' => $contactsuburbValue, 'placeholder' => 'Suburb', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('contactsuburb') != '') { echo form_error('contactsuburb'); } ?>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Company</label>
															<?php $divClass = form_error('company') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('company') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $companyValue = set_value('company') ? set_value('company') : '';
															$user_data = array('type' => 'text', 'name' => 'company', 'id' => 'company', 'value' => $companyValue, 'placeholder' => 'Company', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('company') != '') { echo form_error('company'); } ?>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">State</label>
															<?php $divClass = form_error('contactstate') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('contactstate') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $contactstateValue = set_value('contactstate') ? set_value('contactstate') : '';
															$user_data = array('type' => 'text', 'name' => 'contactstate', 'id' => 'contactstate', 'value' => $contactstateValue, 'placeholder' => 'State', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('contactstate') != '') { echo form_error('contactstate'); } ?>
														</div>																											
													</div>
												</div>
											</div>
											<div class="row">												
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">Email</label>
															<?php $divClass = form_error('contactemail') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('contactemail') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $contactemailValue = set_value('contactemail') ? set_value('contactemail') : '';
															$user_data = array('type' => 'text', 'name' => 'contactemail', 'id' => 'contactemail', 'value' => $contactemailValue, 'placeholder' => 'Email', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('contactemail') != '') { echo form_error('contactemail'); } ?>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 control-label">PostCode</label>
															<?php $divClass = form_error('contactpostcode') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('contactpostcode') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $contactpostcodeValue = set_value('contactpostcode') ? set_value('contactpostcode') : '';
															$user_data = array('type' => 'text', 'name' => 'contactpostcode', 'id' => 'contactpostcode', 'value' => $contactpostcodeValue, 'placeholder' => 'Contact PostCode', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('contactpostcode') != '') { echo form_error('contactpostcode'); } ?>
														</div>
														</div>
													</div>
											</div>

											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Mobile</label>
															<?php $divClass = form_error('mobile') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('mobile') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $mobileValue = set_value('mobile') ? set_value('mobile') : '';
															$user_data = array('type' => 'text', 'name' => 'mobile', 'id' => 'mobile', 'value' => $mobileValue, 'placeholder' => 'Mobile', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('mobile') != '') { echo form_error('mobile'); } ?>
														</div>
													</div>
												</div>
												<div class="col-md-1">
													<div class="form-group">
														<label class="checkbox-inline"> <?php $currentRememberValue = $this -> input -> post('bestmobile') ? (bool)$this -> input -> post('bestmobile') : 1;
														echo form_checkbox('bestmobile', '1', $currentRememberValue, 'id="bestmobile"');
															?>
															Best </label>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
															<?php $divClass = form_error('phone') ? 'col-sm-8 form-group has-error' : 'col-sm-8';
															$styleAttr = form_error('phone') ? $globalStyle : ''; ?>
															<div class="<?php echo $divClass; ?>" style="<?php echo $styleAttr; ?>">
															<?php $phoneValue = set_value('phone') ? set_value('phone') : '';
															$user_data = array('type' => 'text', 'name' => 'phone', 'id' => 'phone', 'value' => $phoneValue, 'placeholder' => 'Phone', 'class' => 'form-control');
															echo form_input($user_data);
															?>
															<?php if (form_error('phone') != '') { echo form_error('phone'); } ?>
														</div>
													</div>
												</div>
												<div class="col-md-1">
													<div class="form-group">
														<label class="checkbox-inline"> <?php
															$currentRememberValue = $this -> input -> post('bestphone') ? (bool)$this -> input -> post('bestphone') : 1;
															echo form_checkbox('bestphone', '1', $currentRememberValue, 'id="bestphone"'); ?>
															Best </label>
													</div>
												</div>
											</div>

										</div><!-- /.box-body -->
										<div class="box-footer">
											<button type="submit" class="btn btn-default">
												Reset
											</button>
											<button type="submit" class="btn btn-default pull-right">
												Submit
											</button>
										</div><!-- /.box-footer -->
										<?php echo form_close(); ?>
									</div>

								</div>
							</div>

						</div><!-- /.col-lg-12 -->
					</div><!-- /.row -->
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
