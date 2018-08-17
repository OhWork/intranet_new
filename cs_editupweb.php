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
		$r = $db->findByPK43('upweb','typeWorkupweb','subzoo','zoo','typeWorkupweb_typeWorkupweb_id','typeWorkupweb_id','subzoo_subzoo_id','subzoo_id','zoo_zoo_id','zoo_id')->executeRow();
    echo $form->open("","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","cs_insert_upweb.php","");
 ?>
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:solid 1px #E0E0E0;">
					<h4>การขอคำร้องอัพขึ้นเว็บไซต์</h4>
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
    				<?php echo $r['zoo_name']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbdevision; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php echo  $r['subzoo_name']; ?>
				</div>
				<?php
					if(!empty($r['upweb_work'])){
				?>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbworkposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $r['upweb_work']; ?>
				</div>
				<?php
					}
				?>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbwork; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $r['typeWorkupweb_name']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $r['upweb_detail']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbtel; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $r['upweb_tel']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $lbemail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $r['upweb_email']; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
    					<input type='hidden' name='upweb_id' value='<?php echo $_GET['id']; ?>'/>
    					<input type='hidden' name='upweb_status' value='Y'/>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><a href="images/uploadweb/<?php echo $r['upweb_uploadfile'];?>.zip">ดาวโหลดข้อมูล</a></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $button; ?></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
<?php echo $form->close();
	}
?>
