<body class="login-page">

<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo site_url(); ?>"><b><?php echo lang('login_heading'); ?></b></a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">
			Sign in to start your session
		</p>
		<?php if( !empty($message) ) { ?>
		<div id="infoMessage" class="alert alert-danger alert-dismissable">
			<?php echo $message; ?>
		</div>
		<?php } ?>
		<?php echo form_open(""); ?>
			<div class="form-group has-feedback">
				<?php $currentUserValue = $this -> input -> post('identity') ? $this -> input -> post('identity') : get_cookie($this -> config -> item('identity_cookie_name', 'ion_auth'));
				$user_data = array('type' => 'text', 'name' => 'identity', 'id' => 'identity', 'value' => $currentUserValue, 'placeholder' => 'Email', 'class' => 'form-control');
				echo form_input($user_data);
			?>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<?php $password_data = array('type' => 'password', 'name' => 'password', 'id' => 'password', 'value' => '', 'placeholder' => 'Password', 'class' => 'form-control');
				echo form_input($password_data);
			?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<?php 
				$attributes = array(
                  'class'  => 'form-control',
                  'name'    => 'role'
                );
                $groups = $this->data['group'];
				foreach ($groups as $key => $value) {
					$options[$value->id] = ucfirst($value->name);
				}				
				echo form_dropdown($attributes, $options, get_cookie($this -> config -> item('identity_group', 'ion_auth')));				
				?>
			</div>
			<div class="row">
				<div class="col-xs-8" style="padding-left:35px;">
					<div class="checkbox icheck">						
					<?php
						$currentRememberValue = $this -> input -> post('remember') ? (bool)$this -> input -> post('remember') : $this -> ion_auth -> identity_check(get_cookie($this -> config -> item('identity_cookie_name', 'ion_auth')));
						echo form_checkbox('remember', '1', $currentRememberValue, 'id="remember"'); ?>
						<?php echo lang('login_remember_label', 'remember'); ?>
					</div>
				</div><!-- /.col -->
				<div class="col-xs-4">
					<?php $submit_data = array('type' => 'submit', 'name' => 'submit', 'value' => 'Sign in', 'class' => 'btn btn-primary btn-block btn-flat');
					echo form_input($submit_data); ?>
				</div><!-- /.col -->
			</div>
		<?php echo form_close(); ?>

		<a href="forgot_password"><?php echo lang('login_forgot_password'); ?>
		<br>
		<a href="#" class="text-center">Register a new membership</a>
	</div><!-- /.login-box-body -->	
</div>
