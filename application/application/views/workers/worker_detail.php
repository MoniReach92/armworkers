<!-- Step 1 -->
<h6><span class="khmer_font">ព័ត៌មានផ្ទាល់ខ្លួន<br/></span>Personal Information</h6>
<section class="bg-hexagons-dark">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
          <label for="branch"> <span class="khmer_font"> ជ្រើសរើសសាខា &#47;</span>Branch Selection : <span class="danger">&#9734;</span> </label>
          <!-- select -->
          <select class="form-control " name="branch" id="branch">
			  <option selected>Select any Branch</option>
              <?php if(!isset($worker['branch'])){  $worker['branch'] = NULL ; }  ?>
              <?php	foreach($branches as $branch) { ?>
              <option value="<?php echo $branch['id']; ?>" <?php echo ($branch['id'] == $worker['branch']) ? 'selected' : ''; ?>>
              <?php echo $branch['name']; ?>
              </option>
              <?php } ?>
          </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
          <label for="affiliate"> <span class="khmer_font"> អ្នកតំណាង&#47;</span>Affiliate : <span class="danger">&#9734;</span> </label>
          <select class="form-control " name="affiliate" id="affiliate">
              <?php if(!isset($worker['affiliate'])) { $worker['affiliate'] = NULL ; } ?>
              <?php	foreach($affiliates as $affiliate) { ?>
              <option value="<?php echo $affiliate['id']; ?>" <?php echo ($affiliate['id'] == $worker['affiliate']) ? 'selected' : ''; ?>>
              <?php echo $country['name']; ?>
              </option>
              <?php } ?>
          </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
          <?php if(!isset($worker['id'])) { $worker['id'] = NULL ; } ?>
          <input type="hidden" id="worker_id" value="<?php echo $worker['id']; ?>">
          <label for="group_id"> <span class="khmer_font"> ជ្រើសរើសក្រុម &#47;</span>Group List Selection : <span class="danger">&#9734;</span> </label>
          <!-- select -->
          <select class="form-control " name="group_id" id="group_id">
			  <?php if(!isset($worker['group_id'])){  $worker['group_id'] = NULL ; }  ?>
			  <?php	foreach($groups as $group) { ?>
			  <option value="<?php echo $group['id']; ?>" <?php echo ($group['id'] == $worker['group_id']) ? 'selected' : ''; ?>>
			  <?php echo $group['name']; ?>
			  </option>
              <?php } ?>
          </select>
          </div>
      </div>
      <div class="col-md-6">
		  <div class="form-group">
          <label for="country"> <span class="khmer_font"> ប្រទេសដែលត្រូវធ្វើការ &#47;</span>Working Country : <span class="danger">&#9734;</span> </label>
          <select class="form-control " name="country" id="country">
			  <?php if(!isset($worker['country'])) { $worker['country'] = NULL ; } ?>
			  <?php	foreach($countries as $country) { ?>
			  <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == $worker['country']) ? 'selected' : ''; ?>>
			  <?php echo $country['name']; ?>
			  </option>
              <?php } ?>
          </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="k_fname"><span class="khmer_font">គោត្តនាម &#47; </span>Khmer First Name :</label>
			  <?php if(!isset($worker['k_fname'])) { $worker['k_fname'] = NULL ; } ?>
              <input type="text" class="form-control" name="k_fname" id="k_fname" value="<?php echo $worker['k_fname']; ?>">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="k_fname"><span class="khmer_font">នាម &#47; </span>Khmer Last name :</label>
			  <?php if(!isset($worker['k_lname'])) { $worker['k_lname'] = NULL ; } ?>
              <input type="text" class="form-control " name="k_lname" id="k_lname" value="<?php echo $worker['k_lname']; ?>">
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="e_fname"><span class="khmer_font">គោត្តនាមអក្សរឡាតាំង &#47; </span>Latin First Name :</label>
			  <?php if(!isset($worker['e_fname'])) { $worker['e_fname'] = NULL ; } ?>
              <input type="text" class="form-control " name="e_fname" id="e_fname" value="<?php echo $worker['e_fname']; ?>">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="e_lname"><span class="khmer_font">នាមអក្សរឡាតាំង &#47; </span>Latin Last name :</label>
			  <?php if(!isset($worker['e_lname'])) { $worker['e_lname'] = NULL ; } ?>
              <input type="text" class="form-control " name="e_lname" id="e_lname" value="<?php echo $worker['e_lname']; ?>">
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="gender"><span class="khmer_font">ភេទ &#47;</span> Gender : <span class="danger">*</span> </label>
              <select class="custom-select form-control" name="gender" id="gender">
				  <?php if(!isset($worker['gender'])) { $worker['gender'] = NULL ; } ?>
                  <option value="Male" <?php echo ($worker['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                  <option value="Female" <?php echo ($worker['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="dob"><span class="khmer_font">ថ្ងៃខែឆ្នាំកំណើត &#47; </span>Date of Birth :</label>
			  <?php if(!isset($worker['dob'])) { $worker['dob'] = NULL ; } ?>
              <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $worker['dob']; ?>">
		  </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="nationality"><span class="khmer_font">សញ្ជាតិ &#47;</span> Nationality : <span class="danger">*</span> </label>
              <select class="custom-select form-control " name="nationality" id="nationality">
                  <option value="Khmer">ខ្មែរ - Cambodia</option>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="race"> <span class="khmer_font">ជនជាតិ &#47;</span> Race : <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="race" name="race">
                  <option value="Khmer">ខ្មែរ - Cambodia</option>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="religion"><span class="khmer_font">សាសនា &#47;</span> Religion : <span class="danger">*</span> </label>
			  <?php if(!isset($worker['religion'])) { $worker['religion'] = NULL ; } ?>
              <select class="custom-select form-control " id="religion" name="religion">
                  <option value="buddish" <?php echo ($worker['religion'] == 'buddish') ? 'selected' : ''; ?>>ព្រះពុទ្ធ - Buddisht</option>
                  <option value="christ" <?php echo ($worker['religion'] == 'christ') ? 'selected' : ''; ?>>គ្រីស្ទ - Christ</option>
                  <option value="islam" <?php echo ($worker['religion'] == 'islam') ? 'selected' : ''; ?>>ឥស្លាម - Islam</option>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="title"><span class="khmer_font">ងារ &#47;</span> Title : <span class="danger">*</span> </label>
			  <?php if(!isset($worker['title'])) { $worker['title'] = NULL ; } ?>
              <select class="custom-select form-control " id="title" name="title">
                  <option value="Miss" <?php echo ($worker['title'] == 'Miss') ? 'selected' : ''; ?>>Miss</option>
                  <option value="Mr" <?php echo ($worker['title'] == 'Mr') ? 'selected' : ''; ?>>Mr</option>
                  <option value="Mrs" <?php echo ($worker['title'] == 'Mrs') ? 'selected' : ''; ?>>Mrs</option>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="marital"><span class="khmer_font">ស្ថានភាពគ្រួសារ &#47;</span> Marital Status : <span class="danger">*</span> </label>
			  <?php if(!isset($worker['marital'])) { $worker['marital'] = NULL ; } ?>
              <select class="custom-select form-control " id="marital" name="marital">
                  <option value="married" <?php echo ($worker['marital'] == 'married') ? 'selected' : ''; ?>>រៀបការ Married</option>
                  <option value="single" <?php echo ($worker['marital'] == 'single') ? 'selected' : ''; ?>>នៅលីវ Single</option>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="job_title"><span class="khmer_font">តួនាទីការងារ &#47;</span> Job Title : <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="job_title" name="job_title">
				  <?php if(!isset($worker['job_title'])) { $worker['job_title'] = NULL ; } ?>
                  <?php	foreach($job_titles as $job_title) { ?>
				  <option value="<?php echo $job_title['id']; ?>" <?php echo ($job_title['id'] == $worker['job_title']) ? 'selected' : ''; ?>>
				  <?php echo $job_title['name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="industry"><span class="khmer_font">ប្រភេទការងារ &#47;</span> Job Type : <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="industry" name="industry">
				  <?php if(!isset($worker['industry'])) { $worker['industry'] = NULL ; } ?>
                  <?php	foreach($industries as $industry) { ?>
				  <option value="<?php echo $industry['id']; ?>" <?php echo ($industry['id'] == $worker['industry']) ? 'selected' : ''; ?>>
				  <?php echo $industry['name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="mobile"><span class="khmer_font">លេខទូរស័ព្ទ &#47;</span>Phone Number :</label>
			  <?php if(!isset($worker['mobile'])) { $worker['mobile'] = NULL ; } ?>
              <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo $worker['mobile']; ?>">
		  </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="email"><span class="khmer_font">សារអេឡិចត្រូនិច &#47;</span> Email Address : <span class="danger">*</span> </label>
			  <?php if(!isset($worker['email'])) { $worker['email'] = NULL ; } ?>
              <input type="email" class="form-control " id="email" name="email" placeholder="workerpersonal@email.com" value="<?php echo $worker['email']; ?>">
		  </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="birth_province"><span class="khmer_font">ទីកន្លែងកំនើត &#47;</span> Place of Birth  Province: <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="birth_province" name="birth_province">
                  <?php if(!isset($worker['birth_province'])) { $worker['birth_province'] = NULL ; } ?>
				  <option>Province</option>
				  <?php	foreach($provinces as $province) { ?>
				  <option value="<?php echo $province['id']; ?>"  <?php echo ($province['id'] == $worker['birth_province']) ? 'selected' : ''; ?>>
				  <?php echo $province['name']; ?> &#8211; <?php echo $province['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="birth_district"><span class="khmer_font">ស្រុក&#47;ខ័ណ្ឌ&#47;</span> District : <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="birth_district" name="birth_district">
                  <?php if(!isset($worker['birth_district'])) { $worker['birth_district'] = NULL ; } ?>
				  <option>District</option>
				  <?php $birth_province = $worker['birth_province']; ?>
				  <?php $districts = $this->Model_Gazeetteer->districts($birth_province); ?>
				  <?php	foreach($districts as $district) { ?>
				  <option value="<?php echo $district['id']; ?>"  <?php echo ($district['id'] == $worker['birth_district']) ? 'selected' : ''; ?>>
				  <?php echo $district['name']; ?> &#8211; <?php echo $district['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <select class="custom-select form-control " id="birth_commune" name="birth_commune">
                  <?php if(!isset($worker['birth_commune'])) { $worker['birth_commune'] = NULL ; } ?>
				  <option>Commune</option>
				  <?php $birth_district = $worker['birth_district']; ?>
				  <?php $communes = $this->Model_Gazeetteer->commmunes($birth_district); ?>
				  <?php	foreach($communes as $commune) { ?>
				  <option value="<?php echo $commune['id']; ?>"  <?php echo ($commune['id'] == $worker['birth_commune']) ? 'selected' : ''; ?>>
				  <?php echo $commune['name']; ?> &#8211; <?php echo $commune['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <select class="custom-select form-control " id="birth_village" name="birth_village">
                  <?php if(!isset($worker['birth_village'])) { $worker['birth_village'] = NULL ; } ?>
				  <option>Village</option>
				  <?php $birth_commune = $worker['birth_commune']; ?>
				  <?php $villages = $this->Model_Gazeetteer->villages($birth_commune); ?>
				  <?php	foreach($villages as $village) { ?>
				  <option value="<?php echo $village['id']; ?>"  <?php echo ($village['id'] == $worker['birth_village']) ? 'selected' : ''; ?>>
				  <?php echo $village['name']; ?> &#8211; <?php echo $village['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label><span class="khmer_font">អាស័យដ្ឋានបច្ចុប្បន្ន &#47;</span> Current Address  Province: <span class="danger">*</label>
              <div class="c-inputs-stacked">
                  <input type="checkbox" name="capchecked" id="capchecked">
                  <label for="capchecked" class="block"><span class="khmer_font">ដូចនឹងទីកន្លែងកំណើត&#47;</span> Same As POB:</label>
              </div>
          </div>
      </div>
  </div>
  <div class="row" id="cur_add">
      <div class="col-md-6">
          <div class="form-group">
              <label for="cur_add_province"><span class="khmer_font">ខេត្ត &#47;</span> Province: <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="cur_add_province" name="cur_add_province">
                  <?php if(!isset($worker['cur_add_province'])) { $worker['cur_add_province'] = NULL ; } ?>
				  <option>Province</option>
				  <?php	foreach($provinces as $province) { ?>
				  <option value="<?php echo $province['id']; ?>" <?php echo ($province['id'] == $worker['cur_add_province']) ? 'selected' : ''; ?>> 
				  <?php echo $province['name']; ?> &#8211; <?php echo $province['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="cur_add_district"><span class="khmer_font">ស្រុក&#47;ខ័ណ្ឌ&#47;</span> District : <span class="danger">*</span> </label>
              <select class="custom-select form-control " id="cur_add_district" name="cur_add_district">
                  <?php if(!isset($worker['cur_add_district'])) { $worker['cur_add_district'] = NULL ; } ?>
				  <option>District</option>
				  <?php $cur_add_province = $worker['cur_add_province']; ?>
				  <?php $districts = $this->Model_Gazeetteer->districts($cur_add_province); ?>
				  <?php	foreach($districts as $district) { ?>
				  <option value="<?php echo $district['id']; ?>"  <?php echo ($district['id'] == $worker['cur_add_district']) ? 'selected' : ''; ?>>
				  <?php echo $district['name']; ?> &#8211; <?php echo $district['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
  </div>
  <div class="row" id="cur_add2">
      <div class="col-md-6">
          <div class="form-group">
              <select class="custom-select form-control " id="cur_add_commune" name="cur_add_commune">
                  <?php if(!isset($worker['cur_add_commune'])) { $worker['cur_add_commune'] = NULL ; } ?>
				  <option>Commune</option>
				  <?php $cur_add_district = $worker['cur_add_district']; ?>
				  <?php $communes = $this->Model_Gazeetteer->commmunes($cur_add_district); ?>
				  <?php	foreach($communes as $commune) { ?>
				  <option value="<?php echo $commune['id']; ?>"  <?php echo ($commune['id'] == $worker['cur_add_commune']) ? 'selected' : ''; ?>>
				  <?php echo $commune['name']; ?> &#8211; <?php echo $commune['en_name']; ?>
				  </option>
				  <?php } ?>
              </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <select class="custom-select form-control " id="cur_add_village" name="cur_add_village">
                  <?php if(!isset($worker['cur_add_village'])) { $worker['cur_add_village'] = NULL ; } ?>
				  <option>Village</option>
				  <?php $cur_add_commune = $worker['cur_add_commune']; ?>
				  <?php $villages = $this->Model_Gazeetteer->villages($cur_add_commune); ?>
				  <?php	foreach($villages as $village) { ?>
				  <option value="<?php echo $village['id']; ?>"  <?php echo ($village['id'] == $worker['cur_add_village']) ? 'selected' : ''; ?>>
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
	$('#branch').on('change', function() {
		var branch = $('#branch').val();
		if(branch!=""){
			$.ajax({
				url: "<?php echo site_url("Affiliates/get_affiliate_branch");?>",
				type: "POST",
				data: {
					type: 1,
					branch: branch
				},
				cache: false,
				success: function(dataResult){
					//var dataResult = JSON.parse(dataResult);
					$("#affiliate").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Province!');
		}
	});
	
	$('#birth_province').on('change', function() {
		var province = $('#birth_province').val();
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
					$("#birth_district").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Province!');
		}
	});
	
	$('#birth_district').on('change', function() {
		var district = $('#birth_district').val();
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
					$("#birth_commune").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a District!');
		}
	});
	
	$('#birth_commune').on('change', function() {
		var commune = $('#birth_commune').val();
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
					$("#birth_village").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a District!');
		}
	});
	
	$('#capchecked').change(function() {
		if(this.checked) {
			$('#cur_add').css("display", "none");
			$('#cur_add2').css("display", "none");
		}else{
			$('#cur_add').css("display", "");
			$('#cur_add2').css("display", "");
		}
	});
	
	$('#cur_add_province').on('change', function() {
		var province = $('#cur_add_province').val();
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
					$("#cur_add_district").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Province!');
		}
	});
	
	$('#cur_add_district').on('change', function() {
		var district = $('#cur_add_district').val();
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
					$("#cur_add_commune").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a District!');
		}
	});
	
	$('#cur_add_commune').on('change', function() {
		var commune = $('#cur_add_commune').val();
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
					$("#cur_add_village").html(dataResult);
				}
			});
		}
		else{
			alert('Please Select a Commune!');
		}
	});
});
</script>