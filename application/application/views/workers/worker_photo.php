<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
	
	<h3 class="box-title"><span class="khmer_font">ទំរង់បញ្ចូលរូបភាពពលករ </span> &#921; Worker Photo Add </h3>

  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<?php  echo form_open_multipart('');  ?>
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
    
			<!--File attachment-->
			
            <div class="form-group row">
				<div class="box box-solid bg-dark">
                <div class="box-header with-border">
				<?php if(!empty($worker['worker_photo'])) { ?>
                  <h5 class="box-title text-warning"><span class="khmer_font">ប្តូរូបភាពពលករ </span> &#921; Change Worker Photo</h5>
				<?php }else{ ?>
                  <h5 class="box-title"><span class="khmer_font">រូបភាពពលករ </span> &#921; Worker Photo</h5>
				<?php } ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    
                    
                    
                    <div class="form-group row">
                        <input class="form-control" type="hidden" name="anyname" >
                    <?php if(!empty($worker['worker_photo'])) { ?>
					<div class="form-group row">
						<div class="col-md-2"></div>
						<div class="col-sm-3">
							<div class="box box-default pull-up">
								<img class="card-img-top img-responsive" src="<?php echo base_url("/images/worker_photo/{$worker['worker_photo']}"); ?>" alt="" width="100">
							</div>
						</div>
					</div>
					<?php } ?>
                    </div>
					<div class="form-group row">
                      <label for="file_name1" class="col-sm-2 col-form-label text-right">Worker Photo<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file_name1" placeholder="Chose your file" id="example-text-input">
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->			
              </div>
			</div>
			

			<!--End of File attachment-->
<!--            <div class="form-group row mb-0">
            <div class="col-12">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus mr-5"></i> Add more File
                </button>
            </div>
            </div>-->
            <div class="form-group row">

            <button type="submit" class="btn btn-success">Submit New Record</button>

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
  </div>
  <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->