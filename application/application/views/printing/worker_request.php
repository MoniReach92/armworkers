<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> ពាក្យសុំផ្តល់លិខិតធ្វើដំណើរ ពលករកម្ពុជា ធ្វើការនៅបរទេស </span> &#921; Prining Worker Request </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
		
	<section class="invoice printableArea" style="width=793px">			
		  <!-- title row -->
			<div class="row">
<!--			<div class="col-12">
			  <div class="page-header">
				<div class="text-center">
				<span class="khmer_os_header">ព្រះរាជាណាចក្រកម្ពុជា<br/><br/>ជាតិ&#9;សាសនា&#9;ព្រះមហាក្សត្រ</span><br/><br/><br/>
				<span class="khmer_os_header"><b>ពាក្យសុំផ្តល់លិខិតធ្វើដំណើរ ពលករកម្ពុជា ធ្វើការនៅបរទេស</span></b><br />
				<span class="khmer_os_header"><b>សូមគោរពជូន</span></b><br />
				<span class="khmer_os_header"><b>រដ្ឋមន្ត្រីក្រសួងមហាផ្ទៃ</span></b>
				</div>
			  </div>
			</div>-->
			</div>
			<div class="row">
			<div class="col-12">
			  <div class="khmer_font_bio">
					<div class="khmer_font_big">
						<div class="margin_t254">
							<span class="margin_l227"><?php echo $worker['k_fname'] . " " . $worker['k_lname']; ?></span>
							<span class="margin_l400"><?php echo $worker['e_fname'] . " " . $worker['e_lname']; ?></span>
						</div>
						<div class="margin_t16">
							<span class="margin_l210"><?php $datee = $worker['dob']; echo (date('d', strtotime($datee)));?></span>
							<span class="margin_l49"><?php echo (date('m', strtotime($datee)));?></span>
							<span class="margin_l76"><?php $byear = (date('Y', strtotime($datee))); echo $byear ; ?></span>
							<span class="margin_l61"><?php echo ($worker['gender'] == 'Female' ) ? 'ស្រី' : 'ប្រុស'  ; ?></span>
							<span class="margin_l125">ខ្មែរ</span>
							<span class="margin_l140">ខ្មែរ</span>
						</div>
						<div class="margin_t11">
							<span class="margin_l276"><?php echo $comm_name['name'];?></span>
							<span class="margin_l250"><?php echo $dist_name['name'];?></span>
							<span class="margin_l250"><?php echo $pro_name['name'];?></span>
						</div>
						<div class="margin_t11">
							<span class="margin_l560"><?php echo $vill_namec['name'];?></span>
							<span class="margin_l250"><?php echo $comm_namec['name'];?></span>
						</div>
						<div class="margin_t11">
							<span class="margin_l227"><?php echo $dist_namec['name'];?></span>
							<span class="margin_l300"><?php echo $pro_namec['name'];?></span>
						</div>	
						<div class="margin_t11">
							<span class="margin_l140"><?php echo $job_name['name'];?></span>
							<span class="margin_l400">ARM</span>
							<span class="margin_l250"><?php echo $worker['mobile'];?></span>
						</div>	
						<div class="margin_t50">
							<span class="margin_l400">61462742</span>
							<span class="margin_l186">13-12-2012</span>
						</div>	
						<div class="margin_t11">
							<span class="margin_l237">
								<?php echo (isset($spouse['sp_k_fname'])) ? $spouse['sp_k_fname'] : ''; ?>
								<?php echo (isset($spouse['sp_k_lname'])) ? $spouse['sp_k_lname'] : '';?></span>
							<?php $spdob = $spouse['sp_dob'] ?? NULL; ?>
							<span class="margin_l170"><?php echo date('d', strtotime($spdob)); ?></span>
							<span class="margin_l61"><?php echo date('m', strtotime($spdob)); ?></span>
							<span class="margin_l70"><?php echo date('Y', strtotime($spdob)); ?></span>
							<span class="margin_l90"><?php echo (isset($sp_job_name['name'])) ? $sp_job_name['name'] : ''; ?></span>
						</div>
						<div class="margin_t12">
							<span class="margin_l140">
								<?php echo (isset($parent['f_k_fname'])) ? $parent['f_k_fname'] : ''; ?>
								<?php echo (isset($parent['f_k_lname'])) ? $parent['f_k_lname'] : ''; ?></span>
							<?php $f_dob = $parent['f_dob'] ?? NULL; ?>
							<?php $f_doby =  date('Y', strtotime($f_dob)); ?>
							<span class="margin_l120"><?php echo date('Y') - $f_doby; ?></span>
							<span class="margin_l170">ខ្មែរ</span>
							<span class="margin_l250"><?php echo (isset($f_job_name['name'])) ? $f_job_name['name'] : ''; ?></span>
						</div>	
						<div class="margin_t12">
							<span class="margin_l140">
								<?php echo (isset($parent['m_k_fname'])) ? $parent['m_k_fname'] : '';  ?>
								<?php echo (isset($parent['m_k_lname'])) ? $parent['m_k_lname'] : ''; ?></spa?n>
							<?php $m_dob = $parent['m_dob'] ?? NULL ; ?>
							<?php $m_doby =  date('Y', strtotime($m_dob)); ?>
							<span class="margin_l178"><?php echo date('Y') - $m_doby; ?></span>
							<span class="margin_l170">ខ្មែរ</span>
							<span class="margin_l250"><?php echo (isset($m_job_name['name'])) ? $m_job_name['name'] : ''; ?></span>
						</div>	
						<div class="margin_t12">
							<span class="margin_l140">
								ភូមិ <?php echo (isset($vill_namep['name'])) ? $vill_namep['name'] : '';?> 
								ឃុំ <?php echo (isset($comm_namep['name'])) ? $comm_namep['name'] : '';?> 
								ស្រុក <?php echo (isset($dist_namep['name'])) ? $dist_namep['name'] : '';?> 
								ខេត្ត <?php echo (isset($pro_namep['name'])) ? $pro_namep['name'] : '';?></span>
						</div>	
						<div class="margin_t12">
							<span class="margin_l470">
								<?php echo (isset($emergency['sos_fname'])) ? $emergency['sos_fname'] : '';?>
								<?php echo (isset($emergency['sos_lname'])) ? $emergency['sos_lname'] : '';?></span>
						</div>		
						<div class="margin_t12">
							<span class="margin_l90">
								ភូមិ... <?php echo (isset($emergency['emvname'])) ? $emergency['emvname'] : '';?> 
								ឃុំ... <?php echo (isset($emergency['emcname'])) ? $emergency['emdname'] : '' ;?>  
								ស្រុក... <?php echo (isset($emergency['emdname'])) ? $emergency['emdname'] : '';?> 
								ខេត្ត... <?php echo (isset($emergency['empname'])) ? $emergency['empname'] : '';?></span>
							<span class="margin_l400"><?php echo (isset($emergency['sos_mobile'])) ? $emergency['sos_mobile'] : '';?></span>
						</div>	
					</div>
			  </div>
			</div>
			</div>
			   <!-- this row will not appear when printing -->
		  <div class="row no-print">
			<div class="col-12">			
				<button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>	
			</div>
		  </div>
	</section>
	<!-- /.content -->
    </div>
    <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->