<?php
    if (!empty($_SESSION['user_name'])):
    $zoo = $_SESSION['subzoo_zoo_zoo_id'];
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $form = new form();
    $lbname = new label('ชื่อ-นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbcertificate = new label('ชื่อหนังสือรับรอง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbprovince = new label('จังหวัด');
    $lbeducation = new label('ชื่อสถาบันการศึกษา');
    $lbhosfamily = new label('ขอหนังสือรับรองนี้ให้กับ');
    $lbhosname = new label('รับการรักษาจากโรงพยาบาล');
    $lbdatestarthos = new label('วันที่เริ่มเข้ารับการรักษา');
    $lbrecipient = new label('เรียน');
    $lbCause = new label('สาเหตุที่ไม่อนุมัติ/ยกเลิก');
    $lbwhofu = new label('ค้ำประกันการเข้าทำงาน ของ');
    $lbwhoname = new label('ซึ่งเกี่ยวข้องกับข้าพเจ้าโดยเป็น');
    $lbmoneyroom = new label('ค่าห้องรวมค่าอาหารเบิกวันละไม่เกิน');
    $txtcause = new textAreaCf(5,5,'hrctf_comment','form-control','comment','');
    $txtrecipient = new textfield('hrctf_recipient','','form-control css-require','','');
    $txtwhofu = new textfield('hrctf_whofu','','form-control css-require','','');
    $txtwhoname = new textfield('hrctf_whoname','','form-control css-require','','');
    $button = new buttonok('ยืนยัน','','btn btn-success col-12','');

	$strDate = $r['hrctf_datestartwork'];


    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_id',"'$id'")->executeRow();
		  }
echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","hrs_update_status_final.php","");
?>
<div class='row'>
<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:16px;padding-bottom:16px;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<h4>แบบฟอร์มการแก้ไขข้อมูล และอัพเดตสถานะ</h4>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbcertificate ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['typectf_name'] ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbrecipient ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['hrctf_recipient'] ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbname ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['hrctf_name'] ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbposition ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['hrctf_position']?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbdevision ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['zoo_name'] ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbcertificate ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['typectf_name'] ?></label></center>
				</div>
			</div>
		</div>
		<?php if($r['typectf_typectf_id'] == 3){ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbeducation ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['hrctf_educationname'] ?></label></center>
				</div>
			</div>
		</div>
		<?php }else if($r['typectf_typectf_id'] == 5){ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbwhofu ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				<center><label><?php
    						if($r['hrctf_whofu']){
    						        echo $r['hrctf_whofu'];
    						       }else{
                                    echo $txtwhofu;
        						    } ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbwhoname ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				<center><label><?php
    						if($r['hrctf_whoname']){
    						        echo $r['hrctf_whoname'];
    						       }else{
                                    echo $txtwhoname;
        						    } ?></label></center>
				</div>
			</div>
		</div>
		<?php }else if($r['typectf_typectf_id'] == 6){ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbhosfamily ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				<center><label>
				<?php
    				echo $r['hrctf_familytype'];
    				if($r['hrctf_familytype'] == 1){
						echo "ข้าพเจ้าชื่อ".$r['hrctf_name'];
                    }else if($r['hrctf_familytype'] == 2){
                        echo "คู่สมรสชื่อ".$r['hrctf_familyname'];
    				}else if($r['hrctf_familytype'] == 3){
                        echo "บิดาชื่อ".$r['hrctf_familyname'];
    				}else if($r['hrctf_familytype'] == 4){
                        echo "มารดาชื่อ".$r['hrctf_familyname'];
    				}else if($r['hrctf_familytype'] == 5){
                        echo "บุตรชื่อ".$r['hrctf_familyname'];
    				}else{
        				echo "ปัญหาละ";
    				}
				?>
				</label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbhosname ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['hrctf_hosname'] ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbprovince ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label><?php echo $r['hrctf_hosprovince'] ?></label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbdatestarthos ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				<center><label>
					<?php
    						$strDate = $r['hrctf_datestarthos'];
    						echo DateThai($strDate);
					?>
				</label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class="row">
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="padding-top:7px;border-right: solid 1px #eaecef;">
					<?php echo $lbmoneyroom ?>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
    				<center><label><?php echo $r['hrctf_moneyroom']; ?></label></center>
				</div>
			</div>
		</div>
		<?php }else{ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbsalary ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
					<center><label>
						<?php echo $r['hrctf_salary'] ; echo " ( ";  echo num2wordsThai($r['hrctf_salary']); echo " ) บาท"; ?>
					</label></center>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad' style="border-right: solid 1px #eaecef;">
					<center><?php echo $lbdatework ?></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				<center><label>
				<?php
                    $strDate = $r['hrctf_datestartwork'];
    				echo DateThai($strDate); ?>
				</label></center>
				</div>
			</div>
		</div>
        <?php } ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad'>
					<center><label>พิมพ์เอกสารคำร้อง</label></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;padding-bottom:16px;">
			<div class='row'>
    			<?php
    			if($r['typectf_typectf_id']==6){
        			?>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
					<div class='row'>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_hospital_report_BT.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" style="margin-left:8px;background-color:#90CAF9;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:6px;padding-right:0px;">
											บันทึกข้อความ
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_hospital_report1.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" 
										style="margin-left:8px;background-color:#42A5F5;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:2px;padding-right:0px;">
											หนังสือส่งออก1
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_hospital_report2.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" 
										style="margin-left:8px;background-color:#1E88E5;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:2px;padding-right:0px;">
											หนังสือส่งออก2
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_hospital_report3.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" 
										style="margin-left:8px;background-color:#1565C0;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:2px;padding-right:0px;">
											หนังสือส่งออก3
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<?php
				}else{
                ?>
                <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
					<div class='row'>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_certificate_report_new.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" style="margin-left:8px;background-color:#90CAF9;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:6px;padding-right:0px;">
											บันทึกข้อความ
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_certificate_report1.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" 
										style="margin-left:8px;background-color:#42A5F5;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:2px;padding-right:0px;">
											หนังสือส่งออก1
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_certificate_report2.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" 
										style="margin-left:8px;background-color:#1E88E5;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:2px;padding-right:0px;">
											หนังสือส่งออก2
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
									<div class='row'>
										<a href="hrs_certificate_report3.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-circle" 
										style="margin-left:8px;background-color:#1565C0;">
										<img width="30" height="40" style="margin:10px;" src='images/icons/glyphicons-40-notes@2x.png'/>
										</a>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="padding-left:2px;padding-right:0px;">
											หนังสือส่งออก3
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php
		}
		?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hrsstpad'>
					<center><label>ปรับเปลี่ยนสถานะคำสั่งการ</label></center>
				</div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 hrsstpad'>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='row'>
				<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
    			<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
    				<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
							<div class='row'>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
									<div class='row'>
										<div class="btn-group col-12" data-toggle="buttons">
											<label class="btn btn-success active col-4">
												<input class="statusconfirm" type="radio" name="hrctf_status" value="Y" onchange="swapConfig(this)" id="complete" autocomplete="off" checked> อนุมัติ
											</label>
											<label class="btn btn-danger col-8">
												<input class="statusconfirm" type="radio" name="hrctf_status" value="N" onchange="swapConfig(this)" id="nocomplete" autocomplete="off"> ยกเลิก / ไม่อนุมัติ
											</label>
										</div>
									</div>
								</div>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
							</div>
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 editcomment'>
							<div class='row'>
								<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
										<?php echo $lbCause; ?>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 statustext">
									<?php echo $txtcause; ?>
								</div>
							</div>
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
							<div class='row'>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
									<?php echo "<input type='hidden' name='hrctf_id' value='$_GET[id]'/>";
									echo $button ?>
								</div>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
							</div>
						</div>
					</div>
				</div>
				<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
</div>
<script>
    function swapConfig(x) {
    var radioName = document.getElementsByName(x.name);
    for(i = 0 ; i < radioName.length; i++){
      document.getElementById(radioName[i].id.concat("Settings")).style.display="none";
    }
    document.getElementById(x.id.concat("Settings")).style.display="initial";

  }
  $(document).ready(function(){
		$('.editcomment').hide();
		$('.statusconfirm').on("change",function(e) {
		var checkstat = $('input[name=hrctf_status]:radio:checked').val();
			console.log(checkstat);
			if(checkstat =='N'){
// 				$('.editcomment').animate({height: 'toggle'});
				$('.editcomment').show("slow");
			}
			else {
				$('.editcomment').hide("slow");

			}
		});
	});
</script>
<?php
     echo $form->close();
	endif;
?>
