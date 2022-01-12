<?php
$call_method =  $this->router->fetch_method();
$call_class = $this->router->fetch_class();
?>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/vendor_components/jquery/dist/jquery.js'); ?>"></script>

<!-- popper -->
<script src="<?php echo base_url('assets/vendor_components/popper/dist/popper.min.js'); ?>"></script>

<!-- Bootstrap 4.0-->
<script src="<?php echo base_url('assets/vendor_components/bootstrap/dist/js/bootstrap.js'); ?>"></script>

<!-- Slimscroll -->
<script src="<?php echo base_url('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>

<!-- FastClick -->
<script src="<?php echo base_url('assets/vendor_components/fastclick/lib/fastclick.js'); ?>"></script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- apexcharts -->
<script src="<?php echo base_url('assets/vendor_components/apexcharts-bundle/irregular-data-series.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js'); ?>"></script>

<!-- ChartJS in home file-->
<script src="<?php echo base_url('assets/vendor_components/chart.js-master/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/pages/ohlc.js'); ?>"></script>	


<!--amcharts charts -->	
<script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/radar.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>

<script src="<?php echo base_url('public/js/pages/amcharts/charts.js" type="text/javascript'); ?>"></script>
<!-- webticker -->
<script src="<?php echo base_url('assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js'); ?>"></script>

<!--  App -->
<script src="<?php echo base_url('public/js/template.js'); ?>"></script>
<?php if(($call_class === 'admins')&&($call_method === 'password')) { ?>
<script src="<?php echo base_url('public/js/pages/validation.js'); ?>"></script>
<script>
! function(window, document, $) {
    "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
</script>
<?php } ?>


<?php if($call_class === 'home') { ?>
<!-- dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('public/js/pages/dashboard.js'); ?>"></script>
<script src="<?php echo base_url('public/js/pages/dashboard-chart.js'); ?>"></script>
<!--  for demo purposes -->
<script src="<?php echo base_url('public/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('public/js/pages/amcharts/charts.js" type="text/javascript'); ?>"></script>
<?php  } ?>

<?php if($call_class === 'Printing') { ?>
	<!-- JqueryPrintArea -->
	<script src="<?php echo base_url('assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/pages/printing.js'); ?>"></script>   
<?php  } ?>



<!-- This is data table -->
<script src="<?php echo base_url(''); ?>assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

<!-- start - This is for export functionality only -->
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js'); ?>"></script>
<!-- end - This is for export functionality only -->

<!-- for Data Table -->
<script src="<?php echo base_url('public/js/pages/data-table.js'); ?>"></script>

<?php 
if(($call_class === 'Workers') && ($call_method === 'create'))
{
?>
<!-- steps  -->	
<script src="<?php echo base_url('assets/vendor_components/jquery-steps-master/build/jquery.steps.js'); ?>"></script>
<!-- validate  -->
<script src="<?php echo base_url('assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js'); ?>"></script>
<!-- Sweet-Alert  -->
<script src="<?php echo base_url('assets/vendor_components/sweetalert/sweetalert.min.js'); ?>"></script>
<!-- wizard  -->

<script src="<?php echo base_url('public/js/pages/steps.js'); ?>"></script>
<?php
}elseif(($call_class === 'Workers') && ($call_method === 'update_detail')) {
?>
<!-- steps  -->	
<script src="<?php echo base_url('assets/vendor_components/jquery-steps-master/build/jquery.steps.js'); ?>"></script>
<!-- validate  -->
<script src="<?php echo base_url('assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js'); ?>"></script>
<!-- Sweet-Alert  -->
<script src="<?php echo base_url('assets/vendor_components/sweetalert/sweetalert.min.js'); ?>"></script>
<!-- wizard  -->
<script src="<?php echo base_url('public/js/pages/steps_edit.js'); ?>"></script>
<?php
}
?>

</body>
</html>
