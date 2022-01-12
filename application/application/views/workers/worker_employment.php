<!-- Step 7-->
<h6><span class="khmer_font">ព័ត៌មានការងារ<br/></span>Employment</h6>
<section class="bg-hexagons-dark">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label for="employer_id"><span class="khmer_font">ឈ្មោះនយោជក&#47;</span> Employer : <span class="danger">&#9734;</span> </label>
        <!-- select -->
        <?php if(!isset($employer['id'])) { $employer['id'] = NULL ; } ?>
        <select class="form-control" id="employer_id" name="employer_id">
            <?php	foreach($employers as $employer) { ?>
            <option value="<?php echo $employer['id']; ?>" >
            <span class="khmer_font"><?php echo $employer['k_name']; ?></span> &#8211; <?php echo $employer['e_name']; ?>
            </option>
            <?php } ?>
        </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="working_status"><span class="khmer_font">ស្ថានភាពការងារ&#47;</span>  Working Status :  </label>
            <select class="custom-select form-control" id="working_status" name="working_status">
				<?php	foreach($work_statuss as $work_status) { ?>
				<option value="<?php echo $work_status['id']; ?>" >
				<?php echo $work_status['e_label']; ?>
				</option>
				<?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="wage"><span class="khmer_font">ប្រាក់ខែដែលបានទទួល&#47;</span> Wage :</label>
			<?php if(!isset($employment['wage'])) { $employment['wage'] = NULL ; } ?>
            <input type="number" class="form-control " id="wage" name="wage" value="<?php echo $employment['wage']; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="currency"><span class="khmer_font">រូបិយបណ្ណ&#47;</span> Currency :  </label>
			<?php if(!isset($employment['currency'])) { $employment['currency'] = NULL ; } ?>
            <select class="custom-select form-control" id="currency" name="currency">
                <option value="usd" <?php echo ($employment['currency'] == 'usd') ? 'selected' : ''; ?>>USD</option>
                <option value="baht" <?php echo ($employment['currency'] == 'baht') ? 'selected' : ''; ?>>Thai Baht</option>
                <option value="yen" <?php echo ($employment['currency'] == 'yen') ? 'selected' : ''; ?>>Yen</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="contract_start_date"><span class="khmer_font">ថ្ងៃចាប់ផ្តើមកុងត្រា&#47;</span> Contract Start Date :</label>
			<?php if(!isset($employment['contract_start_date'])) { $employment['contract_start_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="contract_start_date" name="contract_start_date" value="<?php echo $employment['contract_start_date']; ?>">
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="contract_end_date"><span class="khmer_font">ថ្ងៃបញ្ចប់កុងត្រា&#47;</span> Contract End Date :</label>
			<?php if(!isset($employment['contract_end_date'])) { $employment['contract_end_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="contract_end_date" name="contract_end_date" value="<?php echo $employment['contract_end_date']; ?>">
		</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="departure_date"><span class="khmer_font">ថ្ងៃចាកចេញ&#47;</span> Departure Date :</label>
			<?php if(!isset($employment['departure_date'])) { $employment['departure_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="departure_date" name="departure_date" value="<?php echo $employment['departure_date']; ?>">
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="working_date"><span class="khmer_font">ថ្ងៃចាប់ផ្តើមធ្វើការ&#47;</span> Working Date :</label>
			<?php if(!isset($employment['working_date'])) { $employment['working_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="working_date" name="working_date" value="<?php echo $employment['working_date']; ?>">
		</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="return_date"><span class="khmer_font">ថ្ងៃត្រលប់មកវិញ&#47;</span> Return Date :</label>
			<?php if(!isset($employment['return_date'])) { $employment['return_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="return_date" name="return_date" value="<?php echo $employment['return_date']; ?>">
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="pre_depart_date"><span class="khmer_font">ថ្ងៃចាកចេញម្តងទៀត&#47;</span> Pre-Departure Training Date :</label>
			<?php if(!isset($employment['pre_depart_date'])) { $employment['pre_depart_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="pre_depart_date" name="pre_depart_date" value="<?php echo $employment['pre_depart_date']; ?>">
		</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="lang_start_date">Language - Start Date :</label>
			<?php if(!isset($employment['lang_start_date'])) { $employment['lang_start_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="lang_start_date" name="lang_start_date" value="<?php echo $employment['lang_start_date']; ?>">
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="lang_end_date">Language - End Date :</label>
			<?php if(!isset($employment['lang_end_date'])) { $employment['lang_end_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="lang_end_date" name="lang_end_date" value="<?php echo $employment['lang_end_date']; ?>">
		</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="signing_manpow_date">Signing Manpower Service Contract Date :</label>
			<?php if(!isset($employment['signing_manpow_date'])) { $employment['signing_manpow_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="signing_manpow_date" name="signing_manpow_date" value="<?php echo $employment['signing_manpow_date']; ?>">
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="signing_workin_date">Signing Working Contract Date :</label>
			<?php if(!isset($employment['signing_workin_date'])) { $employment['signing_workin_date'] = NULL ; } ?>
            <input type="date" class="form-control" id="signing_workin_date" name="signing_workin_date" value="<?php echo $employment['signing_workin_date']; ?>">
		</div>
    </div>
</div>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<?php //include_once('page/worker_pass_detail.php'); ?>
		<?php //include_once('page/worker_visa_detail.php'); ?>
		<?php //include_once('page/worker_permit_detail.php'); ?>
	</div>
	<div class="col-md-3">
	</div>
</div>
</section>