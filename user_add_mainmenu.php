<?php
  $form = new form();
  $lbmainmenu = new label("เมนูหลัก");
  $txtmainmenu = new textfield('menu_name','','form-control css-require','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-12","");

  echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","user_insert_mainmenu.php",""); ?>
  <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
	<div class='row'>
		<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
		<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pb-3' style="background-color:#ffffff;border-radius:8px;">
			<div class='row'>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 alltxh'>
					<h4>เพิ่มเมนูหลัก</h4>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
					<?php echo $lbmainmenu ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<?php echo $txtmainmenu ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
					<div class='row'>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $submit ?></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
	</div>
<?php echo $form->close();
?>