<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-yellow">
  <div class="box-header with-border">
    <h3 class="box-title"><span class="khmer_font">លប់ឬបំប្លាញឯកសារពាក់ព័ន្ធ</span> &#921; Destroy or Permanently Delete related docs  </h3>
  </div>
</div>
<form method="post">
<div class="row">
	<div class="col-3">
	</div>
	<div class="col-6">
<div class="box box-solid bg-red">
  <div class="box-header with-border">
    <h5 class="box-title"><span class="khmer_font"> ឯកសារពាក់ព័ន្ធ  </span> &#921; Ref Doc </h5>
	<h6 class="box-subtitle text-yellow">Be informed; once you click delete there is no way to Undone! </h6>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="form-group row">
          <input type="hidden" name="doc_id" value="<?php echo $attachment['id']; ?>">
          <input type="hidden" name="employer_id" value="<?php echo $attachment['employer_id']; ?>">
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
	  <?php if(!empty($attachment['file_name'])) { ?>
      <div class="form-group row">
          <div class="col-md-2"></div>
          <div class="col-sm-3">
              <div class="box box-default pull-up">
				  <a href="<?php echo base_url("/images/employer_docs/{$attachment['file_name']}"); ?>" target="_blank">
				  <?php 
					$pdff = $attachment['file_name'];
					$conf = substr("$pdff", -3);
					if($conf === 'pdf'){ ?>
					<img class="card-img-top img-responsive" src="<?php echo base_url("/images/employer_docs/pdf_icon.png"); ?>" alt="" width="50">	
                  <?php  }else{ ?>
					<img class="card-img-top img-responsive" src="<?php echo base_url("/images/employer_docs/{$attachment['file_name']}"); ?>" alt="" width="100">
                  <?php } ?>
                  </a>
              </div>
          </div>
      </div>
	  <?php } ?>
	  <div class="form-group row">
        <label for="example-date-input" class="col-sm-2 col-form-label text-right"></label>
        <div class="col-sm-4">
          <div class="form-group row"><button type="submit" class="btn btn-danger">YES DELETE THIS FILE NOW</button></div>
        </div>
      </div>
  </div>
  <!-- /.box-body -->			
</div>
	<div class="col-3">
	</div>
</div>
</form>
<script>
		var inputlists = document.getElementsByClassName("form-control");
		for (i=0; i < inputlists.length; ++i) {
			inputlists.item(i).disabled = true;		
		}
		</script>
</section>
</div>