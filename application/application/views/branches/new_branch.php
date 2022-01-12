<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
	<?php if($call_method == 'show') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់បង្ហាញពត៌មានសាខាលំអិត</span> &#921; Showing Branch Detail  </h3>
	<?php }elseif($call_method == 'edit') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់កែប្រែ ទិន្ន័យសាខា </span> &#921; Edit Branch Form </h3>
	<?php }elseif($call_method == 'destroy') { ?>
    <h3 class="box-title text-yellow"><span class="khmer_font">លប់សាខា </span> &#921; Delete Branches</h3>
	<h6 class="box-subtitle text-danger">Be informed, there is no undone once you click Yes Deleted</h6>
	<?php }else{ ?>
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតសាខាថ្មី </span> &#921; Create New Branch Form </h3>
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
				  <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះសាខា<br/></span>Branch Name<span class="text-danger">&#9734;</span></label>
                  <?php if(!isset($branch['name'])) { $branch['name'] = NULL ; } ?>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="name" placeholder="Branch Name" value="<?php echo $branch['name'] ?>">
				  </div>
				</div>
				<div class="form-group row">
					<label for="address" class="col-sm-2 col-form-label text-right"><span class="khmer_font">អាស័យដ្ឋាន<br/></span>Address</label>
					<?php if(!isset($branch['address'])) { $branch['address'] = NULL ; } ?>
					<div class="col-sm-10">
						<textarea name="address" id="textarea" class="form-control" placeholder="Please fill in branch address."><?php echo $branch['address'] ?></textarea>
					</div>
				</div>
					<div class="form-group row">
				<?php if($call_method == 'show') { ?>
				<a href="<?php echo site_url('Branches/edit/' . $branch['id']); ?>" class="btn btn-block btn-info btn-lg">Edit This Record</a>
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