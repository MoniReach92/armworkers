<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> តារាងសហគ្រិនទាំងអស់ </span> &#921; Employer List  </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
				<tr>
				<?php 
					$theads = array('ID'=>'លេខកូដ', 'Country'=>'ប្រទេស', 'Employee ID'=>'លេខកូដសហគ្រាស', 'Khmer Name'=>'ឈ្មោះអក្សរខ្មែរ', 'Title'=>'ភេទ', 'Latin Name'=>'ឈ្មោះអក្សរឡាតាំង', 'Name Abreviate'=>'ឈ្មោះហៅក្រៅ', 'Mobile'=>'លេខទូរស័ព្ទ', 'Email'=>'សារអេឡិចត្រូនិច', 'Address One'=>'អាស័យដ្ឋានទី១', 'Address Two'=>'អាស័យដ្ឋាន២', 'Postal Code'=>'លេខកូដប្រៃសណីយ៍', 'Agency'=>'ឈ្មោះភ្នាក់ងារ', 'Business Activity'=>'មុខជំនួញ', 'Quota'=>'កូតា', 'Quota_F'=>'កូតាស្រ្តី', 'Quota_M'=>'កូតាបុរស', 'Total Use Worker'=>'ចំនួនតម្រូវការអ្នកធ្វើការ', 'Total_F'=>'តម្រូវការស្រ្តី', 'Total_M'=>'តម្រូវការបុរស', 'Doc_Ref'=>'ឯកសារពាក់ព័ន្ធ', 'Action' => '' )
				?>
				<?php foreach($theads as $key=>$thead) { ?>
					<th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
				<?php } ?>
				</tr>
            </thead>
            <tbody>
				<?php foreach($employers as $employer) { ?>
				<tr>
					<td><?php echo $employer['id']; ?></td>
					<td><?php echo $employer['name']; ?></td>
					<td><?php echo $employer['empl_id']; ?></td>
					<td><?php echo $employer['k_name']; ?></td>
					<td><?php echo $employer['title']; ?></td>
					<td><?php echo $employer['e_name']; ?></td>
					<td><?php echo $employer['ab_name']; ?></td>
					<td><?php echo $employer['mobile']; ?></td>
					<td><?php echo $employer['email']; ?></td>
					<td><?php echo $employer['add1']; ?></td>
					<td><?php echo $employer['add2']; ?></td>
					<td><?php echo $employer['postal']; ?></td>
					<td><?php echo $employer['agency']; ?></td>
					<td><?php echo $employer['iname']; ?></td>
					<td><?php echo $employer['quota']; ?></td>
					<td><?php echo $employer['quo_f']; ?></td>
					<td><?php echo $employer['quo_m']; ?></td>
					<td><?php echo $employer['worker_total']; ?></td>
					<td><?php echo $employer['worker_f']; ?></td>
					<td><?php echo $employer['worker_m']; ?></td>
					<td>
					 <a href="<?php echo site_url('employers/show_file/' . $employer['id']); ?>" target="_blank"><span class="text-info">File Detail</span></a>
					</td>
					<td>
					  <div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Actions</button>
						  <div class="dropdown-menu">
							  <a class="dropdown-item" href="<?php echo site_url('employers/edit/' . $employer['id']); ?>" target="_blank">
								  <span class="text-info">Edit Employer Detail</span></a>
							  <!--<a class="dropdown-item" href="<?php //echo $baseurl; ?>delete_admin&&id=<?php //echo h($admin->id); ?>"><span class="text-danger">Delete</span></a>-->
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