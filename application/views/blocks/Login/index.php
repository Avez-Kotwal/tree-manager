<body class="login-page">

<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo site_url(); ?>"><b>Login</b></a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">
			Sign in to start your session
		</p>
		<form action="<?php echo site_url().'user-dashboard'; ?>" method="post">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="Email" />
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password" />
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
							<input type="checkbox">
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
