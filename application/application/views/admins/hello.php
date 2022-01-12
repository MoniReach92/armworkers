<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
    <h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើត Admin ថ្មី</span> &#921; New Admin Form <?php echo $user_name; ?>   </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<form method="post">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
				<div class="form-group row">
					<label for="example-text-input" class="col-sm-2 col-form-label text-right">
						<span class="khmer_font"> ទួនាទី Admin </span><span class="text-danger">&#9734;</span>
						<br /> Admin's Role
					</label>
					<div class="col-sm-10">
					  <!-- select -->
						<select class="form-control" name="admin[admin_role]" >
							<option><span class="khmer_font"> សូមជ្រើសរើស មុខនាទីមួយ </span> Please select role  </option>
							<option value=""></option>
						</select>
					</div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> ឈ្មោះ Admin </span><span class="text-danger">&#9734;</span><br /> Admin Name</label>
				  <div class="col-sm-5">
					<input class="form-control" type="text" name="admin[fname]" placeholder="First Name" value="<?php echo h($admin->fname); ?>" id="example-text-input">
				  </div>
				  <div class="col-sm-5">
					<input class="form-control" type="text" name="admin[lname]" placeholder="Last Name" value="<?php echo h($admin->lname); ?>" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> លេខទូរស័ព្ទ </span><span class="text-danger">&#9734;</span>
					<br />Phone Number
				  </label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="admin[mobile]" value="" placeholder="Phone Number &quot;&#43;85515388488&quot;" id="example-text-input" >
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> សារអេឡិចត្រូនិច </span> <span class="text-danger">&#9734;</span>
					<br />Email
				  </label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="admin[email]" placeholder="Email" value="" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> អាស័យដ្ឋានបច្ចុប្បន្ន </span><br />Address
					</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="admin[address]" placeholder="Address Line 1" value="">
				  </div>
				</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> បរិយាយ </span><br />Description
					</label>
				  <div class="col-sm-10">
					<textarea class="form-control" type="text" name="admin[description]" placeholder="Some short description" id="example-text-input" rows="3" cols="22" ></textarea>
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> ពាក្យសម្ងាត់ </span> <span class="text-danger">&#9734;</span>
					<br />Password
				  </label>
				  <div class="col-sm-10">
					<input class="form-control" type="password" name="admin[password]" placeholder="" id="example-text-input" >
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> បញ្ជាក់ពាក្យសម្ងាត់ </span> <span class="text-danger">&#9734;</span>
					<br />Confirm Password
				  </label>
				  <div class="col-sm-10">
					<input class="form-control" type="password" name="admin[confirm_password]" placeholder="">
				  </div>
				</div>
			</div>
			<div class="col-3">
			</div>
		</div>
		<!-- /.row -->
		<div class="text-xs-right">
			<button type="submit" class="btn btn-info">Submit New Admin</button>
		</div>
	</form>
  </div>
  <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->