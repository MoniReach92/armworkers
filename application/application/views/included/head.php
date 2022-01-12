<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('images/favicon.ico'); ?>">

    <title>AnnyRita - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap/dist/css/bootstrap.css'); ?>">
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-extend.css'); ?>">
	  
	<!--alerts CSS -->
    <link href="<?php echo base_url('assets/vendor_components/sweetalert/sweetalert.css'); ?>" rel="stylesheet" type="text/css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url('public/css/master_style.css'); ?>">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="<?php echo base_url('public/css/skins/_all-skins.css'); ?>">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>
<?php
$call_method =  $this->router->fetch_method();
$call_class = $this->router->fetch_class();
?>