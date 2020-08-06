<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
  $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
  $form = new form();
  $lblp = new label("เลขทะเบียนรถยนตร์");
  $lbtypecar = new label("ประเภทรถยนตร์");
  $lbseatnum = new label("จำนวน");
  $lbseat = new label("ที่นั่ง");
  $lbbrand = new label("ยี้ห้อ");
  $lbmodel = new label("รุ่น");
  $lbcolor = new label("สี");
  $lbdetail = new label("รายละเอียด");
  $lbcarstatus = new label("สถานะ");
  $txtlp = new textfield('car_lp','','form-control','');
  $txtbrand = new textfield('car_brand','','form-control','');
  $txtcolor = new textfield('car_color','','form-control','');
  $txtmodel = new textfield('car_model','','form-control','');
  $txtseat = new textfield('car_seat','','form-control','');
  $txtdetail = new textfield('car_detail','','form-control','');
  $selecttypecar = new SelectFromDB();
  $selecttypecar->name = 'typecar_typecar_id';
  $selecttypecar->lists = 'โปรดระบุ ชนิดของรถยนตร์';
  $radiocarstatus = new radioGroup();
  $radiocarstatus->name = 'typecar_typecar_id';
  if(empty($id)){
    	$radiocarstatus->add('ใช้งานได้',1,'','');
    	$radiocarstatus->add('ยกเลิกการใช้งาน',0,'checked','');
    	}
   $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	//$r = $db->findByPK('user','user_id',$id)->executeRow();
                $r = $db->findByPK33('user','subzoo','zoo','subzoo_subzoo_id','subzoo_id','subzoo_zoo_zoo_id','zoo_id','user_id',$id)->executeRow();
	$txtpass->value = $r['user_pass'];
	$txtname->value = $r['user_name'];
                $txtnameen->value = $r['user_nameeng'];
	$txtlast->value = $r['user_last'];
                $txtlasten->value = $r['user_lasteng'];
	$txttel->value = $r['user_tel'];
	$txtidcard->value = $r['user_idcard'];
	$zoo = $r['subzoo_zoo_zoo_id'];
                $subzoo = $r['subzoo_subzoo_id'];
    if($r["user_enable"] == 1){
    	$radiouserenable->add(' ใช้งานได้',1,'checked','');
    	$radiouserenable->add(' ไม่สามารถใช้งานได้',0,'','');
    	}else if($sa['systemallow_admin'] == 0){
        $radiouserenable->add('ใช้งานได้',1,'','');
        $radiouserenable->add('ไม่สามารถใช้งานได้',0,'checked','');
    	}
    }

?>
<?php echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","ts_insert_car.php",""); ?>
<div class="row">
	<div class="col-xl-2 col-lg-2 col-md-1"></div>
	<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;font-size: 18px;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
				<h4>ข้อมูลรถยนตร์</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<?php echo $lblp; ?>
					</div>
					<div class="form-group has-feedback col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12 showrequired">
						<?php echo $txtlp; ?>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<?php echo $lbtypecar; ?>
					</div>
					<div class="form-group has-feedback col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12 showrequired">
						<?php echo $selecttypecar->selectFromTB('typecar','typecar_id','typecar_name',$r['zoo_zoo_id']);; ?>
					</div>
					<div id="msg"></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<div class="row">
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
								<?php echo $lbbrand; ?>
							</div>
							<div class="form-group has-feedback col-xl-10 col-lg-10 col-md-9 col-sm-12 col-12">
								<?php echo $txtbrand; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<div class="row">
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
								<?php echo $lbmodel; ?>
							</div>
							<div class="form-group has-feedback col-xl-10 col-lg-10 col-md-9 col-sm-12 col-12">
								<?php echo $txtmodel; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<div class="row">
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
								<?php echo $lbcolor; ?>
							</div>
							<div class="form-group has-feedback col-xl-10 col-lg-10 col-md-9 col-sm-12 col-12">
								<?php echo $txtcolor; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-5">
								<?php echo $lbseatnum; ?>
							</div>
							<div class="form-group has-feedback col-xl-3 col-lg-3 col-md-4 col-sm-5 col-5">
								<?php echo $txtseat; ?>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-3 col-sm-2 col-2">
								<?php echo $lbseat; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class='row'>
					<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2' style="padding-top:8px;"><?php echo $lbdetail; ?></div>
					<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="padding-top:8px;"><?php echo $txtdetail; ?></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 15px;">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3" style="padding-top: 14px;"><?php echo $lbcarstatus; ?></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-top: 14px;"><?php echo $radiocarstatus; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-5 col-sm-5 col-5"></div>
				</div>
			</div>
			<input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
			<input type='hidden' name='car_id' value='<?php echo $_GET['id'];?>'/>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:16px;">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<?php echo $submit; ?>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-2 col-lg-2 col-md-1"></div>
</div>
<?php
    echo $form->close();
    endif; ?>
