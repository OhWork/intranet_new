<?php
  $form = new form();
  $lbuser = new label("สำนัก/สวนสัตว์ :");
  $txtuser = new textfield('zoo_name','','form-control css-require','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");

  echo $form->open("form_reg","form","","user_insert_zoo.php",""); ?>
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			<div class='col-md-12'  style='margin-top: 16px;'>
				<h4>เพิ่มสวนสัตว์</h4>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-3'  style='padding-top: 7px;'><?php echo $lbuser ?></div>
					<div class='col-md-9 form-group has-feedback'><?php echo $txtuser ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-4'></div>
					<div class='col-md-4'><?php echo $submit ?></div>
					<div class='col-md-4'></div>
				</div>
			</div>
		</div>
		<div class='col-md-3'></div>
	</div>
<?php echo $form->close();
?>