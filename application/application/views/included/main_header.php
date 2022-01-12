<body class="hold-transition skin-black sidebar-mini fixed">
<div class="wrapper">
<!--End of opening wrapper-->
<header class="main-header">
  <!-- Logo -->
  <a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <b class="logo-mini">
        <span class="light-logo"><img src="<?php echo base_url('images/logo-light.png'); ?>" alt="logo"></span>
        <span class="dark-logo"><img src="<?php echo base_url('images/logo-dark.png'); ?>" alt="logo"></span>
    </b>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
        <img src="<?php echo base_url('images/logo-light-text.png'); ?>" alt="logo" class="light-logo">
        <img src="<?php echo base_url('images/logo-dark-text.png'); ?>" alt="logo" class="dark-logo">
    </span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <li class="search-box">
          <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
          <form class="app-search" style="display: none;">
              <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
          </form>
        </li>			

        <!-- Notifications -->
       
        <!-- User Account -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('images/user5-128x128.jpg'); ?>" class="user-image rounded-circle" alt="User Image">
          </a>
          <ul class="dropdown-menu scale-up">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url('images/user5-128x128.jpg'); ?>" class="float-left rounded-circle" alt="User Image">

              <p>
                <?php echo $user_name; ?>
                <small class="mb-5"><?php echo $user_email; ?></small>
                <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row no-gutters">
                <div class="col-12 text-left">
                  <a href="<?php echo site_url('admins/password/' . $user_id); ?>"><i class="ion ion-settings"></i>Password</a>
                </div>
              <div role="separator" class="divider col-12"></div>
                <div class="col-12 text-left">
                  <a href="<?php echo site_url('Login/logout/');?>"><i class="fa fa-power-off"></i> Logout</a>
                </div>				
              </div>
              <!-- /.row -->
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>