<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតថ្មី </span> &#921; Create New Form </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<form method="post">
		<div class="row">
			<div class="col-3">
				<p>
				<?php
					if(!empty($care_name)){
						print_r($care_name);
					}
					?>
				</p>
			</div>
			<div class="col-6">
				<div class="form-group row">
				  <label for="care_name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះឧស្សាហកម្ម<br/></span>Industry Name<span class="text-danger">&#9734;</span></label>
				  <div class="col-sm-10">
					<select class="form-control" name="care_name[]" id="cars" multiple>
					  <option value="volvo">Volvo</option>
					  <option value="saab">Saab</option>
					  <option value="opel">Opel</option>
					  <option value="audi">Audi</option>
					</select>
				  </div>
				</div>
				<div class="form-group row">
				<button type="submit" class="btn btn-success">Submit New Record</button>
				</div>
			</div>
			<div class="col-3">
			</div>
		</div>
	</form>
  </div>
  <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->