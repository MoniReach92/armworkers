<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
	
  <div class="box-header with-border">
	<?php if($call_method == 'show') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់បង្ហាញពត៌មានលំអិត</span> &#921; Showing Form Detail  </h3>
	<?php }elseif($call_method == 'edit') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់កែប្រែ ទីន្ន័យ </span> &#921; Editalbe Form </h3>
	<?php }else{ ?>
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតថ្មីពលករថ្មី </span> &#921; Create New Worker Form </h3>
	<?php } ?>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <!-- /.box-header -->
	
    <div class="box-body wizard-content">
	<?php 
//	  if(($call_method == 'edit') || ($call_method == 'create'))
//	  {
//		  echo "<form action=\"" . site_url('Workers/create') . "\" enctype=\"multipart/form-data\" method=\"post\" accept-charset=\"utf-8\" class=\"validation-wizard wizard-circle\">";
//	  }else
//	  { 
//		  echo "<form method=\"post\">";
//	  }
	?>
	<form method="post" class="validation-wizard wizard-circle" accept-charset="utf-8">