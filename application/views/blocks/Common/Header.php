<?php 
//Collect logged in user session details
if (is_array($this -> session -> all_userdata())) {
	$user_session_details = $this -> session -> all_userdata();
}

if( ! ini_get('date.timezone') ) {
	date_default_timezone_set("Asia/Calcutta");
}

?>

<body class="skin-yellow sidebar-mini">
<div class="wrapper">

<header class="main-header">
	<!-- Logo -->
	<a href="index2.html" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --><span class="logo-mini"><b>A</b></span> <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b><?php echo ucfirst($user_session_details['loggedin_group_name']); ?></b></span> </a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span> </a>

				</li>
				<!-- Notifications: style can be found in dropdown.less -->
				<li class="dropdown notifications-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">10</span> </a>

				</li>
				<!-- Tasks: style can be found in dropdown.less -->
				<li class="dropdown tasks-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-flag-o"></i> <span class="label label-danger">9</span> </a>
				</li>
				
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo IMAGES_PATH; ?>user2-160x160.jpg" class="user-image" alt="User Image" /> <span class="hidden-xs"><?php echo ucfirst($user_session_details['first_name']) . ' ' . ucfirst($user_session_details['last_name']); ?></span> </a>				
				<ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo IMAGES_PATH; ?>user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                    <?php 
                    $datestring = '%M. %Y';
                    $time = $user_session_details['user_created'];
					echo ucfirst($user_session_details['first_name']) . ' ' . ucfirst($user_session_details['last_name']) . ' - ' . ucfirst($user_session_details['loggedin_group_name']); ?>
                      <small>Member since <?php echo mdate($datestring, $time); ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url() . 'auth/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
				</li>
				
			</ul>
		</div>
	</nav>
</header>
