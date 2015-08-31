<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo IMAGES_PATH; ?>user2-160x160.jpg" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search..." />
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    
    <li class="<?php echo ($this->uri->uri_string() == strtolower(CLASS_NAME).'-dashboard') ? 'active' : ''; ?> treeview">
      <a href="<?php echo site_url().strtolower(CLASS_NAME).'-dashboard'; ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
      </a>      
    </li>
    
    <li class="<?php echo ($this->uri->uri_string() == strtolower(CLASS_NAME).'-jobs') ? 'active' : ''; ?> treeview">
      <a href="<?php echo site_url().strtolower(CLASS_NAME).'-jobs'; ?>">
        <i class="fa fa-files-o"></i>
        <span>Job</span>
      </a>      
    </li>
    
    <li class="<?php echo ($this->uri->uri_string() == strtolower(CLASS_NAME).'-kpis') ? 'active' : ''; ?> treeview">
    	<a href="<?php echo site_url().strtolower(CLASS_NAME).'-kpis'; ?>">
        <i class="fa fa-th"></i> <span>KPI's</span> 
      </a>
    </li>
    
    <li class="<?php echo ($this->uri->uri_string() == strtolower(CLASS_NAME).'-compliance') ? 'active' : ''; ?> treeview">
    	<a href="<?php echo site_url().strtolower(CLASS_NAME).'-compliance'; ?>">
        <i class="fa fa-pie-chart"></i>
        <span>Compliance</span>
        </i>
      </a>
    </li>
    
    <li class="<?php echo ($this->uri->uri_string() == strtolower(CLASS_NAME).'-settings') ? 'active' : ''; ?> treeview">
    	<a href="<?php echo site_url().strtolower(CLASS_NAME).'-settings'; ?>">
        <i class="fa fa-laptop"></i>
        <span>Settings</span>
        </i>
      </a>
	</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>