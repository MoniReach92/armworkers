<!-- Step 4 -->
<h6><span class="khmer_font">ករណីបន្ទាន់<br/></span>In case of Emergency</h6>
<section class="bg-hexagons-dark">
<div class="row">
  <div class="col-6">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title text-yellow"><span class="khmer_font">ករណីបញ្ហាបន្ទាន់ទាក់ទងទៅ? &#47; </span>In case of Emergency contact with?</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
		  <div class="row">
          <div class="col-md-6">
          <div class="form-group">
			  <?php if(!isset($emergency['sos_contact'])) { $emergency['sos_contact'] = NULL ; } ?>
			  <select class="custom-select form-control" id="sos_contact" name="sos_contact">
			  	<option value="Spouse" <?php echo ($emergency['sos_contact'] == 'Spouse') ? 'selected' : ''; ?>>Spouse</option>
			  	<option value="Father" <?php echo ($emergency['sos_contact'] == 'Father') ? 'selected' : ''; ?>>Father</option>
			  	<option value="Mother" <?php echo ($emergency['sos_contact'] == 'Mother') ? 'selected' : ''; ?>>Mother</option>
			  	<option value="Other" <?php echo ($emergency['sos_contact'] == 'Other') ? 'selected' : ''; ?>>Other</option>
			  </select>
          </div>
          </div>
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- ./col -->
</div>
<!-- /.row --> 
<div class="row" id="sos_detail01">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sos_fname"><span class="khmer_font">គោត្តនាម &#47; </span>Emergency First Name :</label>
			<?php if(!isset($emergency['sos_fname'])) { $emergency['sos_fname'] = NULL ; } ?>
            <input type="text" class="form-control" id="sos_fname" name="sos_fname" value="<?php echo $emergency['sos_fname']; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sos_lname"><span class="khmer_font">នាម &#47; </span>Emergency Last name :</label>
			<?php if(!isset($emergency['sos_lname'])) { $emergency['sos_lname'] = NULL ; } ?>
            <input type="text" class="form-control" id="sos_lname" name="sos_lname" value="<?php echo $emergency['sos_lname']; ?>">
        </div>
    </div>
</div>
<div class="row" id="sos_detail02">
    <div class="col-md-6">
      <div class="form-group">
          <label for="relative"><span class="khmer_font">ត្រូវជា &#47; </span> Emergency Relation: <span class="danger">*</span> </label>
		  <?php if(!isset($emergency['relative'])) { $emergency['relative'] = NULL ; } ?>
          <select class="custom-select form-control" id="relative" name="relative">
            <?php	foreach($relatives as $relative) { ?>
            <option value="<?php echo $relative['id']; ?>" <?php echo ($relative['id'] == $emergency['relative']) ? 'selected' : ''; ?>>
            <span class="khmer_font"><?php echo $relative['k_label']; ?></span> &#8211; <?php echo $relative['e_label']; ?>
            </option>
            <?php } ?>
          </select>
      </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
            <label for="sos_mobile"><span class="khmer_font">លេខទូរស័ព្ទ &#47; </span>Emergency Phone Number :</label>
            <?php if(!isset($emergency['sos_mobile'])) { $emergency['sos_mobile'] = NULL ; } ?>
            <input type="tel" class="form-control" id="sos_mobile" name="sos_mobile" value="<?php echo $emergency['sos_mobile']; ?>">
       </div>
    </div>
</div>
<div class="row" id="sos_detail05">
    <div class="col-md-6">
        <div class="form-group">
            <label><span class="khmer_font"> អាស័យដ្ឋានករណីបន្ទាន់ &#47;</span> Emergency address: <span class="danger">*</label>
            <div class="c-inputs-stacked">
                <input type="checkbox" name="sos_add" id="sos_add">
                <label for="sos_add" class="block"><span class="khmer_font">ដូចនឹងទីកន្លែងកំណើត&#47;</span> Same As POB:</label>
            </div>
        </div>
    </div>
