<?php
    $id = $_GET['id'];
    $form = new form();
    $lbname = new label('ชื่อแบนเนอร์ ');
    $lblink = new label('แนบลิ้งที่ต้องการ');
    $lbtbnenable = new label("สถานะการใช้งาน :");
    $txtname = new textfield('bn_name','','form-control','','');
    $txtlink = new textfield('bn_link','','form-control','','');
    $datetime = date("Y-m-d H:i");
    $radiobnenable = new radioGroup();
    $radiobnenable->name = 'bn_enable';
      if(empty($id)){
        	$radiobnenable->add('ใช้งานได้',1,'','');
        	$radiobnenable->add('ไม่สามารถใช้งานได้',0,'checked','');
        	}
    $button = new buttonok("ยืนยัน","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");

    if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $r = $db->findByPK('bn','bn_id',$id)->executeRow();
     $txtname->value = $r['bn_name'];
     $txtlink->value = $r['bn_link'];
	if($r["bn_enable"] == 1){
    	$radiobnenable->add('ใช้งานได้',1,'checked','');
    	$radiobnenable->add('ไม่สามารถใช้งานได้',0,'','');
    	}else if($r['bn_enable'] == 0){
        $radiobnenable->add('ใช้งานได้',1,'','');
        $radiobnenable->add('ไม่สามารถใช้งานได้',0,'checked','');
    	}
    }
echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","bn_insert_banner.php","");
?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"  style="border-bottom:solid 1px #E0E0E0;">
				<h4>เพิ่มแบนเนอร์</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<?php echo $lbname; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $txtname; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<?php echo $lblink; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $txtlink;?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
						<?php echo $lbtbnenable; ?>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						<?php echo $radiobnenable;?>
					</div>
				</div>
			</div>
			<input type='hidden' name='user_user_id' value='<?php echo $_SESSION["user_id"]?>'/>
			<input type='hidden' name='bn_datereg' value='<?php echo $datetime; ?>'/>
			<input type='hidden' name='bn_id' value='<?php echo $id; ?>'/>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1" style="padding-bottom:16px;">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
						<?php echo $button; ?>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php
    echo $form->close();
?>

