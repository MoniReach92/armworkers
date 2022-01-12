<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> តារាង Admin ទាំងអស់ </span> &#921; Admin List  </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
				<tr>
				<?php $theads = array('ID'=>'លេខកូដ', 'Image'=>'រូបភាព', 'Name'=>'ឈ្មោះ', 'Mobile'=>'ទូរស័ព្ទ', 'E-mail'=>'សារអឡិចត្រូនិច', 'Position'=>'មុខងារ', 'Status'=>'ស្ថានភាព', 'Address'=>'អាស័យដ្ឋាន', 'Action' => '' ) ?>
				<?php foreach($theads as $key=>$thead) { ?>
					<th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
				<?php } ?>
				</tr>
            </thead>
            <tbody>
				<?php foreach($admins as $admin) { ?>
				<tr>
					<td><?php echo $admin['id']; ?></td>
					<td>
						<div class="box box-default pull-up" style="width: 75">
						<img src="<?php echo base_url("/images/uploads/{$admin['image_file']}"); ?>" width="75" />
						</div>
					</td>
					<td><?php echo $admin['fname'] . ' - ' . $admin['lname']; ?></td>
					
					<td><?php echo $admin['mobile']; ?></td>
					<td><?php echo $admin['email']; ?></td>
					<td><?php echo $admin['name']; ?></td>
					<td>
						<?php 
							if($admin['status'] == 1)
							{
								echo "<span class=\"label label-success\">Active</span>";
							}else
							{
								echo "<span class=\"label label-danger\">Deactive</span>";
							}
						?>
					</td>
					<td><?php echo $admin['address']; ?></td>
					<td>
					  <div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Actions</button>
						  <div class="dropdown-menu">
							  <a class="dropdown-item" href="<?php echo site_url('admins/show/' . $admin['id']); ?>" target="_blank">
								  <span class="text-info">Edit Admin Detail</span></a>
							  <a class="dropdown-item" href="<?php echo site_url('admins/password/' . $admin['id']); ?>">
								  <span class="text-success">Change User Password</span></a>
							  <div class="dropdown-divider"></div>
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