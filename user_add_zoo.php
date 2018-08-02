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
  echo $form->open("form_reg","form","","user_insert_zoo.php",""); ?>
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			<div class='col-md-12'  style='margin-top: 16px;'>
				<h4>เพิ่มสวนสัตว์</h4>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-3'  style='padding-top: 7px;'><?php echo $lbzoo ?></div>
					<div class='col-md-9 form-group has-feedback'><?php echo $txtzoo ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-3'  style='padding-top: 7px;'><?php echo $lbzoono ?></div>
					<div class='col-md-9 form-group has-feedback'><?php echo $txtzoono ?></div>
				</div>
			</div>
			<div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="padding-top: 14px;"><?php echo $lbzooenable; ?></div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top: 14px;"><?php echo $radiozooenable; ?></div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7"></div>
		    </div>
			<div class='col-md-12'>
				<div class='row'>
					 <input type='hidden' name='zoo_id' value='<?php echo $_GET['id'];?>'/>
					<div class='col-md-4'><?php echo $submit ?></div>
					<div class='col-md-4'></div>
				</div>
			</div>
		</div>
		<div class='col-md-3'></div>
	</div>
<?php echo $form->close();
?>