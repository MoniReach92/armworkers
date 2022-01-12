<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="#">
			  <!-- logo for regular state and mobile devices -->
			  <span>Anny <b> Rita </b></span>
			</a>
		</div>
        <div class="image">
          <img src="<?php echo base_url('images/user2-160x160.jpg'); ?>" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p><?php echo $user_name; ?></p>
			<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="<?php echo site_url('Login/logout/');?>" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li >
          <a href="<?php echo site_url('home'); ?>">
            <i class="icon-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Workers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li ><a href="<?php echo site_url('Workers'); ?>">Workers List</a></li>
            <li ><a href="<?php echo site_url('Groups'); ?>">Worker Groups</a></li>
            <li ><a href="<?php echo site_url('Groups/create'); ?>">New Groups</a></li>
			<li ><a href="<?php echo site_url('Workers/create'); ?>">New Worker</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="<?php echo site_url('Home/industries'); ?>">Workers by Industry</a></li>
            <li><a href="<?php echo site_url('Home/countries'); ?>">Workers by Country</a></li>
			<li><a href="<?php echo site_url('Workers'); ?>">Workers List</a></li>
			<li><a href="<?php echo site_url('Industries'); ?>">Industry List</a></li>
			<li><a href="<?php echo site_url('Employers'); ?>">Employer List</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Others</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo site_url('Industries'); ?>">Industry List</a></li>
			<li ><a href="<?php echo site_url('Industries/create'); ?>">Add New Industry</a></li>
			<li ><a href="<?php echo site_url('Jobs'); ?>">Job List</a></li>
			<li ><a href="<?php echo site_url('Jobs/create'); ?>">Add New Job Title</a></li>
			<li ><a href="<?php echo site_url('Branches'); ?>">Branches List</a></li>
			<li ><a href="<?php echo site_url('Branches/create'); ?>">Add New Branches</a></li>
			<li ><a href="<?php echo site_url('Affiliates'); ?>">Affiliates List</a></li>
			<li ><a href="<?php echo site_url('Affiliates/create'); ?>">Add New Affiliates</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="icon-magnet"></i> <span>Employer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Employers'); ?>">Employer List</a></li>
			<li><a href="<?php echo site_url('Employers/create'); ?>">Add New Employer</a></li>
          </ul>
        </li>
		<li class="treeview acitve">
          <a href="#">
            <i class="icon-grid"></i>
            <span>Print Template</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Workers'); ?>">Print Biography</a></li>
			<li><a href="<?php echo site_url('Workers'); ?>">Worker Request</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="icon-layers"></i>
            <span>Users Panel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo site_url('Admins'); ?>">Admin List</a></li>
            <li ><a href="<?php echo site_url('Admins/create'); ?>">Create New Admin</a></li>
            <li ><a href="<?php echo site_url('Admins/admin_role'); ?>">Admin Roles</a></li>	  
          </ul>
        </li>
      </ul>
    </section>
  </aside>