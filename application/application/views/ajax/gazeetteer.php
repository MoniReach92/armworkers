<?php if($call_method === 'districts') { ?>
	<option disabled>District</option>
	<?php	foreach($districts as $district) { ?>
	<option value="<?php echo $district['id']; ?>" >
	<span class="khmer_font"><?php echo $district['name']; ?></span> &#8211; <?php echo $district['en_name']; ?>
	</option>
	<?php } ?>
<?php } ?>

<?php if($call_method === 'communes') { ?>
	<option disabled>Commune</option>
	<?php	foreach($communes as $commune) { ?>
	<option value="<?php echo $commune['id']; ?>" >
	<span class="khmer_font"><?php echo $commune['name']; ?></span> &#8211; <?php echo $commune['en_name']; ?>
	</option>
	<?php } ?>
<?php } ?>

<?php if($call_method === 'villages') { ?>
	<option disabled>Village</option>
	<?php	foreach($villages as $village) { ?>
	<option value="<?php echo $village['id']; ?>" >
	<span class="khmer_font"><?php echo $village['name']; ?></span> &#8211; <?php echo $village['en_name']; ?>
	</option>
	<?php } ?>
<?php } ?>

<?php if($call_method === 'get_affiliate_branch') { ?>
	<option disabled>ជ្រើសរើសតំណាង</option>
	<?php	foreach($affiliates as $affiliate) { ?>
	<option value="<?php echo $affiliate['id']; ?>" >
	<span class="khmer_font"><?php echo $affiliate['name']; ?></span> &#8211; <?php echo $affiliate['branch_name']; ?>
	</option>
	<?php } ?>
<?php } ?>