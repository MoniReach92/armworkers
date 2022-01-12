<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="box box-solid bg-dark">
  <div class="box-header with-border">
    <h3 class="box-title"><span class="khmer_font">ទំរង់កែប្រែលេខសម្ងាត់ </span> &#921; Changing Password Form </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
	<form method="post">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
				<div class="form-group">
                  <h5>Password Input Field <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                </div>
                <div class="form-group">
                    <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                </div>
                <div class="form-group row">
				<button type="submit" class="btn btn-success">Change your password</button>				
				</div>
			</div>
			<div class="col-3">
			</div>
		</div>
	</form>
  </div>
<script>
jQuery('.validatedForm').validate({
  rules : {
      password : {
          minlength : 5
      },
      password_confirm : {
          minlength : 5,
          equalTo : "#password"
      }
  }
$('button').click(function(){
	console.log($('.validatedForm').valid());
});
</script>
  <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->