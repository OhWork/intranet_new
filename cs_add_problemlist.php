<?php
if (!empty($_SESSION['user_name'])):
  $form = new form();
  $lbuser = new label("ปัญหา : ");
  $txtuser = new textfield('subtypetools_name','','form-control','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
  $selectzoo = new SelectFromDB();
  $selectzoo->name = 'typetools_typetools_id';
  $selectzoo->lists = 'โปรดระบุ';
  echo $form->open("form_reg","form","typetoolbox col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","cs_insert_problemlist.php","");
 ?>
  	<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
  		 <div class='row'>
			<div class='col-xl-3 col-lg-3 col-md-2 col-sm-3 col-2'></div>
  		 	<div class='col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 csborder' style="padding-bottom:16px;">
				<div class='row'>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style='padding-top: 8px;'>
						<h4>เพิ่มรายการปัญหา</h4>
					</div>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style='margin-bottom: 8px;'>
						<div class='row'>
							<div class='col-xl-2 col-lg-3 col-md-3'><?php echo @$lbzoo; ?></div>
							<div class='col-xl-10 col-lg-9 col-md-9 col-sm-12 col-12'><?php echo $selectzoo->selectFromTB('typetools','typetools_id','typetools_name',@$r['typetools_typetools_id']); ?>
							</div>
						</div>
					</div>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style='margin-bottom: 8px;'>
						<div class='row'>
							<div class='col-xl-2 col-lg-3 col-md-3 col-sm-3 col-4'  style='padding-top: 8px;'><center><?php echo $lbuser; ?></center></div>
							<div class='col-xl-10 col-lg-9 col-md-9 col-sm-9 col-8'><?php echo $txtuser; ?></div>
						</div>
					</div>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $submit; ?></div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
						</div>
					</div>
				</div>
			</div>
			<div class='col-xl-3 col-lg-3 col-md-2 col-sm-3 col-2'></div>
		</div>
	</div>
<?php
  echo $form->close();
  endif;
?>
