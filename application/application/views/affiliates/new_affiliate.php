<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
	<?php if($call_method == 'show') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់បង្ហាញពត៌មានអ្នកតំណាងលំអិត</span> &#921; Showing Affiliate Detail  </h3>
	<?php }elseif($call_method == 'edit') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់កែប្រែ ទិន្ន័យអ្នកតំណាង </span> &#921; Edit Affiliate Form </h3>
	<?php }elseif($call_method == 'destroy') { ?>
    <h3 class="box-title text-yellow"><span class="khmer_font">លប់អ្នកតំណាង </span> &#921; Delete Affiliate</h3>
	<h6 class="box-subtitle text-danger">Be informed, there is no undone once you click Yes Deleted</h6>
	<?php }else{ ?>
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតអ្នកតំណាងថ្មី </span> &#921; Create New Affiliate Form </h3>
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
				  <label for="branch" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះសាខា<br/></span>Branch Name<span class="text-danger">&#9734;</span></label>
				  <div class="col-sm-10">
					<select class="form-control " name="branch" id="branch">
                        <?php if(!isset($affiliate['branch'])) { $affiliate['branch'] = NULL ; } ?>
                        <?php foreach($branches as $branch) { ?>
                        <option value="<?php echo $branch['id']; ?>" <?php echo ($branch['id'] == $affiliate['branch']) ? 'selected' : ''; ?>>
                        <?php echo $branch['name']; ?>
                        </option>
                        <?php } ?>
                    </select>
				  </div>
				</div>
				<div class="form-group row">
				  <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះតំណាង<br/></span>Affiliate Name<span class="text-danger">&#9734;</span></label>
                  <?php if(!isset($affiliate['name'])) { $affiliate['name'] = NULL ; } ?>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="name" placeholder="Affiliate Name" value="<?php echo $affiliate['name'] ?>">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="mobile" class="col-sm-2 col-form-label text-right"><span class="khmer_font">លេខទូរស័ព្ទ <br/></span>Affiliate Mobile<span class="text-danger">&#9734;</span></label>
                  <?php if(!isset($affiliate['mobile'])) { $affiliate['mobile'] = NULL ; } ?>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="mobile" placeholder="Affiliate Mobile" value="<?php echo $affiliate['mobile'] ?>">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="email" class="col-sm-2 col-form-label text-right"><span class="khmer_font">សារអេឡិចត្រូនិច<br/></span>Email Add</label>
                  <?php if(!isset($affiliate['email'])) { $affiliate['email'] = NULL ; } ?>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="email" placeholder="Affiliate Email" value="<?php echo $affiliate['email'] ?>">
				  </div>
				</div>
				<div class="form-group row">
					<label for="address" class="col-sm-2 col-form-label text-right"><span class="khmer_font">អាស័យដ្ឋាន<br/></span>Address</label>
					<?php if(!isset($affiliate['address'])) { $affiliate['address'] = NULL ; } ?>
					<div class="col-sm-10">
						<textarea name="address" id="textarea" class="form-control" placeholder="Please fill in affiliate address."><?php echo $affiliate['address'] ?></textarea>
					</div>
				</div>
					<div class="form-group row">
				<?php if($call_method == 'show') { ?>
				<a href="<?php echo site_url('Affiliates/edit/' . $affiliate['id']); ?>" class="btn btn-block btn-info btn-lg">Edit This Record</a>
				<?php }elseif(($call_method == 'edit') || ($call_method == 'create')) { ?>
				<button type="submit" class="btn btn-success">Submit New Record</button>
				<?php }elseif($call_method == 'destroy'){ ?>
				<button type="submit" class="btn btn-danger">Yes Detlete Now!</button>
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