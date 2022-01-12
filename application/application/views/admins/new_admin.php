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
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតថ្មី </span> &#921; Create New Admin Form </h3>
	<?php } ?>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<?php if(($call_method == 'edit') || ($call_method == 'create')) { echo form_open_multipart(''); }else{ echo "<form method=\"post\">"; } ?>
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
				<div class="form-group row">
					<label for="admin_role" class="col-sm-2 col-form-label text-right">
						<span class="khmer_font"> ទួនាទី Admin </span><span class="text-danger">&#9734;</span>
						<br /> Admin's Role
					</label>
					<div class="col-sm-10">
					  <!-- select -->
						<?php if(!isset($admins['admin_role'])) { $admins['admin_role'] = NULL ; } ?>
						<select class="form-control" name="admin_role" >
							<!--<option><span class="khmer_font"> សូមជ្រើសរើស មុខនាទីមួយ </span> Please select role  </option>-->
							<?php foreach($admin_roles as $admin_role) { ?>
							<option value="<?php echo $admin_role['id']; ?>" <?php echo ($admin_role['id'] == $admins['admin_role']) ? 'selected' : ''; ?> ><?php echo $admin_role['name']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="status" class="col-sm-2 col-form-label text-right">
						<span class="khmer_font"> ស្ថានភាព </span><span class="text-danger">&#9734;</span>
						<br /> Status
					</label>
					<div class="col-sm-10">
					  <!-- select -->
						<select class="form-control" name="status" >
							<?php if(!isset($admins['status'])) { $admins['status'] = NULL ; } ?>
							<option value="1" <?php echo ($admins['status'] == '1') ? 'selected' : ''; ?> > <span class="khmer_font"> ដំណើរការ </span> Activated  </option>
							<option value="0" <?php echo ($admins['status'] == '0') ? 'selected' : ''; ?> > <span class="khmer_font"> ផ្អាកដំណើរការ </span> Deactivated  </option>
						</select>
					</div>
				</div>
				<div class="form-group row">
				  <label for="fname" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> ឈ្មោះ Admin </span><br /> Admin Name</label>
				  <div class="col-sm-5">
					<?php if(!isset($admins['fname'])) { $admins['fname'] = NULL ; } ?>
					<input class="form-control" type="text" name="fname" placeholder="First Name" value="<?php echo $admins['fname'] ?>" id="example-text-input">
				  </div>
				  <div class="col-sm-5">
					<?php if(!isset($admins['lname'])) { $admins['lname'] = NULL ; } ?>
					<input class="form-control" type="text" name="lname" placeholder="Last Name" value="<?php echo $admins['lname'] ?>" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="mobile" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> លេខទូរស័ព្ទ </span><br />Phone Number
				  </label>
				  <div class="col-sm-10">
					<?php if(!isset($admins['mobile'])) { $admins['mobile'] = NULL ; } ?>
					<input class="form-control" type="text" name="mobile" value="<?php echo $admins['mobile'] ?>" placeholder="Phone Number &quot;&#43;85515388488&quot;" id="example-text-input" >
				  </div>
				</div>
				<div class="form-group row">
				  <label for="email" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> សារអេឡិចត្រូនិច </span> <span class="text-danger">&#9734;</span>
					<br />Email
				  </label>
				  <div class="col-sm-10">
					<?php if(!isset($admins['email'])) { $admins['email'] = NULL ; } ?>
					<input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $admins['email'] ?>" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
					<label for="address" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> អាស័យដ្ឋានបច្ចុប្បន្ន </span><br />Address
					</label>
				  <div class="col-sm-10">
					<?php if(!isset($admins['address'])) { $admins['address'] = NULL ; } ?>
					<input class="form-control" type="text" name="address" placeholder="Address Line 1" value="<?php echo $admins['address'] ?>">
				  </div>
				</div>
				<div class="form-group row">
					<label for="description" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> បរិយាយ </span><br />Description
					</label>
				  <div class="col-sm-10">
					<?php if(!isset($admins['description'])) { $admins['description'] = NULL ; } ?>
					<textarea class="form-control" type="text" name="description" placeholder="Some short description" id="example-text-input" rows="3" cols="22" ><?php echo $admins['description'] ?></textarea>
				  </div>
				</div>
				<?php if(($call_method == 'edit') || ($call_method == 'create')) { ?>
				<div class="form-group row">
				  <label for="password" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> ពាក្យសម្ងាត់ </span><br />Password
				  </label>
				  <div class="col-sm-10">
					<input class="form-control" type="password" name="password" placeholder="Leave it blank if you dont want to change" id="example-text-input" >
				  </div>
				</div>
				<div class="form-group row">
				  <label for="confirm_password" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> បញ្ជាក់ពាក្យសម្ងាត់ </span><br />Confirm Password
				  </label>
				  <div class="col-sm-10">
					<input class="form-control" type="password" name="confirm_password" placeholder="Leave it blank if you dont want to change">
				  </div>
				</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> ជ្រើសរើសរូបតំណាង </span><br />Choose Your Avata</label>
                  <input type="file" name="image_file" id="exampleInputFile">
                  <p class="help-block text-red">Best fit with 160 &#215; 160px </p>
				</div>
				<?php } ?>
				<?php if(!empty($admins['image_file'])) { ?>
				<div class="form-group row">
					<div class="col-md-2"></div>
					<div class="col-sm-3">
						<div class="box box-default pull-up">
							<img class="card-img-top img-responsive" src="<?php echo base_url("/images/uploads/{$admins['image_file']}"); ?>" alt="" width="100">
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="form-group row">
				<?php if($call_method == 'show') { ?>
				<a href="<?php echo site_url('admins/edit/' . $admins['id']); ?>" class="btn btn-block btn-info btn-lg">Edit This Record</a>
				<?php }elseif(($call_method == 'edit') || ($call_method == 'create')) { ?>
				<button type="submit" class="btn btn-success">Submit New Record</button>
				<?php } ?>
				
				</div>
			</div>
			<div class="col-3">
			</div>
		</div>
		<!-- /.row -->
		<!--<div class="text-xs-right">
			<button type="submit" class="btn btn-info">Submit New Admin</button>
		</div>-->
	</form>
	<?php if($call_method == 'show') { ?>
		<script>
		var inputlists = document.getElementsByClassName("form-control");
		for (i=0; i < inputlists.length; ++i) {
			inputlists.item(i).disabled = true;		
		}
		</script>
	<?php } ?>
  </div>
  <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->