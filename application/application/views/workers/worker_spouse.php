<h6><span class="khmer_font">ព័ត៌មានប្តីប្រពន្ធ<br/></span>Spouse Infomation</h6>
<section class="bg-hexagons-dark">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_k_fname"><span class="khmer_font">គោត្តនាមប្តី ឬ ប្រពន្ធ&#47; </span>Spouse Khmer First Name :</label>
            <?php if(!isset($spouse['sp_k_fname'])) { $spouse['sp_k_fname'] = NULL ; } ?>
            <input type="text" class="form-control" id="sp_k_fname" name="sp_k_fname" value="<?php echo $spouse['sp_k_fname']; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_k_lname"><span class="khmer_font">នាមប្តី ប្រពន្ធ&#47; </span>Spouse Khmer Last name :</label>
            <?php if(!isset($spouse['sp_k_lname'])) { $spouse['sp_k_lname'] = NULL ; } ?>
            <input type="text" class="form-control" id="sp_k_lname" name="sp_k_lname" value="<?php echo $spouse['sp_k_lname']; ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_e_fname"><span class="khmer_font">គោត្តនាមប្តី ឬ ប្រពន្ធអក្សរឡាតាំង&#47; </span>Spouse Latin First Name :</label>
            <?php if(!isset($spouse['sp_e_fname'])) { $spouse['sp_e_fname'] = NULL ; } ?>
            <input type="text" class="form-control" id="sp_e_fname" name="sp_e_fname" value="<?php echo $spouse['sp_e_fname']; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_e_lname"><span class="khmer_font">នាមប្តី ឬ ប្រពន្ធអក្សរឡាតាំង&#47; </span>Spouse Latin Last name :</label>
            <?php if(!isset($spouse['sp_e_lname'])) { $spouse['sp_e_lname'] = NULL ; } ?>
            <input type="text" class="form-control" id="sp_e_lname" name="sp_e_lname" value="<?php echo $spouse['sp_e_lname']; ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_dob"><span class="khmer_font">ថ្ងៃខែឆ្នាំកំណើតប្តី ឬ ប្រពន្ធ&#47; </span>Spouse Date of Birth :</label>
            <?php if(!isset($spouse['sp_dob'])) { $spouse['sp_dob'] = NULL ; } ?>
            <input type="date" class="form-control" id="sp_dob" name="sp_dob" value="<?php echo $spouse['sp_dob']; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_race"><span class="khmer_font">ជនជាតិប្តី ឬ ប្រពន្ធ&#47; </span> Race : <span class="danger">*</span> </label>
            <select class="custom-select form-control" id="sp_race" name="sp_race">
                <option value="Khmer">ខ្មែរ - Cambodia</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sp_occupation"><span class="khmer_font">មុខរបរប្តី ឬ ប្រពន្ធ&#47; </span> Spouse Occupation : <span class="danger">*</span> </label>
            <?php if(!isset($spouse['sp_occupation'])) { $spouse['sp_occupation'] = NULL ; } ?>
            <select class="custom-select form-control" id="sp_occupation" name="sp_occupation">
                <?php	foreach($job_titles as $job_title) { ?>
                <option value="<?php echo $job_title['id']; ?>" <?php echo ($job_title['id'] == $spouse['sp_occupation']) ? 'selected' : ''; ?>>
                <?php echo $job_title['name']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
            <label for="sp_mobile"><span class="khmer_font">លេខទូរស័ព្ទប្តី ឬ ប្រពន្ធ&#47; </span>Spouse Phone Number :</label>
            <?php if(!isset($spouse['sp_mobile'])) { $spouse['sp_mobile'] = NULL ; } ?>
            <input type="tel" class="form-control" id="sp_mobile" name="sp_mobile" value="<?php echo $spouse['sp_mobile']; ?>">
       </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label><span class="khmer_font">អាស័យដ្ឋានបច្ចុប្បន្នប្តីឬប្រពន្ធ &#47;</span> Spouse current address: <span class="danger">*</label>
            <div class="c-inputs-stacked">
                <input type="checkbox" name="scur_add_check" id="scur_add_check">
                <label for="scur_add_check" class="block"><span class="khmer_font">ដូចនឹងទីកន្លែងកំណើត&#47;</span> Same As POB:</label>
            </div>
        </div>
    </div>
</div>
<div class="row" id="scur_add">
  <div class="col-md-6">
      <div class="form-group">
          <label for="scur_add_province"><span class="khmer_font"> ខេត្ត &#47; </span> Province: <span class="danger">*</span> </label>
		  <?php if(!isset($spouse['scur_add_province'])) { $spouse['scur_add_province'] = NULL ; } ?>
          <select class="custom-select form-control " id="scur_add_province" name="scur_add_province">
              <option>Province</option>
              <?php	foreach($provinces as $province) { ?>
              <option value="<?php echo $province['id']; ?>" <?php echo ($province['id'] == $spouse['scur_add_province']) ? 'selected' : ''; ?> >
              <?php echo $province['name']; ?> &#8211; <?php echo $province['en_name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <label for="scur_add_district"><span class="khmer_font">ស្រុក&#47ខ័ណ្ឌ&#47; </span>District : <span class="danger">*</span> </label>
		  <?php if(!isset($spouse['scur_add_district'])) { $spouse['scur_add_district'] = NULL ; } ?>
          <select class="custom-select form-control " id="scur_add_district" name="scur_add_district">
              <option>District</option>
			  <?php $scur_add_province = $spouse['scur_add_province']; ?>
              <?php $districts = $this->Model_Gazeetteer->districts($scur_add_province); ?>
              <?php	foreach($districts as $district) { ?>
              <option value="<?php echo $district['id']; ?>"  <?php echo ($district['id'] == $spouse['scur_add_district']) ? 'selected' : ''; ?>>
              <?php echo $district['name']; ?> &#8211; <?php echo $district['en_name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  </div>
  <div class="row" id="scur_add2">
    <div class="col-md-6">
        <div class="form-group">
			<?php if(!isset($spouse['scur_add_commune'])) { $spouse['scur_add_commune'] = NULL ; } ?>
            <select class="custom-select form-control " id="scur_add_commune" name="scur_add_commune">
                <option value="training">Commune</option>
				<?php $scur_add_district = $spouse['scur_add_district']; ?>
                <?php $communes = $this->Model_Gazeetteer->commmunes($scur_add_district); ?>
                <?php	foreach($communes as $commune) { ?>
                <option value="<?php echo $commune['id']; ?>"  <?php echo ($commune['id'] == $spouse['scur_add_commune']) ? 'selected' : ''; ?>>
                <?php echo $commune['name']; ?> &#8211; <?php echo $commune['en_name']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<?php if(!isset($spouse['scur_add_village'])) { $spouse['scur_add_village'] = NULL ; } ?>
            <select class="custom-select form-control " id="scur_add_village" name="scur_add_village">
                <option value="">Village</option>
				<?php $scur_add_commune = $spouse['scur_add_commune']; ?>
                <?php $villages = $this->Model_Gazeetteer->villages($scur_add_commune); ?>
                <?php foreach($villages as $village) { ?>
                <option value="<?php echo $village['id']; ?>"  <?php echo ($village['id'] == $spouse['scur_add_village']) ? 'selected' : ''; ?>>
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
	
	$('#scur_add_check').change(function() {
		if(this.checked) {
			$('#scur_add').css("display", "none");
			$('#scur_add2').css("display", "none");
		}else{
			$('#scur_add').css("display", "");
			$('#scur_add2').css("display", "");
		}
	});
	
	$('#scur_add_province').on('change', function() {
		var province = $('#scur_add_province').val();
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
					$("#scur_add_district").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Province!');
		}
	});
	
	$('#scur_add_district').on('change', function() {
		var district = $('#scur_add_district').val();
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
					$("#scur_add_commune").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a District!');
		}
	});
	
	$('#scur_add_commune').on('change', function() {
		var commune = $('#scur_add_commune').val();
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
					$("#scur_add_village").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Commune!');
		}
	});
});
</script>