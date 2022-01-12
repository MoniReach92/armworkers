<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> តារាងអ្នកតំណាងទាំងអស់ </span> &#921; Affiliate List  </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
				<tr>
				<?php $theads = array('ID'=>'លេខកូដ',  'Branch'=>'សាខា', 'Name'=>'ឈ្មោះ', 'Mobile'=>'ទូរស័ព្ទ', 'Email'=>'សារអេឡិចត្រូនិច','Address'=>'អាស័យដ្ឋាន', 'Action'=>'') ?>
				<?php foreach($theads as $key=>$thead) { ?>
					<th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
				<?php } ?>
				</tr>
            </thead>
            <tbody>
				<?php foreach($affiliates as $affiliate) { ?>
				<tr>
					<td><?php echo $affiliate['id']; ?></td>					
					<td><?php echo $affiliate['branch_name']; ?></td>					
					<td><?php echo $affiliate['name']; ?></td>
					<td><?php echo $affiliate['mobile']; ?></td>
					<td><?php echo $affiliate['email']; ?></td>
					<td><?php echo $affiliate['address']; ?></td>
					<td>
					  <div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Actions</button>
						  <div class="dropdown-menu">
							  <a class="dropdown-item" href="<?php echo site_url('Affiliates/show/' . $affiliate['id']); ?>" target="_blank">
								  <span class="text-info">Show Affiliate Detail</span></a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="<?php echo site_url('Affiliates/destroy/' . $affiliate['id']); ?>"><span class="text-danger">Delete</span></a>
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