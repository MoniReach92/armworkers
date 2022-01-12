<!-- Step 5 -->
<h6><span class="khmer_font">ព័ត៌មានអប់រំ<br/></span>Education Information</h6>
<section class="bg-hexagons-dark">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="geducation"><span class="khmer_font">ព័ត៌មានសិក្សាទូទៅ &#47; </span>  General Education : <span class="danger">*</span> </label>
			  <?php if(!isset($educationw['geducation'])) { $educationw['geducation'] = NULL ; } ?>
              <select class="custom-select form-control" id="geducation" name="geducation">
				<option>សូមជ្រើសរើស កំរិតសិក្សា Please select education level</option>
				<?php	foreach($educations as $education) { ?>
				<option value="<?php echo $education['id']; ?>" <?php echo ($education['id'] == $educationw['geducation']) ? 'selected' : ''; ?>>
				<?php if(!isset($educationw['k_label'])) { $educationw['k_label'] = NULL ; } ?><?php if(!isset($educationw['e_label'])) { $educationw['e_label'] = NULL ; } ?>
				<span class="khmer_font"><?php echo $education['k_label']; ?></span> &#8211; <?php echo $education['e_label']; ?>
				</option>
				<?php } ?>
              </select>
          </div>
      </div>
  </div>
  <div class="row">
	<div class="col-12">
       <h4 class="page-header"><span class="khmer_font">ការបណ្តុះបណ្តាលវិជ្ជាជីវៈ&#47;</span> Vocational Training</h4>
    </div>
  </div>
  <div class="row">
  <div class="col-md-6">
     <div class="form-group">
          <label for="skill"><span class="khmer_font">ជំនាញ&#47;</span> Skill :</label>
          <?php if(!isset($educationw['skill'])) { $educationw['skill'] = NULL ; } ?>
          <input type="text" class="form-control" id="skill" name="skill" value="<?php echo $educationw['skill']; ?>">
     </div>
  </div>
  <div class="col-md-6">
     <div class="form-group">
          <label for="level"><span class="khmer_font">កម្រិត&#47;</span> Level :</label>
          <?php if(!isset($educationw['level'])) { $educationw['level'] = NULL ; } ?>
          <input type="number" class="form-control" id="level" name="level" value="<?php echo $educationw['level']; ?>">
     </div>
  </div>
  </div>
  <div class="row">
	<div class="col-12">
       <h4 class="page-header"><span class="khmer_font">ការសិក្សាកម្រិតខ្ពស់&#47;</span> Higher Education</h4>
    </div>
  </div>
  <div class="row">
  <div class="col-md-6">
     <div class="form-group">
          <label for="vocat"><span class="khmer_font">មុខជំនាញ&#47;</span> Major :</label>
          <?php if(!isset($educationw['vocat'])) { $educationw['vocat'] = NULL ; } ?>
          <input type="text" class="form-control" id="vocat" name="vocat" value="<?php echo $educationw['vocat']; ?>">
     </div>
  </div>
  <div class="col-md-6">
     <div class="form-group">
          <label for="vocalevel"><span class="khmer_font">កម្រិត&#47;</span> Level :</label>
          <?php if(!isset($educationw['vocalevel'])) { $educationw['vocalevel'] = NULL ; } ?>
          <input type="number" class="form-control" id="vocalevel" name="vocalevel" value="<?php echo $educationw['vocalevel']; ?>">
     </div>
  </div>
 </div>
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
		  <?php if(!isset($educationw['drivelic'])) { $educationw['drivelic'] = NULL ; } ?>
          <label for="drivelic"><span class="khmer_font"> ប័ណ្ណបើកបរ&#47;</span> Driving License : <span class="danger">*</span> </label>
          <select class="custom-select form-control" id="drivelic" name="drivelic">
              <option value="yes" <?php echo ($educationw['drivelic'] == 'yes') ? 'selected' : ''; ?>>Yes</option>
              <option value="no" <?php echo ($educationw['drivelic'] == 'no') ? 'selected' : ''; ?>>No</option>
          </select>
      </div>
  </div>
 </div>
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
		  <?php if(!isset($educationw['flanguage'])) { $educationw['flanguage'] = NULL ; } ?>
          <label for="flanguage"><span class="khmer_font">ភាសាបរទេស&#47;</span> Foriegn Language : <span class="danger">*</span> </label>
          <select class="custom-select form-control" id="flanguage" name="flanguage">
              <option value="ch" <?php echo ($educationw['flanguage'] == 'ch') ? 'selected' : ''; ?>>ចិន - Chinese</option>
              <option value="en" <?php echo ($educationw['flanguage'] == 'en') ? 'selected' : ''; ?>>អង្គគ្លេស - English</option>
              <option value="jp" <?php echo ($educationw['flanguage'] == 'jp') ? 'selected' : ''; ?>>ជប៉ុន - Japenese</option>
              <option value="th" <?php echo ($educationw['flanguage'] == 'th') ? 'selected' : ''; ?>>ថៃ - Thai</option>
          </select>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
		  <?php if(!isset($educationw['flanguage_yes_no'])) { $educationw['flanguage_yes_no'] = NULL ; } ?>
          <label for="flanguage_yes_no"><span class="khmer_font">ភាសាបរទេស&#47;</span> Foriegn Language : <span class="danger">*</span> </label>
          <select class="custom-select form-control" id="flanguage_yes_no" name="flanguage_yes_no">
              <option value="yes" <?php echo ($educationw['flanguage_yes_no'] == 'yes') ? 'selected' : ''; ?>>Yes</option>
              <option value="no" <?php echo ($educationw['flanguage_yes_no'] == 'no') ? 'selected' : ''; ?>>No</option>
          </select>
      </div>
  </div>
 </div>
</section>