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
	<h3 class="box-title"><span class="khmer_font">ទំរង់បង្កើតថ្មីសហគ្រាសថ្មី </span> &#921; Create New Employer Form </h3>
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
                  <label for="country" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ប្រទេស<br/></span>Country<span class="text-danger">&#9734;</span></label>
                  <div class="col-sm-10">
                    <!-- select -->
					  <?php if(!isset($employer['country'])) { $employer['country'] = NULL ; } ?>
                      <select name="country" class="form-control">
                          <?php
						  	foreach($countries as $country) { 
						  ?>
							<option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == $employer['country']) ? 'selected' : ''; ?> ><?php echo $country['name']; ?></option>
                          <?php } ?>
                      </select>
                  </div>
              </div>
			  <div class="form-group row">
                <label for="empl_id" class="col-sm-2 col-form-label text-right"><span class="khmer_font">លេខកូដផ្លូវការរបស់សហគ្រាស<br/></span>Employer ID<span class="text-danger">&#9734;</span></label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['empl_id'])) { $employer['empl_id'] = NULL ; } ?>
                  <input class="form-control" type="text" name="empl_id" placeholder="ex. KHE00000001" value="<?php echo $employer['empl_id'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="k_name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះអក្សរខ្មែរ<br/></span>Khmer Name<span class="text-danger">&#9734;</span></label>
				<?php if(!isset($employer['k_name'])) { $employer['k_name'] = NULL ; } ?>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="k_name" placeholder="Khmer Name" value="<?php echo $employer['k_name'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
				<?php if(!isset($employer['title'])) { $employer['title'] = NULL ; } ?>
                <label for="e_name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះអក្សរឡាតាំង<br/></span>Latin Name<span class="text-danger">&#9734;</span></label>
                <div class="col-sm-3">
                      <select name="title" class="form-control">
                          <option <?php echo ($employer['title'] === 'Miss') ? 'selected' : ''; ?>>Miss</option>
                          <option <?php echo ($employer['title'] === 'Mr') ? 'selected' : ''; ?>>Mr</option>
                          <option <?php echo ($employer['title'] === 'Mrs') ? 'selected' : ''; ?>>Mrs</option>
                      </select>
                </div>
                <div class="col-sm-7">
                  <?php if(!isset($employer['e_name'])) { $employer['e_name'] = NULL ; } ?>
                  <input class="form-control" type="text" name="e_name" placeholder="Latin Name" value="<?php echo $employer['e_name'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="ab_name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះហៅក្រៅ<br/></span>Name Abreviate</label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['ab_name'])) { $employer['ab_name'] = NULL ; } ?>
                  <input class="form-control" type="text" name="ab_name" placeholder="Name Abreviate" value="<?php echo $employer['ab_name'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label text-right"><span class="khmer_font">លេខទូរស័ព្ទ<br/></span>Phone Number<span class="text-danger">&#9734;</span></label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['mobile'])) { $employer['mobile'] = NULL ; } ?>
                  <input class="form-control" type="text" name="mobile" placeholder="+85512345678" value="<?php echo $employer['mobile'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label text-right"><span class="khmer_font">សារអេឡិចត្រូនិច<br/></span>Email</label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['email'])) { $employer['email'] = NULL ; } ?>
                  <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $employer['email'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="add1" class="col-sm-2 col-form-label text-right"><span class="khmer_font">អាស័យដ្ឋានទី១<br/></span>Address Line 1</label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['add1'])) { $employer['add1'] = NULL ; } ?>
                  <input class="form-control" type="text" name="add1" placeholder="Address Line 1" value="<?php echo $employer['add1'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="add2" class="col-sm-2 col-form-label text-right"><span class="khmer_font">អាស័យដ្ឋានទី២<br/></span>Address Line 2</label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['add2'])) { $employer['add2'] = NULL ; } ?>
                  <input class="form-control" type="text" name="add2" placeholder="Address Line 2" value="<?php echo $employer['add2'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="postal" class="col-sm-2 col-form-label text-right"><span class="khmer_font">លេខកូដប្រៃសណីយ៍<br/></span>Postal Code</label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['postal'])) { $employer['postal'] = NULL ; } ?>
                  <input class="form-control" type="text" name="postal" placeholder="Postal Code" value="<?php echo $employer['postal'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="agency" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះភ្នាក់ងារ<br/></span>Agency</label>
                <div class="col-sm-10">
                      <select name="agency" class="form-control">
                          <option></option>
                      </select>               
                </div>
              </div>
              <div class="form-group row">
                <label for="business_industry" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ប្រភេទសហគ្រាស<br/></span>Industry</label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['business_industry'])) { $employer['business_industry'] = NULL ; } ?>
                  <select name="business_industry" class="form-control">
                      <?php
                        foreach($industries as $industry) { 
                      ?>
                        <option value="<?php echo $industry['id']; ?>" <?php echo ($industry['id'] == $employer['business_industry']) ? 'selected' : ''; ?> ><?php echo $industry['name']; ?></option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="quota" class="col-sm-2 col-form-label text-right"><span class="khmer_font">កូតា<br/></span>Quota</label>
                <div class="col-sm-4">
                  <?php if(!isset($employer['quota'])) { $employer['quota'] = NULL ; } ?>
                  <input class="form-control" type="text" name="quota" placeholder="Quota" value="<?php echo $employer['quota'] ?>" id="example-text-input">
                </div>
                <div class="col-sm-3">
                  <?php if(!isset($employer['quo_f'])) { $employer['quo_f'] = NULL ; } ?>
                  <input class="form-control" type="text" name="quo_f" placeholder="Female" value="<?php echo $employer['quo_f'] ?>" id="example-text-input">
                </div>
                <div class="col-sm-3">
                  <?php if(!isset($employer['quo_m'])) { $employer['quo_m'] = NULL ; } ?>
                  <input class="form-control" type="text" name="quo_m" placeholder="Male" value="<?php echo $employer['quo_m'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="worker_total" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ចំនួនតម្រូវការអ្នកធ្វើការ<br/></span>Total Use Worker</label>
                <div class="col-sm-4">
                  <?php if(!isset($employer['worker_total'])) { $employer['worker_total'] = NULL ; } ?>
                  <input class="form-control" type="text" name="worker_total" placeholder="Total Use" value="<?php echo $employer['worker_total'] ?>" id="example-text-input">
                </div>
                <div class="col-sm-3">
                  <?php if(!isset($employer['worker_f'])) { $employer['worker_f'] = NULL ; } ?>
                  <input class="form-control" type="text" name="worker_f" placeholder="Femal" value="<?php echo $employer['worker_f'] ?>" id="example-text-input">
                </div>
                <div class="col-sm-3">
                  <?php if(!isset($employer['worker_m'])) { $employer['worker_m'] = NULL ; } ?>
                  <input class="form-control" type="text" name="worker_m" placeholder="Male" value="<?php echo $employer['worker_m'] ?>" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> បរិយាយ </span><br />Description
                  </label>
                <div class="col-sm-10">
                  <?php if(!isset($employer['description'])) { $employer['description'] = NULL ; } ?>
                  <textarea class="form-control" type="text" name="description" placeholder="Some short description" id="example-text-input" rows="3" cols="22" ><?php echo $employer['description'] ?></textarea>
                </div>
              </div>
			<!--File attachment-->
			<?php if($call_method !== 'edit'){ ?>
            <div class="form-group row">
				<div class="box box-solid bg-dark">
                <div class="box-header with-border">
                  <h5 class="box-title"><span class="khmer_font">ឯកសារទី០១ </span> &#921; First Ref Doc</h5>					  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group row">
                        <label for="doc_type1" class="col-sm-2 col-form-label text-right">Document Type<span class="text-danger">&#9734;</span></label>
                        <div class="col-sm-10">
                          <!-- select -->
                            <select name="doc_type1" class="form-control">
                                <option >Please select One</option>
                                <option value="1">ID Card</option>
                                <option value="2">Passport ID</option>						
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="number1" class="col-sm-2 col-form-label text-right">Document No<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="number1" placeholder="Document No" id="example-text-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="issue_date1" class="col-sm-2 col-form-label text-right">Issued Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="issue_date1" placeholder="" id="example-date-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="expired_date1" class="col-sm-2 col-form-label text-right">Expired Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="expired_date1" placeholder="" id="example-date-input">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="file_name1" class="col-sm-2 col-form-label text-right">Attache File<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file_name1" placeholder="Chose your file" id="example-text-input">
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->			
              </div>
			</div>
			<div class="form-group row">
				<div class="box box-solid bg-dark">
                <div class="box-header with-border">
                  <h5 class="box-title"><span class="khmer_font"> ឯកសារទី០២ </span> &#921; Second Ref Doc</h5>					  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group row">
                        <label for="doc_type2" class="col-sm-2 col-form-label text-right">Document Type<span class="text-danger">&#9734;</span></label>
                        <div class="col-sm-10">
                          <!-- select -->
                            <select name="doc_type2" class="form-control">
                                <option >Please select One</option>
                                <option value="1">ID Card</option>
                                <option value="2">Passport ID</option>						
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="number2" class="col-sm-2 col-form-label text-right">Document No<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="number2" placeholder="Document No" id="example-text-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="issue_date2" class="col-sm-2 col-form-label text-right">Issued Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="issue_date2" placeholder="" id="example-date-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="expired_date2" class="col-sm-2 col-form-label text-right">Expired Date</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="date" name="expired_date2" placeholder="" id="example-date-input">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="file_name2" class="col-sm-2 col-form-label text-right">Attache File<span class="text-danger">&#9734;</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file_name2" placeholder="Chose your file" id="example-text-input">
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->			
              </div>
			</div>
			<?php } ?>
			<!--End of File attachment-->
<!--            <div class="form-group row mb-0">
            <div class="col-12">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus mr-5"></i> Add more File
                </button>
            </div>
            </div>-->
            <div class="form-group row">
            <?php if($call_method == 'show') { ?>
            <a href="<?php echo site_url('employers/edit/' . $employer['id']); ?>" class="btn btn-block btn-info btn-lg">Edit This Record</a>
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