</div>
<div class="row" id="sos_detail03">
  <div class="col-md-6">
      <div class="form-group">
          <label for="sos_province"><span class="khmer_font"> ខេត្ត &#47; </span> Province: <span class="danger">*</span> </label>
		  <?php if(!isset($emergency['sos_province'])) { $emergency['sos_province'] = NULL ; } ?>
          <select class="custom-select form-control " id="sos_province" name="sos_province">
              <option>Province</option>
              <?php	foreach($provinces as $province) { ?>
              <option value="<?php echo $province['id']; ?>" <?php echo ($province['id'] == $emergency['sos_province']) ? 'selected' : ''; ?>>
              <?php echo $province['name']; ?> &#8211; <?php echo $province['en_name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <label for="sos_district"><span class="khmer_font">ស្រុក&#47ខ័ណ្ឌ&#47; </span>District : <span class="danger">*</span> </label>
		  <?php if(!isset($emergency['sos_district'])) { $emergency['sos_district'] = NULL ; } ?>
          <select class="custom-select form-control " id="sos_district" name="sos_district">
              <option>District</option>
			  <?php $sos_province = $emergency['sos_province']; ?>
              <?php $districts = $this->Model_Gazeetteer->districts($sos_province); ?>
              <?php	foreach($districts as $district) { ?>
              <option value="<?php echo $district['id']; ?>"  <?php echo ($district['id'] == $emergency['sos_district']) ? 'selected' : ''; ?>>
              <?php echo $district['name']; ?> &#8211; <?php echo $district['en_name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  </div>
  <div class="row" id="sos_detail04">
    <div class="col-md-6">
        <div class="form-group">
			<?php if(!isset($emergency['sos_commune'])) { $emergency['sos_commune'] = NULL ; } ?>
            <select class="custom-select form-control " id="sos_commune" name="sos_commune">
                <option value="training">Commune</option>
				<?php $sos_district = $emergency['sos_district']; ?>
                <?php $communes = $this->Model_Gazeetteer->commmunes($sos_district); ?>
                <?php	foreach($communes as $commune) { ?>
                <option value="<?php echo $commune['id']; ?>"  <?php echo ($commune['id'] == $emergency['sos_commune']) ? 'selected' : ''; ?>>
                <?php echo $commune['name']; ?> &#8211; <?php echo $commune['en_name']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<?php if(!isset($emergency['sos_village'])) { $emergency['sos_village'] = NULL ; } ?>
            <select class="custom-select form-control " id="sos_village" name="sos_village">
                <option value="">Village</option>
				<?php $sos_commune = $emergency['sos_commune']; ?>
                <?php $villages = $this->Model_Gazeetteer->villages($sos_commune); ?>
                <?php foreach($villages as $village) { ?>
                <option value="<?php echo $village['id']; ?>"  <?php echo ($village['id'] == $emergency['sos_village']) ? 'selected' : ''; ?>>
                <?php echo $village['name']; ?> &#8211; <?php echo $village['en_name']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
   </div>
</section>


<script>
$(document).ready(function() {
	
	$('#sos_detail01').css("display", "none");
	$('#sos_detail02').css("display", "none");
	$('#sos_detail03').css("display", "none");
	$('#sos_detail04').css("display", "none");
	$('#sos_detail05').css("display", "none");
	
	$('#sos_contact').on('change', function() {
		var sos_contact = $('#sos_contact').val();
		if(sos_contact === "Other"){
			$('#sos_detail01').css("display", "");
			$('#sos_detail02').css("display", "");
			$('#sos_detail03').css("display", "");
			$('#sos_detail04').css("display", "");
			$('#sos_detail05').css("display", "");
		}else{
			$('#sos_detail01').css("display", "none");
			$('#sos_detail02').css("display", "none");
			$('#sos_detail03').css("display", "none");
			$('#sos_detail04').css("display", "none");
			$('#sos_detail05').css("display", "none");
		}
	});
	
	
	$('#sos_add').change(function() {
		if(this.checked) {
			$('#sos_detail03').css("display", "none");
			$('#sos_detail04').css("display", "none");
		}else{
			$('#sos_detail03').css("display", "");
			$('#sos_detail04').css("display", "");
		}
	});
	
	$('#sos_province').on('change', function() {
		var province = $('#sos_province').val();
		if(province!=""){
			$.ajax({
				url: "<?php echo site_url("Gazeetteer/districts");?>",
				type: "POST",
				data: {
					type: 1,
					province: province
				},
				cache: false,
				success: function(dataResult){
					//var dataResult = JSON.parse(dataResult);
					$("#sos_district").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Province!');
		}
	});
	
	$('#sos_district').on('change', function() {
		var district = $('#sos_district').val();
		if(district!=""){
			$.ajax({
				url: "<?php echo site_url("Gazeetteer/communes");?>",
				type: "POST",
				data: {
					type: 1,
					district: district
				},
				cache: false,
				success: function(dataResult){
					//var dataResult = JSON.parse(dataResult);
					$("#sos_commune").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a District!');
		}
	});
	
	$('#sos_commune').on('change', function() {
		var commune = $('#sos_commune').val();
		if(commune!=""){
			$.ajax({
				url: "<?php echo site_url("Gazeetteer/villages");?>",
				type: "POST",
				data: {
					type: 1,
					commune: commune
				},
				cache: false,
				success: function(dataResult){
					//var dataResult = JSON.parse(dataResult);
					$("#sos_village").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Commune!');
		}
	});
});
</script>