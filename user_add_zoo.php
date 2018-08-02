<?php
  $form = new form();
  $id = $_GET['id'];
  $lbzoo = new label("สำนัก/สวนสัตว์ :");
  $lbzoono = new label("ลำดับ :");
  $lbzooenable = new label("สถานะการใช้งาน :");
  $txtzoo = new textfield('zoo_name','','form-control css-require','');
  $txtzoono = new textfield('zoo_no','','form-control css-require','');
  $radiozooenable = new radioGroup();
  $radiozooenable->name = 'zoo_enable';
  if(empty($id)){
    	$radiozooenable->add('ใช้งานได้',1,'');
    	$radiozooenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
  
  if(!empty($_GET['id'])){
	$r = $db->findByPK('zoo','zoo_id',$id)->executeRow();
	$txtzoo->value = $r['zoo_name'];
	$txtzoono->value = $r['zoo_no'];
  if($r["zoo_enable"] == 1){
    	$radiozooenable->add('ใช้งานได้',1,'checked');
    	$radiozooenable->add('ไม่สามารถใช้งานได้',0,'');
    	}else if($r['zoo_enable'] == 0){
        $radiozooenable->add('ใช้งานได้',1,'');
        $radiozooenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
    }
echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","user_insert_zoo.php",""); ?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 usubd">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="border-bottom:solid 1px #E0E0E0;">
				<h4>เพิ่มสวนสัตว์</h4>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
				<?php echo $lbzoo ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtzoo ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<?php echo $lbzoono ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtzoono ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top: 14px;"><?php echo $lbzooenable; ?></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-top: 14px;"><?php echo $radiozooenable; ?></div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5"></div>
				</div>
		    </div>
			<input type='hidden' name='zoo_id' value='<?php echo $_GET['id'];?>'/>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="margin-bottom: 16px;">
				<div class='row'>
					<div class='col-md-4'></div>
					<div class='col-md-4'><?php echo $submit ?></div>
					<div class='col-md-4'></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php echo $form->close();
?>