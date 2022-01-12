<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> តារាងឈ្មោះក្រុមនៃពលករនីមួយៗ </span> &#921; Group List for Workers  </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
				<tr>
				<?php $theads = array('ID'=>'លេខកូដ', 'Name'=>'ឈ្មោះ', 'Workers Count'=>'ចំនួនពលករក្នុងក្រុម', 'Description'=>'បរិយាយ', 'Action'=>'') ?>
				<?php foreach($theads as $key=>$thead) { ?>
					<th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
				<?php } ?>
				</tr>
            </thead>
            <tbody>
				<?php foreach($groups as $group) { ?>
				<tr>
					<td><?php echo $group['id']; ?></td>					
					<td><?php echo $group['name']; ?></td>
					<?php $group_id = $group['id']; ?>
					<?php $group_count = $this->Model_Worker->count_groups($group_id); ?>
					<td><?php echo $group_count['group_count']; ?></td>
					<td><?php echo $group['description']; ?></td>
					<td>
					  <div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Actions</button>
						  <div class="dropdown-menu">
							  <a class="dropdown-item" href="<?php echo site_url('groups/show/' . $group['id']); ?>" target="_blank">
								  <span class="text-info">Edit Group Detail</span></a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="<?php echo site_url('workers/group/' . $group['id']); ?>" target="_blank">
								  <span class="text-info">View Workers in Group</span></a>
							  <a class="dropdown-item" href="<?php echo site_url('Printing/f_bios/' . $group['id']); ?>" target="_blank">
								  <span class="text-info">Print Bio of Workers in this Group</span></a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="<?php echo site_url('groups/destroy/' . $group['id']); ?>"><span class="text-danger">Delete</span></a>
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