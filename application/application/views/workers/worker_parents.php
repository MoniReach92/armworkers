<!-- Step 2 -->
<h6><span class="khmer_font">ព័ត៌មានឪពុកម្តាយ<br/></span>Parent Infomation</h6>
<section class="bg-hexagons-dark">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="f_k_fname"><span class="khmer_font">គោត្តនាមឪពុក &#47; </span>Father Khmer First Name :</label>
			  <?php if(!isset($parent['f_k_fname'])) { $parent['f_k_fname'] = NULL ; } ?>
              <input type="text" class="form-control" name="f_k_fname" id="f_k_fname" value="<?php echo $parent['f_k_fname']; ?>">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="f_k_lname"><span class="khmer_font">នាមឪពុក &#47;</span> Father Khmer Last name :</label>
			  <?php if(!isset($parent['f_k_lname'])) { $parent['f_k_lname'] = NULL ; } ?>
              <input type="text" class="form-control" id="f_k_lname" name="f_k_lname" value="<?php echo $parent['f_k_lname']; ?>">
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="f_e_fname"><span class="khmer_font">គោត្តនាមឪពុកអក្សរឡាតាំង &#47; </span>Father Latin First Name :</label>
			  <?php if(!isset($parent['f_e_fname'])) { $parent['f_e_fname'] = NULL ; } ?>
              <input type="text" class="form-control" id="f_e_fname" name="f_e_fname" value="<?php echo $parent['f_e_fname']; ?>">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="f_e_lname"><span class="khmer_font">នាមឪពុកអក្សរឡាតាំង &#47; </span>Father Latin Last name :</label>
			  <?php if(!isset($parent['f_e_lname'])) { $parent['f_e_lname'] = NULL ; } ?>
              <input type="text" class="form-control" id="f_e_lname" name="f_e_lname" value="<?php echo $parent['f_e_lname']; ?>">
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="f_dob"><span class="khmer_font">ថ្ងៃកំណើតឪពុក&#47;</span>Father Date of Birth :</label>
			  <?php if(!isset($parent['f_dob'])) { $parent['f_dob'] = NULL ; } ?>
              <input type="date" class="form-control" id="f_dob" name="f_dob" value="<?php echo $parent['f_dob']; ?>">
		  </div>
      </div>
	  <div class="col-md-6">
          <div class="form-group">
              <label for="f_race"><span class="khmer_font"> ជនជាតិ </span>&#47; Race : <span class="danger">*</span> </label>
              <select class="custom-select form-control" id="f_race" name="f_race">
                  <option value="Khmer">ខ្មែរ - Cambodia</option>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="f_accupation"><span class="khmer_font">មុខរបរឪពុក &#47;</span> Father Occupation : <span class="danger">*</span> </label>
			  <?php if(!isset($parent['f_accupation'])) { $parent['f_accupation'] = NULL ; } ?>
              <select class="custom-select form-control " id="f_accupation" name="f_accupation">
                  <?php	foreach($job_titles as $job_title) { ?>
				  <option value="<?php echo $job_title['id']; ?>" <?php echo ($job_title['id'] == $parent['f_accupation']) ? 'selected' : ''; ?>>
				  <?php echo $job_title['name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
              <label for="f_mobile"><span class="khmer_font">លេខទូរស័ព្ទឪពុក &#47; </span>Father Phone Number :</label>
              <?php if(!isset($parent['f_mobile'])) { $parent['f_mobile'] = NULL ; } ?>
              <input type="tel" class="form-control" id="f_mobile" name="f_mobile" value="<?php echo $parent['f_mobile']; ?>">
		 </div>
      </div>
  </div>
  <div class="row">
	<div class="col-12">
       <h4 class="page-header"><span class="khmer_font">ព័ត៌មានលម្អិតរបស់ម្តាយ &#47; </span>Mother Detail</h4>
    </div>
  </div>
  <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="m_k_fname"><span class="khmer_font">គោត្តនាមម្តាយ &#47; </span>Mother Khmer First Name :</label>
				<?php if(!isset($parent['m_k_fname'])) { $parent['m_k_fname'] = NULL ; } ?>
                <input type="text" class="form-control" id="m_k_fname" name="m_k_fname" value="<?php echo $parent['m_k_fname']; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="m_k_lname"><span class="khmer_font">នាមម្តាយ &#47; </span>Mothers Khmer Last name :</label>
				<?php if(!isset($parent['m_k_lname'])) { $parent['m_k_lname'] = NULL ; } ?>
                <input type="text" class="form-control" id="m_k_lname" name="m_k_lname" value="<?php echo $parent['m_k_lname']; ?>">
            </div>
        </div>
    </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="m_e_fname"><span class="khmer_font">គោត្តនាមម្តាយអក្សរឡាតាំង &#47; </span>Mother Latin First Name :</label>
			  <?php if(!isset($parent['m_e_fname'])) { $parent['m_e_fname'] = NULL ; } ?>
              <input type="text" class="form-control " id="m_e_fname" name="m_e_fname" value="<?php echo $parent['m_e_fname']; ?>">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="m_e_lname"><span class="khmer_font">នាមម្តាយអក្សរឡាតាំង &#47; </span>Mother Latin Last name :</label>
			  <?php if(!isset($parent['m_e_lname'])) { $parent['m_e_lname'] = NULL ; } ?>
              <input type="text" class="form-control" id="m_e_lname" name="m_e_lname" value="<?php echo $parent['m_e_lname']; ?>">
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="m_dob"><span class="khmer_font">ថ្ងៃកំណើតម្តាយ&#47;</span>Mother Date of Birth :</label>
			  <?php if(!isset($parent['m_dob'])) { $parent['m_dob'] = NULL ; } ?>
              <input type="date" class="form-control" id="m_dob" name="m_dob" value="<?php echo $parent['m_dob']; ?>">
		  </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="m_race">Mother Race : <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="m_race" name="m_race">
                  <option value="Khmer">ខ្មែរ - Cambodia</option>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
  <div class="col-md-6">
      <div class="form-group">
          <label for="m_accupation"><span class="khmer_font">មុខរបរម្តាយ &#47;</span> Mother Occupation : <span class="danger">*</span> </label>
		  <?php if(!isset($parent['m_accupation'])) { $parent['m_accupation'] = NULL ; } ?>
          <select class="custom-select form-control " id="m_accupation" name="m_accupation">
              <?php	foreach($job_titles as $job_title) { ?>
              <option value="<?php echo $job_title['id']; ?>" <?php echo ($job_title['id'] == $parent['m_accupation']) ? 'selected' : ''; ?>>
              <?php echo $job_title['name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  <div class="col-md-6">
     <div class="form-group">
          <label for="m_mobile"><span class="khmer_font">លេខទូរស័ព្ទម្តាយ &#47; </span> Mother Phone Number :</label>
          <?php if(!isset($parent['m_mobile'])) { $parent['m_mobile'] = NULL ; } ?>
          <input type="tel" class="form-control" name="m_mobile" id="m_mobile" value="<?php echo $parent['m_mobile']; ?>">
     </div>
  </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label><span class="khmer_font">អាស័យដ្ឋានបច្ចុប្បន្នឪពុកម្តាយ &#47;</span> Parent current address: <span class="danger">*</label>
              <div class="c-inputs-stacked">
                  <input type="checkbox" name="pcur_add_check" id="pcur_add_check">
                  <label for="pcur_add_check" class="block"><span class="khmer_font">ដូចនឹងទីកន្លែងកំណើត&#47;</span> Same As POB:</label>
              </div>
          </div>
      </div>
  </div>
  <div class="row" id="pcur_add">
  <div class="col-md-6">
      <div class="form-group">
          <label for="pcur_add_province"><span class="khmer_font"> ខេត្ត &#47; </span> Province: <span class="danger">*</span> </label>
		  <?php if(!isset($parent['pcur_add_province'])) { $parent['pcur_add_province'] = NULL ; } ?>
          <select class="custom-select form-control " id="pcur_add_province" name="pcur_add_province">
              <option>Province</option>
              <?php	foreach($provinces as $province) { ?>
              <option value="<?php echo $province['id']; ?>" <?php echo ($province['id'] == $parent['pcur_add_province']) ? 'selected' : ''; ?>>
              <?php echo $province['name']; ?> &#8211; <?php echo $province['en_name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <label for="pcur_add_district"><span class="khmer_font">ស្រុក&#47ខ័ណ្ឌ&#47; </span>District : <span class="danger">*</span> </label>
		  <?php if(!isset($parent['pcur_add_district'])) { $parent['pcur_add_district'] = NULL ; } ?>
          <select class="custom-select form-control " id="pcur_add_district" name="pcur_add_district">
              <option>District</option>
			  <?php $pcur_add_province = $parent['pcur_add_province']; ?>
              <?php $districts = $this->Model_Gazeetteer->districts($pcur_add_province); ?>
              <?php	foreach($districts as $district) { ?>
              <option value="<?php echo $district['id']; ?>"  <?php echo ($district['id'] == $parent['pcur_add_district']) ? 'selected' : ''; ?>>
              <?php echo $district['name']; ?> &#8211; <?php echo $district['en_name']; ?>
              </option>
              <?php } ?>
          </select>
      </div>
  </div>
  </div>
  <div class="row" id="pcur_add2">
    <div class="col-md-6">
        <div class="form-group">
			<?php if(!isset($parent['pcur_add_commune'])) { $parent['pcur_add_commune'] = NULL ; } ?>
            <select class="custom-select form-control " id="pcur_add_commune" name="pcur_add_commune">
                <option value="training">Commune</option>
				<?php $pcur_add_district = $parent['pcur_add_district']; ?>
                <?php $communes = $this->Model_Gazeetteer->commmunes($pcur_add_district); ?>
                <?php	foreach($communes as $commune) { ?>
                <option value="<?php echo $commune['id']; ?>"  <?php echo ($commune['id'] == $parent['pcur_add_commune']) ? 'selected' : ''; ?>>
                <?php echo $commune['name']; ?> &#8211; <?php echo $commune['en_name']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<?php if(!isset($parent['pcur_add_village'])) { $parent['pcur_add_village'] = NULL ; } ?>
            <select class="custom-select form-control " id="pcur_add_village" name="pcur_add_village">
                <option value="">Village</option>
				<?php $pcur_add_commune = $parent['pcur_add_commune']; ?>
                <?php $villages = $this->Model_Gazeetteer->villages($pcur_add_commune); ?>
                <?php foreach($villages as $village) { ?>
                <option value="<?php echo $village['id']; ?>"  <?php echo ($village['id'] == $parent['pcur_add_village']) ? 'selected' : ''; ?>>
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
	
	$('#pcur_add_check').change(function() {
		if(this.checked) {
			$('#pcur_add').css("display", "none");
			$('#pcur_add2').css("display", "none");
		}else{
			$('#pcur_add').css("display", "");
			$('#pcur_add2').css("display", "");
		}
	});
	
	$('#pcur_add_province').on('change', function() {
		var province = $('#pcur_add_province').val();
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
					$("#pcur_add_district").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Province!');
		}
	});
	
	$('#pcur_add_district').on('change', function() {
		var district = $('#pcur_add_district').val();
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
					$("#pcur_add_commune").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a District!');
		}
	});
	
	$('#pcur_add_commune').on('change', function() {
		var commune = $('#pcur_add_commune').val();
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
					$("#pcur_add_village").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Commune!');
		}
	});
});
</script>
