<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> បោះពុម្ភឯកសារពលករ </span> &#921; Prining Worker Bio  </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
		
	<section class="invoice printableArea" style="width=793px">			
		  <!-- title row -->
			<div class="row">
			<div class="col-12">
			  <div class="page-header">
				<div class="text-center">
				<span class="khmer_os_header">ព្រះរាជាណាចក្រកម្ពុជា<br/><br/>ជាតិ&#9;សាសនា&#9;ព្រះមហាក្សត្រ</span><br/><br/><br/>
				<span class="khmer_os_header"><b>ប្រវត្តិរូបសង្ខេប</span></b><br/><br/>
				</div>
			  </div>
			</div>
			</div>
			<div class="row">
			<div class="col-12">
			  <div class="khmer_font_bio">
					<span class="bio_m30">នាមត្រកូលនិងគោត្តនាម</span> .........<b><?php echo $worker['k_fname'] . " " . $worker['k_lname']; ?></b>.........ជាអក្សរឡាតាំង ......<b><?php echo $worker['e_fname'] . " " . $worker['e_lname']; ?></b>...... ភេទ......<b><?php echo ($worker['gender'] == 'Female' ) ? 'ស្រី' : 'ប្រុស'  ; ?></b>...... <br /><br />
				ថ្ងៃខែឆ្នាំកំណើតថ្ងៃទី ...<b><?php $datee = $worker['dob']; echo (date('d', strtotime($datee)));?></b>... ខែ ...<b><?php echo (date('m', strtotime($datee)));?></b>... ឆ្នាំ ...<b><?php $byear = (date('Y', strtotime($datee))); echo $byear ; ?></b>... អាយុ ...<?php $datey = date('Y'); echo $datey - $byear ; ?> ... ជនជាតិ ....<b><?php echo ($worker['race'] == 'Khmer') ? 'ខ្មែរ' : ''; ?></b>... សញ្ជាតិ ...<b><?php echo ($worker['nationality'] == 'Khmer') ? 'ខ្មែរ' : ''; ?></b>... <br/><br/>
				
				កាន់សាសនា៖  
				  <span class="bio_m60"><i class="fa fa-<?php echo ($worker['religion'] == 'buddis') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> ព្រះពុទ្ធសាសនា </span> 
				  <span class="bio_m60"><i class="fa fa-<?php echo ($worker['religion'] == 'islam') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> ឥស្លាមសាសនា </span>
				  <span class="bio_m60"><i class="fa fa-<?php echo ($worker['religion'] == 'christ') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> គ្រឹស្តសាសនា </span><br/><br/>
				ទីកន្លែងកំណើតភូមិ/ក្រុម ...<b><?php echo (isset($vill_name['name'])) ? $vill_name['name'] : '';?></b>... 
				ឃុំ/សង្កាត់ ...<b><?php echo (isset($comm_name['name'])) ? $comm_name['name'] : '';?></b>...
				ស្រុក/ខណ្ឌ ...<b><?php echo (isset($dist_name['name'])) ? $dist_name['name'] : '';?></b>... 
				ខេត្ត/ក្រុង ...<b><?php echo (isset($pro_name['name'])) ? $pro_name['name'] : '';?></b>...<br/><br/>
				អាស័យដ្ឋានបច្ចុប្បន្នភូមិ ...<b><?php echo (isset($vill_namec['name'])) ? $vill_namec['name'] : '';?></b>... 
				  ឃុំ/សង្កាត់ ...<b><?php echo (isset($comm_namec['name'])) ? $comm_namec['name'] : '';?></b>... 
				  ស្រុក/ខណ្ឌ ...<b><?php echo (isset($dist_namec['name'])) ? $dist_namec['name'] : '';?></b>... 
				  ខេត្ត/ក្រុង ...<b><?php echo (isset($pro_namec['name'])) ? $pro_namec['name'] : ''; ?>... 
				  លេខទូរស័ព្ទទំនាក់ទំនងផ្ទាល់ខ្លួន......<b><?php echo $worker['mobile'];?></b>......សារអេឡិចត្រូនិច......<b><?php echo $worker['email'];?></b><br/><br/>
				អាចប្រើប្រាស់ភាសាបាន៖ 
				  <?php $language = $flang['flanguage'] ?? ''; ?>
				  <span class="bio_m60"><i class="fa fa-<?php echo ($language == 'kh') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> ខ្មែរ </span> 
				  <span class="bio_m60"><i class="fa fa-<?php echo ($language == 'th') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> ថៃ </span> 
				  <span class="bio_m60"><i class="fa fa-<?php echo ($language == 'ch') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> ចិន </span> 
				  <span class="bio_m60"><i class="fa fa-<?php echo ($language == 'en') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> អង់គ្លេស  </span> 
				  <span class="bio_m60"><i class="fa fa-<?php //echo ($flang['flanguage'] == 'jp') ? 'check-' : ''; ?>square-o" aria-hidden="true"></i> ជប៉ុន </span><br/><br/>
				ប្ដី/ប្រពន្ធឈ្មោះ...<b><?php echo (isset($spouse['sp_k_fname'])) ? $spouse['sp_k_fname'] : ''; ?>  <?php echo (isset($spouse['sp_k_lname'])) ? '' : '' ; ?></b>...
				<?php $spdob = $spouse['sp_dob'] ?? ''; ?>
				<?php $spy = date('Y', strtotime($spdob)); ?>
				<?php $pspdob = $datey - $spy; ?>
				អាយុ...<?php echo $pspdob; ?>...ឆ្នាំ ។ ថ្ងៃខែឆ្នាំកំណើតថ្ងៃទី...<b><?php echo date('d', strtotime($spdob)); ?></b>...ខែ....<b><?php echo date('m', strtotime($spdob)); ?></b>...ឆ្នាំ...<b><?php echo $spy; ?></b>...<br/><br/>
				  
				មុខរបរ ......<b><?php echo (isset($sp_job_name['name'])) ? $sp_job_name['name'] : ''; ?></b>... លេខទូរស័ព្ទទំនាក់ទំនងប្តីឬប្រពន្ធ......
				  <?php echo (isset($spouse['sp_mobile'])) ? $spouse['sp_mobile'] : '';?><br/><br/>
				ឪពុកឈ្មោះ......<b><?php echo (isset($parent['f_k_fname'])) ? $parent['f_k_fname'] : ''; ?> <?php echo (isset($parent['f_k_lname'])) ? $parent['f_k_lname'] : ''; ?></b>...
				<?php $f_dob = $parent['f_dob'] ?? ''; ?>
				<?php $f_doby =  date('Y', strtotime($f_dob)); ?>
				អាយុ ....<b><?php echo date('Y') - $f_doby; ?></b>...    មុខរបរ ...<b><?php echo (isset($f_job_name['name'])) ? $f_job_name['name'] : ''; ?></b>... <br/><br/>
				
				<?php $m_dob = $parent['m_dob'] ?? ''; ?>
				<?php $m_doby =  date('Y', strtotime($m_dob)); ?>
				ម្ដាយឈ្មោះ......<b>
				  <?php echo (isset($parent['m_k_fname'])) ? $parent['m_k_fname'] : ''; ?> 
				  <?php echo (isset($parent['m_k_lname'])) ? $parent['m_k_lname'] : ''; ?></b>...
				អាយុ ...<b><?php echo date('Y') - $m_doby; ?></b>...    មុខរបរ ...<b><?php echo (isset($m_job_name['name'])) ? $m_job_name['name'] : ''; ?></b>... <br/><br/>
				
				អាស័យដ្ឋានបច្ចុប្បន្នរបស់ឪពុកម្ដាយនៅភូមិ/ក្រុម ...<b><?php echo (isset($vill_namep['name'])) ? $vill_namep['name']: '';?></b>... 
				  ឃុំ/សង្កាត់ ...<b><?php echo (isset($comm_namep['name'])) ? $comm_namep['name'] : '';?></b>...
				  ស្រុក/ខណ្ឌ ...<b><?php echo (isset($dist_namep['name'])) ? $dist_namep['name'] : '';?></b>...
				  ខេត្ត/ក្រុង ...<b><?php echo (isset($pro_namep['name'])) ? $pro_namep['name'] : '';?></b>...<br/><br/>
				លេខទូរស័ព្ទទំនាក់ទំនងឪពុកម្តាយ......<?php echo (isset($parent['f_mobile'])) ? $parent['f_mobile'] : ''; ?>...<br/><br/>
			  </div>
			</div>
			</div>
			<div class="row">
				<div class="col-6 pull-left ">

					<br/><br/><br/>
					<span  class="khmer_font_bio">ឯកសារត្រូវភ្ជាប់ជាមួយមានៈ</span><br/>
					<span  class="khmer_font">
					-អត្តសញ្ញាណប័ណ្ណ<br/>
					-លិខិតឆ្លងដែន<br/>
					-សៀវភៅគ្រួសារ +សេចក្តីចម្លងសំបុត្រកំណើត<br/>
					-សៀវភៅស្នាក់នៅ +សេចក្តីចម្លងសំបុត្រកំណើត<br/>
					-លិខិតបញ្ជាក់ទីលំនៅ+សេចក្តីចម្លងសំបុត្រកំណើត<br/>
					-រូបថត 4X6 (ចំនួន០២សន្លឹក)<br/>
					-លិខិតពិនិត្យសុខភាព
					</span>
				</div>
				<div class="col-6 pull-right">
					<br/><br/>
					<span  class="khmer_font_bio">រាជធានីភ្នំពេញ ថ្ងៃទី...<?php echo date('d'); ?>.....ខែ....<?php echo date('m'); ?>.....ឆ្នាំ ....<?php echo date('Y'); ?>.....</span>
					<br/><br/><br/><br/><br/><br/>
					<span class="khmer_font">
						<i class="bio_m85">ស្នាមមេដៃសាម៉ីខ្លួន</i>
					</span><br/><br/>
				</div>
			</div>

			   <!-- this row will not appear when printing -->
		  <div class="row no-print">
			<div class="col-12">			
				<button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
			</div>
		  </div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
	</section>
	<!-- /.content -->
    </div>
    <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->