<?php
  $form = new form();
  $lbmainmenu = new label("เมนูหลัก:");
  $txtmainmenu = new textfield('zoo_name','','form-control css-require','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");

  echo $form->open("form_reg","form","","user_insert_mainmenu.php",""); ?>
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			<div class='col-md-12'  style='margin-top: 16px;'>
				<h4>เพิ่มเมนูหลัก</h4>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-3'  style='padding-top: 7px;'><?php echo $lbmainmenu ?></div>
					<div class='col-md-9 form-group has-feedback'><?php echo $txtmainmenu ?></div>
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