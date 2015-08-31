<body class="login-page">

<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo site_url(); ?>"><b><?php echo lang('login_heading');?></b></a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">
			<?php echo lang('login_subheading');?>
		</p>
		<?php echo form_open("auth/login");?>
			<div class="form-group has-feedback">
				<?php echo form_input($identity);?>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<?php echo form_input($password);?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<select class="form-control">
					<option>Administrator</option>
					<option>Manager</option>
					<option>Contractor</option>
					<option>User</option>
				</select>
			</div>
			<div class="row">
				<div class="col-xs-8" style="padding-left:35px;">
					<div class="checkbox icheck">
						<label>
							<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
							Remember Me </label>
					</div>
				</div><!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">
						Sign In
					</button>
				</div><!-- /.col -->
			</div>
		</form>

		<a href="#">I forgot my password</a>
		<br>
		<a href="#" class="text-center">Register a new membership</a>
	</div><!-- /.login-box-body -->	
</div>
