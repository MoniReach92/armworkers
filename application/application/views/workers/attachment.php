<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
    <h3 class="box-title"><span class="khmer_font">បង្ហាញាឯកសារពាក់ព័ន្ធ</span> &#921; Showing All related docs of Worker  </h3>
  </div>
</div>
<div class="row">
	<div class="col-3">
	</div>
	<div class="col-6">
<?php 
		if(empty($attachments)) {
			echo "No Attachment found for this Employer ID <br > ";
			echo "<div class=\"text-info\">";
			echo "Please Add new file below.";
			echo "</div>";
		} 
		?>

<?php
		$i = 1;
		foreach($attachments as $attachment) { 
?>

<div class="box box-solid bg-dark">
  <div class="box-header with-border">
    <h5 class="box-title"><span class="khmer_font"> ឯកសារទី <?php echo $i; ?> </span> &#921; Ref Doc <?php echo $i; ?></h5>					  
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="form-group row">
          <input type="hidden" name="doc_id" value="<?php echo $attachment['id']; ?>">
		  <label for="example-text-input" class="col-sm-2 col-form-label text-right">Document Type<span class="text-danger">&#9734;</span></label>
          <div class="col-sm-10">
			<!-- select -->
            <select name="doc_type" class="form-control">
                <option >Please select One</option>
                <option value="1" <?php if($attachment['doc_type'] == 1){ echo 'selected'; } ?>>ID Card</option>
                <option value="2" <?php if($attachment['doc_type'] == 2){ echo 'selected'; } ?>>Passport ID</option>						
            </select>
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Document No<span class="text-danger">&#9734;</span></label>
        <div class="col-sm-10">
          <input class="form-control" type="text" placeholder="Document No" value="<?php echo $attachment['number']; ?>" id="example-text-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-date-input" class="col-sm-2 col-form-label text-right">Issued Date</label>
        <div class="col-sm-10">
          <input class="form-control" type="date" placeholder="" value="<?php echo $attachment['issue_date']; ?>"  id="example-date-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-date-input" class="col-sm-2 col-form-label text-right">Expired Date</label>
        <div class="col-sm-10">
          <input class="form-control" type="date" placeholder=""  value="<?php echo $attachment['expired_date']; ?>" id="example-date-input">
        </div>
      </div>
	  <div class="form-group row">
          <label for="description" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ពិពណ៌នា<br/></span> Description</label>
          <div class="col-sm-10">
              <textarea name="description" id="textarea" class="form-control" placeholder="Please add some description."><?php echo $attachment['description']; ?></textarea>
          </div>
      </div>
	  <?php if(!empty($attachment['file_name'])) { ?>
      <div class="form-group row">
          <div class="col-md-2"></div>
          <div class="col-sm-3">
              <div class="box box-default pull-up">
				  <a href="<?php echo base_url("/images/worker_docs/{$attachment['file_name']}"); ?>" target="_blank">
				  <?php 
					$pdff = $attachment['file_name'];
					$conf = substr("$pdff", -3);
					if($conf === 'pdf'){ ?>
					<img class="card-img-top img-responsive" src="<?php echo base_url("/images/worker_docs/pdf_icon.png"); ?>" alt="" width="50">	
                  <?php  }else{ ?>
					<img class="card-img-top img-responsive" src="<?php echo base_url("/images/worker_docs/{$attachment['file_name']}"); ?>" alt="" width="100">
                  <?php } ?>
                  </a>
              </div>
          </div>
      </div>
      <?php $i++; } ?>
	  <div class="form-group row">
        <label for="example-date-input" class="col-sm-2 col-form-label text-right"></label>
        <div class="col-sm-2">
          <a class="dropdown-item" href="<?php echo site_url('workers/destroy_file/' . $attachment['id']); ?>"><span class="text-danger">Delete This File</span></a>
        </div>
      </div>
  </div>
  <!-- /.box-body -->			
</div>
<?php } ?>
<?php echo form_open_multipart('');?>
	<!--New attachement-->
    <div class="form-group row">
            <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h5 class="box-title text-info"><span class="khmer_font">ឯកសារបន្ថែម </span> &#921; Add more Ref Doc</h5>					  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<input type="hidden" name="worker_id" value="<?php echo $id ; ?>">
                <div class="form-group row">
                    <label for="doc_type" class="col-sm-2 col-form-label text-right">Document Type<span class="text-danger">&#9734;</span></label>
                    <div class="col-sm-10">
                      <!-- select -->
                        <select name="doc_type" class="form-control">
                            <option >Please select One</option>
                            <option value="1">ID Card</option>
                            <option value="2">Passport ID</option>						
                            <option value="3">Visa ID</option>					
                            <option value="4">Work Permit</option>				
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="number" class="col-sm-2 col-form-label text-right">Document No<span class="text-danger">&#9734;</span></label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="number" placeholder="Document No" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="issue_date" class="col-sm-2 col-form-label text-right">Issued Date</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="issue_date" placeholder="" id="example-date-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="expired_date1" class="col-sm-2 col-form-label text-right">Expired Date</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="expired_date" placeholder="" id="example-date-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="file_name" class="col-sm-2 col-form-label text-right">Attache File<span class="text-danger">&#9734;</span></label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="file_name1" placeholder="Chose your file" id="example-text-input">
                  </div>
                </div>
				<div class="form-group row">
					<label for="description" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ពិពណ៌នា<br/></span> Description</label>
					<div class="col-sm-10">
						<textarea name="description" id="textarea" class="form-control" placeholder="Please add some description."></textarea>
					</div>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
	<!--End of new attachment-->
	<div class="form-group row"><button type="submit" class="btn btn-success">Update Ref Doc</button></div>
	</div>
	<div class="col-3">
	</div>
</div>
</form>
</section>
</div>