<?php
    date_default_timezone_set('Asia/Bangkok');
     $id = $_GET['id'];
    $form = new form();
    $lbname = new label('ชื่อ - นามสกุล');
    $lbzoo = new label('สำนัก/สวน');
    $lbdevision = new label('ฝ่าย');
    $lbworkposition = new label('งาน');
    $lbwork = new label('ระบบงาน');
    $lbdetail = new label('รายละเอียด');
    $lbtel = new label('เบอร์โทรศัพท์ติดต่อ');
    $lbemail = new label('อีเมลที่ติดต่อกลับ');
    $button = new buttonok("แก้ไขข้อมูล","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_id',$id)->executeRow();
    echo $form->open("","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","hrs_insert_certificate.php","");
 ?>
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:solid 1px #E0E0E0;">
					<h4>หนังสือ<?php echo $r['typectf_name']; ?></h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbname; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $r['upweb_name']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbzoo; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $r['']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbdevision; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php echo $selectdevision->selectFromTBinDB('zoo','zoo_id','zoo_name','zoo_per_hrs','1',$r['zoo_zoo_id']); ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbworkposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $txtworkposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbwork; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $txtwork; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $txtdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbtel; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $txtdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbemail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $txtdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
    					<input type='hidden' name='hrctf_id' value='<?php echo $_GET['id']; ?>'/>
    					<input type='hidden' name='hrctf_status' value='W'/>
    					<input type='hidden' name='hrctf_dateupdate' value='<?php echo date("Y-m-d"); ?>'/>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $button; ?></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
<?php echo $form->close();?>
    }
