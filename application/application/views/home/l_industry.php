<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="khmer_font"> តារាងឈ្មោះសហគ្រាសដែលមានពលករ </span> &#921; Industries List with Workers  </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
				<tr>
				<?php $theads = array('ID'=>'លេខកូដ', 'Name'=>'ប្រភេទសហគ្រាស', 'Workers'=>'ចំនួនពលករ') ?>
				<?php foreach($theads as $key=>$thead) { ?>
					<th><span class="khmer_font"><?php echo $thead; ?><br/></span><?php echo $key; ?></th>
				<?php } ?>
				</tr>
            </thead>
            <tbody>
				<?php $i = '1'; ?>
				<?php foreach($industries as $industry) { ?>
				<tr>
					<td><?php echo $i; ?></td>					
					<td><?php echo $industry['name']; ?></td>
					<td><?php echo $industry['workers']; ?></td>
				</tr>
				<?php $i++; } ?>
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