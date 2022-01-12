<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-xl-3 col-12">
      </div>
      <div class="col-xl-3 col-12">
      </div>
      <div class="col-xl-3 col-12">
      </div>
      <div class="col-xl-3 col-12">
      </div>
	  <div class="col-lg-3 col-md-6 col-12">
        <div class="info-box pull-up bg-hexagons-dark">
          <span class="info-box-icon bg-primary"><i class="fa fa-drivers-license-o"></i></span>
          <div class="info-box-content pull-right text-right">
			<a href="<?php echo site_url('Home/countries'); ?>" target="_blank">
            <span class="khmer_font">ប្រទេស&#47;</span>Country
            <span class="info-box-number"><?php echo $country; ?></span>
			</a>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
	  <div class="col-lg-3 col-md-6 col-12">
        <div class="info-box pull-up bg-hexagons-dark">
          <span class="info-box-icon bg-danger"><i class="fa fa-users"></i></span>
          <div class="info-box-content pull-right text-right">
			<a href="<?php echo site_url('Home/industries'); ?>" target="_blank">
            <span class="khmer_font">ឧស្សាហកម្ម &#47; </span>Industry
            <span class="info-box-number"><?php echo $industry; ?></span>
			</a>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
	  <div class="col-lg-3 col-md-6 col-12">
        <div class="info-box pull-up bg-hexagons-dark">
          <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

          <div class="info-box-content pull-right text-right">
            <span class="info-box-number"><span class="khmer_font">ស្ត្រី &#47; </span>Female</span>
            <span class="info-box-text"><?php echo $workerf; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="info-box pull-up bg-hexagons-dark">
          <span class="info-box-icon bg-success"><i class="fa fa-shield"></i></span>

          <div class="info-box-content pull-right text-right">
            <span class="info-box-number"><span class="khmer_font">បុរស &#47; </span>Male</span>
            <span class="info-box-text"><?php echo $workerm; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-xl-6 col-12">				
          <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">Worker clusified by Industry</h4>
              </div>
              <div class="box-body">
                <div class="chart">
                  <div id="currency-value" style="height:500px;"></div>	
                </div>
              </div>
          </div>
      </div>
      <div class="col-xl-6 col-12">
          <!-- Simple Column Chart -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Worker by Months</h4>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <div id="lion_amcharts_1" style="height: 500px;"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>		
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->