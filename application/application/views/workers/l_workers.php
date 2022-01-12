<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
	<?php
	$call_method =  $this->router->fetch_method();
	$call_class = $this->router->fetch_class();
	?>
	<?php if($call_method == 'group') { ?>
		<h3 class="box-title"><span class="khmer_font"> តារាងពលករក្នុងក្រុម </span> &#921; Woker List in Group  </h3>
	<?php }else{ ?>
      <h3 class="box-title"><span class="khmer_font"> តារាងពលករទាំងអស់ </span> &#921; Woker List  </h3>
	<?php } ?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
				<tr>
				<?php 
					$theads = array(
						'Actions'=>'',
						'Photo'=>'រូបភាព',
						'ID'=>'លេខកូដ', 'Group'=>'ក្រុម', 'Country'=>'ប្រទេស',
						'Khmer First Name'=>'គោត្តនាម', 
						'Khmer Last name' => 'នាម',
						'Latin First Name' => 'គោត្តនាមអក្សរឡាតាំង',
						'Latin Last name' => 'នាមអក្សរឡាតាំង',
						'Gender' => 'ភេទ',
						'Date of Birth' => 'ថ្ងៃខែឆ្នាំកំណើត',
						'Nationality' => 'សញ្ជាតិ',
						'Race' => 'ជនជាតិ',
						'Religion' => 'សាសនា',
						'Title' => 'ងារ',
						'Marital Status' => 'ស្ថានភាពគ្រួសារ',
						'Job Title' => 'តួនាទីការងារ',
						'Job Type' => 'ប្រភេទការងារ',
						'Phone Number' => 'លេខទូរស័ព្ទ',
						'Email' => 'សារអេឡិចត្រូនិច',
						'Place of Birth Province' => 'ខេត្ត',
						'District' => 'ស្រុក',
						'Commune' => 'ឃុំ',
						'Village' => 'ភូមិ',
						'Add. Province' => 'អាស័យ. ខេត្ត',
						'Add Distr' => 'អាស័យ. ស្រុក',
						'Add Comm' => 'អាស័យ. ឃុំ',
						'Add Vill' => 'អាស័យ. ភូមិ',
						'RefDoc' => 'ឯកសារ',
						'Action' => '' )
				?>
				<?php foreach($theads as $key=>$thead) { ?>
					<th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
				<?php } ?>
				</tr>
            </thead>
            <tbody>
				<?php foreach($workers as $worker) { ?>
				<tr>
					<td>
					  <div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Actions</button>
						  <div class="dropdown-menu">
							  <a class="dropdown-item" href="<?php echo site_url('Workers/update_detail/' . $worker['id']); ?>" target="_blank">
								  <span class="text-success">Edit Worker Detail</span></a>
							  <div class="dropdown-divider"></div>
							  
							  <a class="dropdown-item" href="<?php echo site_url('Printing/f_bio/' . $worker['id']); ?>" target="_blank">
								  <span class="text-info">Print Bio</span>
							  </a>
							  <a class="dropdown-item" href="<?php echo site_url('Printing/request/' . $worker['id']); ?>" target="_blank">
								  <span class="text-info">Print Worker Request</span>
							  </a>
							  <a class="dropdown-item" href="<?php echo site_url('Printing/visa/' . $worker['id']); ?>" target="_blank">
								  <span class="text-info">Print Visa</span>
							  </a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="<?php //echo $baseurl; ?>delete_admin&&id=<?php //echo h($admin->id); ?>"><span class="text-danger">Deativate</span></a>
						  </div>
					 </div>
				   </td>
					<td>
						<?php 
							if(!empty($worker['worker_photo'])) 
							{
						?>
								<div class="box box-default pull-up" style="width: 75">
								<a class="dropdown-item" href="<?php echo site_url('Workers/worker_photo/' . $worker['id']); ?>" target="_blank">
									<img src="<?php echo base_url("/images/worker_photo/{$worker['worker_photo']}"); ?>" width="75" alt="<?php echo $worker['worker_photo']; ?>" />
								</a>
								</div>
						<?php	
							}else{
						?>
							<a class="dropdown-item" href="<?php echo site_url('Workers/worker_photo/' . $worker['id']); ?>" target="_blank">
							<span class="text-info">Add Photo</span>
							</a>
						<?php
							}
						?>
					</td>
					<td><?php echo $worker['id']; ?></td>
					<?php $group_id = $worker['group_id']; ?>
					<?php $group_name = $this->Model_Group->get_group_by($group_id); ?>
					<td><?php if(!empty($group_name['name'])) { echo $group_name['name']; } ?></td>
					
					<?php $country_id = $worker['country']; ?>
					<?php $countryname = $this->Model_Worker->getcountryname($country_id); ?>
					<td><?php if(!empty($countryname['name'])) { echo $countryname['name']; } ?></td>
					
					<td><?php echo $worker['k_fname']; ?></td>
					<td><?php echo $worker['k_lname']; ?></td>
					<td><?php echo $worker['e_fname']; ?></td>
					<td><?php echo $worker['e_lname']; ?></td>
					<td><?php echo $worker['gender']; ?></td>
					<td><?php echo $worker['dob']; ?></td>
					<td><?php echo $worker['nationality']; ?></td>
					<td><?php echo $worker['race']; ?></td>
					<td><?php echo $worker['religion']; ?></td>
					<td><?php echo $worker['title']; ?></td>
					<td><?php echo $worker['marital']; ?></td>
					<td><?php echo $worker['job_title']; ?></td>
					<td><?php echo $worker['industry']; ?></td>
					<td><?php echo $worker['mobile']; ?></td>
					<td><?php echo $worker['email']; ?></td>
					
					<?php if(!isset($worker['birth_province'])) { $worker['birth_province'] = NULL ; } ?>
					<?php $provinc = $worker['birth_province']; ?>
					<?php $provinc = $this->Model_Worker->getpname($provinc); ?>
					<td><span class="khmer_font"><?php if(!empty($provinc['name'])) { echo $provinc['name']; } ?></span></td>
					
					<?php if(!isset($worker['birth_district'])) { $worker['birth_district'] = NULL ; } ?>
					<?php $district = $worker['birth_district']; ?>
					<?php $district = $this->Model_Worker->getdname($district); ?>
					<td><span class="khmer_font"><?php if(!empty($district)) { echo $district['name'] ;} ?></span></td>
					
					<?php if(!isset($worker['birth_commune'])) { $worker['birth_commune'] = NULL ; } ?>
					<?php $commune = $worker['birth_commune']; ?>
					<?php $commune = $this->Model_Worker->getcname($commune); ?>
					<td><span class="khmer_font"><?php if(!empty($commune)) { echo $commune['name'];} ?></span></td>
					
					<?php if(!isset($worker['birth_village'])) { $worker['birth_village'] = NULL ; } ?>
					<?php $village = $worker['birth_village']; ?>
					<?php $village = $this->Model_Worker->getvname($village); ?>
					<td><span class="khmer_font"><?php if(!empty($village)) { echo $village['name'];} ?></span></td>
					
					<?php if(!isset($worker['cur_add_province'])) { $worker['cur_add_province'] = NULL ; } ?>
					<?php $cprovinc = $worker['cur_add_province']; ?>
					<?php $cprovinc = $this->Model_Worker->getpname($cprovinc); ?>
					<td><span class="khmer_font"><?php if(!empty($cprovinc)) { echo $cprovinc['name'];} ?></span></td>
					
					<?php if(!isset($worker['cur_add_district'])) { $worker['cur_add_district'] = NULL ; } ?>
					<?php $cdistrictc = $worker['cur_add_district']; ?>
					<?php $cdistrictc = $this->Model_Worker->getdname($cdistrictc); ?>
					<td><span class="khmer_font"><?php if(!empty($cdistrictc)) { echo $cdistrictc['name'];} ?></span></td>
					
					<?php if(!isset($worker['cur_add_commune'])) { $worker['cur_add_commune'] = NULL ; } ?>
					<?php $ccommunec = $worker['cur_add_commune']; ?>
					<?php $ccommunec = $this->Model_Worker->getcname($ccommunec); ?>
					<td><span class="khmer_font"><?php if(!empty($ccommunec)) { echo $ccommunec['name'];} ?></span></td>
					
					<?php if(!isset($worker['cur_add_village'])) { $worker['cur_add_village'] = NULL ; } ?>
					<?php $cvillagec = $worker['cur_add_village']; ?>
					<?php $cvillagec = $this->Model_Worker->getvname($cvillagec); ?>
					<td><span class="khmer_font"><?php if(!empty($cvillagec)) { echo $cvillagec['name'];} ?></span></td>
					<td>
					 <a href="<?php echo site_url('workers/show_file/' . $worker['id']); ?>" target="_blank"><span class="text-info">File Detail</span></a>
					</td>
					<td>
					  <div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Actions</button>
						  <div class="dropdown-menu">
							  <a class="dropdown-item" href="<?php echo site_url('Workers/update_detail/' . $worker['id']); ?>" target="_blank">
								  <span class="text-success">Edit Worker Detail</span></a>
							  <div class="dropdown-divider"></div>
							  
							  <a class="dropdown-item" href="<?php echo site_url('Printing/f_bio/' . $worker['id']); ?>" target="_blank">
								  <span class="text-info">Print Bio</span>
							  </a>
							  <a class="dropdown-item" href="<?php echo site_url('Printing/request/' . $worker['id']); ?>" target="_blank">
								  <span class="text-info">Print Worker Request</span>
							  </a>
							  <a class="dropdown-item" href="<?php echo site_url('Printing/visa/' . $worker['id']); ?>" target="_blank">
								  <span class="text-info">Print Visa</span>
							  </a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="<?php //echo $baseurl; ?>delete_admin&&id=<?php //echo h($admin->id); ?>"><span class="text-danger">Deativate</span></a>
						  </div>
					 </div>
				   </td>
				</tr>
				<?php } ?>
            </tbody>				  
            <tfoot>
                <tr>
                  <?php foreach($theads as $key=>$thead) { ?>
                  <th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
                  <?php } ?>
                </tr>
            </tfoot>
        </table>
        </div>              
    </div>
    <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->