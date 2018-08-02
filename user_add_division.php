<?php
if (!empty($_SESSION['user_name'])):
$id = $_GET['id'];
  $form = new form();
  $lbsubzooname = new label("ฝ่าย :");
  $lbsubzooyear = new label("ปี :");
  $lbsubzoodetail = new label("รายละเอียด :");
  $lbsubzoono = new label("ลำดับ :");
  $lbradiosubzoo = new label("สถานะ :");
  $txtsubzooname = new textfield('subzoo_name','','form-control','');
  $txtsubzoono = new textfield('subzoo_no','','form-control','');
  $txtsubzooyear = new textfield('subzoo_year','','form-control','');
  $txtsubzoodetail = new textfield('subzoo_detail','','form-control','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-12","");
  $selectzoo = new SelectFromDB();
  $selectzoo->name = 'zoo_zoo_id';
  $selectzoo->lists = 'โปรดระบุ สำนัก/สวนสัตว์';
  $radiosubzoo = new radioGroup();
  $radiosubzoo->name = 'subzoo_enable';
  if(empty($id)){
        $radiosubzoo->add('ใช้งาน',1,'checked');
        $radiosubzoo->add('ไม่ใช้งาน',0,'');    
  }
  if(!empty($_GET['id'])){
	$r = $db->findByPK('subzoo','subzoo_id',$id)->executeRow();
	$txtsubzooname->value = $r['subzoo_name'];
	$txtsubzoono->value = $r['subzoo_no'];
	$txtsubzooyear->value = $r['subzoo_year'];
	$txtsubzoodetail->value = $r['subzoo_detail'];
	if($r["subzoo_enable"] == 1){ 
    	$radiosubzoo->add('ใช้งาน',1,'checked');
    	$radiosubzoo->add('ไม่ใช้งาน',0,'');
    	}else if($r['subzoo_enable'] == 0){
        $radiosubzoo->add('ใช้งาน',1,'');
        $radiosubzoo->add('ไม่ใช้งาน',0,'checked');
    	}
	}
	
  echo $form->open("form_reg","form","maxw","user_insert_division.php","");
  if(empty($_GET['id'])){ ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">  
			<div class='col-md-12' style="padding-top:14px;">
				<h4>เพิ่มฝ่าย</h4>
			</div>
			<div class='col-md-12'><?php echo $lbzoo.$selectzoo->selectFromTB('zoo','zoo_id','zoo_name',$r['zoo_zoo_id']); ?></div>
			<div class='col-md-12' style="padding-top:16px;">
				<div class='row'>
					<div class='col-md-2' style='padding-top:8px;'><?php echo $lbsubzooname; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubzooname; ?></div>
				</div>
			</div>
			<?php  }
			  if(!empty($_GET['id'])){ ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class='col-md-12'style="padding-top:14px;">
				<h4>แก้ไขฝ่าย</h4>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2'><?php echo $lbsubzooname; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubzooname; ?></div>
				</div>
			</div>
			 <?php } ?>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2' style="padding-top:8px;"><?php echo $lbsubzoono; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubzoono; ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2' style="padding-top:8px;"><?php echo $lbsubzooyear; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubzooyear; ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-3' style="padding-top:8px;"><?php echo $lbsubzoodetail; ?></div>
					<div class='col-md-8 form-group has-feedback'><? echo $txtsubzoodetail; ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2' style="padding-top:8px;"><?php echo $lbradiosubzoo; ?></div>
					<div class='col-md-8' style="padding-top:8px;"><?php echo $radiosubzoo; ?></div>
				</div>
			</div>
			<div class='col-md-12' style="padding-top:16px;">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<input type='hidden' name='subzoo_id' value="<?php echo $_GET['id']; ?>"/>
					<?php echo $submit; ?>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
			<?php echo $form->close();
						endif;
			?>
		</div>
		<div class="col-md-3"></div>		
	</div>	
</div>