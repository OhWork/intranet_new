<?php
    $form = new form();
    $lbheadncf = new label("หัวข้อการประชุม :");
    $lbhconferenable = new label("สถานะ :");
    $txtheadncf = new textfield('headncf_name','','form-control css-require','');
    $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
    $id = $_GET['id'];
	$r = $db->findByPK('headncf','headncf_id',$id)->executeRow();
	$txtheadncf->value = $r['headncf_name'];
    $radiohconferenable = new radioGroup();
    $radiohconferenable->name = 'headncf_enable';

     if($r["headncf_enable"] == 1){
    	$radiohconferenable->add('ใช้งาน',1,'checked');
    	$radiohconferenable->add('ไม่ใช้งานได้',0,'');
    	}else{
        $radiohconferenable->add('ใช้งาน',1,'');
        $radiohconferenable->add('ไม่ใช้งานได้',0,'checked');
    	}
    	
  echo $form->open("form_reg","form","","cf_insert_headncf.php",""); ?>
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			<div class='col-md-12'  style='margin-top: 16px;'>
				<h4>เพิ่มหัวข้อการประชุม</h4>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-3'  style='padding-top: 7px;'><?php echo $lbheadncf ?></div>
					<div class='col-md-9 form-group has-feedback'><?php echo $txtheadncf ?></div>
				</div>
			</div>
						<div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 usu" style="padding-top: 14px;"><?php echo $lbhconferenable; ?></div>
                    <div class="col-md-3 usu2" style="padding-top: 14px;"><?php echo $radiohconferenable; ?></div>
                    <div class="col-md-3"></div>
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
	<input type="hidden" name="headncf_id" value="<?php echo $id; ?>">
<?php echo $form->close();
?>
