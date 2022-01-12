<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
	<?php if($call_method == 'show') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់បង្ហាញពត៌មានលំអិត</span> &#921; Showing Form Detail  </h3>
	<?php }elseif($call_method == 'edit') { ?>
    <h3 class="box-title"><span class="khmer_font">ទំរង់កែប្រែ ទិន្ន័យ </span> &#921; Editalbe Form </h3>
	<?php }elseif($call_method == 'destroy') { ?>
    <h3 class="box-title text-yellow"><span class="khmer_font">លប់ក្រុមពលករ </span> &#921; Delete Group Function</h3>
	<h6 class="box-subtitle text-danger">Be informed, there is no undone once you click Yes Deleted</h6>
	<?php }else{ ?>
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតថ្មី </span> &#921; Create New Group </h3>
	<?php } ?>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<form method="post">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
				<div class="form-group row">
				  <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះក្រុម<br/></span>Group Name<span class="text-danger">&#9734;</span></label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="name" placeholder="Group Name" id="kdkdk" value="<?php if(!empty($group['name'])) { echo $group['name'];} ?>">
				  </div>
				</div>
				<div class="form-group row">
					<label for="description" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ពិពណ៌នាអំពីក្រុម<br/></span>Group Description</label>
					<div class="col-sm-10">
						<textarea name="description"  class="form-control"  id="kdkdk" placeholder="Please add some description."><?php if(isset($group['description'])){ echo $group['description']; } ?></textarea>
					</div>
				</div>
				<div class="form-group row">
				<?php if($call_method == 'show') { ?>
				<a href="<?php echo site_url('groups/edit/' . $group['id']); ?>" class="btn btn-block btn-info btn-lg">Edit This Group</a>
				<?php }elseif(($call_method == 'edit') || ($call_method == 'create')) { ?>
				<button type="submit" class="btn btn-success">Submit New Group</button>
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
	<?php if(($call_method == 'show') || ($call_method == 'destroyerer')) { ?>
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