<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
	
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតឯកសារថ្មី </span> &#921; Create New Files Form </h3>
	
  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<?php echo form_open_multipart(''); ?>
		<div class="row">
			<div class="col-3">
				<?php 
				//if(!empty($new_file))
				//{
					print_r($new_file);
				//}
				?>
			</div>
			<div class="col-6">
			<!--File attachment-->
            <div class="form-group row">
				<div class="box box-solid bg-dark">
                <div class="box-header with-border">
                  <h5 class="box-title"><span class="khmer_font">ឯកសារទី </span> &#921; First Ref Doc</h5>					  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group row">
                        <label for="doc_type" class="col-sm-2 col-form-label text-right">Document Type<span class="text-danger">&#9734;</span></label>
                        <div class="col-sm-10">
                          <!-- select -->
                            <select name="doc_type" class="form-control">
                                <option >Please select One</option>
                                <option value="1">ID Card</option>
                                <option value="2">Passport ID</option>						
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="number" class="col-sm-2 col-form-label text-right">Document No<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="number" placeholder="Document No" id="example-text-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="issue_date" class="col-sm-2 col-form-label text-right">Issued Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="issue_date" placeholder="" id="example-date-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="expired_date" class="col-sm-2 col-form-label text-right">Expired Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="expired_date" placeholder="" id="example-date-input">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="file_name" class="col-sm-2 col-form-label text-right">Attache File<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file_name" placeholder="Chose your file" id="example-text-input">
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->			
              </div>
			</div>
			<div class="form-group row">
				<div class="box box-solid bg-dark">
                <div class="box-header with-border">
                  <h5 class="box-title"><span class="khmer_font"> ឯកសារទី </span> &#921; Second Ref Doc</h5>					  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group row">
                        <label for="doc_type" class="col-sm-2 col-form-label text-right">Document Type<span class="text-danger">&#9734;</span></label>
                        <div class="col-sm-10">
                          <!-- select -->
                            <select name="doc_type" class="form-control">
                                <option >Please select One</option>
                                <option value="1">ID Card</option>
                                <option value="2">Passport ID</option>						
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="number" class="col-sm-2 col-form-label text-right">Document No<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="number" placeholder="Document No" id="example-text-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="issue_date" class="col-sm-2 col-form-label text-right">Issued Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="issue_date" placeholder="" id="example-date-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="expired_date" class="col-sm-2 col-form-label text-right">Expired Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="expired_date" placeholder="" id="example-date-input">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="file_name" class="col-sm-2 col-form-label text-right">Attache File<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file_name" placeholder="Chose your file" id="example-text-input">
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->			
              </div>
			</div>
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