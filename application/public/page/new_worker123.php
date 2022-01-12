<!--This form need steps JS which is included in js_include-->
<!-- Validation wizard -->
<div class="box box-solid bg-dark">
<div class="box-header with-border">
  <h3 class="box-title"><span class="khmer_font">ទម្រង់ចុះឈ្មោះបុគ្គលិកថ្មី</span></h3>
  <h6 class="box-subtitle">New Worker Form Wizard</h6>
</div>
<!-- /.box-header -->
<div class="box-body wizard-content">
    <form action="#" class="validation-wizard wizard-circle">
        <!-- Step 1 -->
        <h6><span class="khmer_font">ព័ត៍មានផ្ទាល់ខ្លួន<br/></span>Personal Information</h6>
        <?php include_once('page/worker_detail.php'); ?>
        <!-- Step 2 -->
        <h6><span class="khmer_font">ព័ត៍មានឪពុកម្តាយ<br/></span>Parent Infomation</h6>
        <section class="bg-hexagons-dark">
        <?php include_once('page/worker_parents.php'); ?>   
        </section>
        <!-- Step 3 -->
        <h6><span class="khmer_font">ព័ត៍មានប្តីប្រពន្ធ<br/></span>Spouse Infomation</h6>
        <section class="bg-hexagons-dark">
        <?php include_once('page/worker_spouse.php'); ?> 
        </section>
		<!-- Step 4 -->
        <h6><span class="khmer_font">ករណីបន្ទាន់<br/></span>In case of Emergency</h6>
        <section class="bg-hexagons-dark">
        <?php include_once('page/worker_emergency.php'); ?>
        </section>
		<!-- Step 5 -->
        <h6><span class="khmer_font">ព័ត៍មានអប់រំ<br/></span>Education Information</h6>
        <section class="bg-hexagons-dark">
        <?php include_once('page/worker_education.php'); ?>
        </section>
		<!-- Step 6 -->
        <h6><span class="khmer_font">បញ្ចូលឯកសារពាក់ព័ន្ធ<br/></span>File Attachement</h6>
        <section class="bg-hexagons-dark">
        <?php include_once('page/worker_attachment.php') ?>
        </section>
        <!-- Step 7-->
        <h6><span class="khmer_font">ព័ត៍មានការងារ<br/></span>Employment</h6>
        <section class="bg-hexagons-dark">
        <?php include_once('page/worker_employment.php') ?>   
        </section>
    </form>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->