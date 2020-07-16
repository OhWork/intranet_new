<?php
    if (!empty($_SESSION['user_name'])):
    $id =  $_GET['id'];
    $form = new form();
    $button = new buttonok("ยืนยันการตรวจสอบ","","btn btn-success btn-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    $rs = $db->findByPK34('zlfotmember','user','zoo','zlfotmember.user_user_id','user.user_id','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfotmember_id',$id)->executeRow();
    echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
	?>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;font-size: 18px;">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
						<div class="row">
                                                    <h2>รอการตรวจสอบความถูกต้อง</h2>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>ประเภทบัตรสมาชิก</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['typezlfot_name']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>รหัสบัตรสมาชิก</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zlfot_code']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>ชื่อภาษาไทย</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zlfot_nameth']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>ชื่อภาษาอังกฤษ</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zlfot_nameen']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>ที่อยู่</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<p><?php echo $rs['zlfot_address']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>วันที่ลงทะเบียนเข้าสู่ระบบ</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zlfot_datereg']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>วันที่สมัคร</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zlfot_datestart']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>วันที่หมดอายุ</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zlfot_dateend']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>ผู้บันทึกข้อมูล</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['user_name']." ".$rs['user_last']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<p>หน่วยงาน</p>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
								<?php echo $rs['zoo_name']; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
						<div class="row">
							<input type='hidden' name='zlfot_status' value='P'> 
							<input type='hidden' name='zlfot_id' value=<?php echo $id; ?>> 
							<div class="col-xl-3 col-lg-2 col-md-2"></div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                                            <?php echo $button; ?>
							</div>
                                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                                             <a class="btn btn-warning btn-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" href="#">
						แก้ไขข้อมูล
						</a>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-2 col-md-2"></div>
						</div>
					</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-1"></div>
		</div>
	</div>
<?php echo $form->close();
endif;
?> 
