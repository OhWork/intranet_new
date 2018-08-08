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
    $lbwhofu = new label('ค้ำประกันการเข้าทำงาน ของ');
    $lbwhoname = new label('ซึ่งเกี่ยวข้องกับข้าพเจ้าโดยเป็น');
    $lbmoneyroom = new label('ค่าห้องรวมค่าอาหารเบิกวันละไม่เกิน');
    $txtrecipient = new textfield('hrctf_recipient','','form-control css-require','','');
    $txtwhofu = new textfield('hrctf_whofu','','form-control css-require','','');
    $txtwhoname = new textfield('hrctf_whoname','','form-control css-require','','');
    $selectmoneyroom = new selectMenu();
 	$selectmoneyroom->name = 'hrctf_moneyroom';
    $selectmoneyroom->addItem('-----โปรดระบุจำนวนเงิน-----','');
    $selectmoneyroom->addItem('800','800');
    $selectmoneyroom->addItem('1200','1200');
    $button = new buttonok('เปลี่ยนสถานะ','','btn btn-success col-12','');
    	
	$strDate = $r['hrctf_datestartwork'];


    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_id',"'$id'")->executeRow();
		  }
echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","cf_insert_updatestatus.php","");
?>
<div class='row'>
<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:16px;padding-bottom:16px;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom: solid 1px #eaecef;">
			<h4>แบบฟอร์มการยืนยัน และอัพเดตสถานะ</h4>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbname ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['hrctf_name'] ?></label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbposition ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['hrctf_position']?></label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbdevision ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['zoo_name'] ?></label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbcertificate ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['typectf_name'] ?></label></center>
			</div>
		</div>
		<?php if($r['typectf_typectf_id'] == 3){ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbeducation ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['hrctf_educationname'] ?></label></center>
			</div>
		</div>
		<?php }else if($r['typectf_typectf_id'] == 5){ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbwhofu ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php 
    						if($r['hrctf_whofu']){
    						        echo $r['hrctf_whofu'];
    						       }else{
                                    echo $txtwhofu;
        						    } ?></label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbwhoname ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php 
    						if($r['hrctf_whoname']){
    						        echo $r['hrctf_whoname'];
    						       }else{
                                    echo $txtwhoname;
        						    } ?></label></center>
			</div>
		</div>
		<?php }else if($r['typectf_typectf_id'] == 6){ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbhosfamily ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label>
				<?php 
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
    				} 
				?>
				</label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbhosname ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['hrctf_hosname'] ?></label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbprovince ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label><?php echo $r['hrctf_hosprovince'] ?></label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbdatestarthos ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label>
					<?php 
    						$strDate = $r['hrctf_datestarthos'];
    						echo DateThai($strDate); 
					?>
				</label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<div class="row">
				<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'style="padding-top:7px;">
					<?php echo $lbmoneyroom ?>
				</div>
				<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
    				<?php echo $selectmoneyroom; ?>
				</div>
			</div>
		</div>
		<?php }else{ ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbsalary ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label>
					<?php echo $r['hrctf_salary'] ; echo " ( ";  echo num2wordsThai($r['hrctf_salary']); echo " ) บาท"; ?>
				</label></center>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbdatework ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:0.5rem;">
				<center><label>
				<?php 
                    $strDate = $r['hrctf_datestartwork'];
    				echo DateThai($strDate); ?>
				</label></center>
			</div>
		</div>
        <?php } ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
			<?php echo $lbrecipient ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<?php 
    				if($r['hrctf_recipient']){
						echo $r['hrctf_recipient'];
    				}else{
                        echo $txtrecipient;
					} ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
					<div class='row'>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
						<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
							<a href="admin_index.php?url=hrs_edit_certificate.php&id=<?php echo $_GET['id']; ?>" class="btn btn-success col-12">แก้ไขข้อมูล</a>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
					</div>
				</div>
				<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
					<div class='row'>
						<div class="btn-group col-12" data-toggle="buttons">
							<label class="btn btn-success col-4 active">
							  <input type="radio" name="eventconfer_status" class="statusconfirm" value="Y" id="complete" autocomplete="off"  checked> อนุมัติ
							</label>
							<label class="btn btn-danger col-4">
							  <input type="radio" name="eventconfer_status" class="statusconfirm" value="N" id="nocomplete" autocomplete="off"> ไม่อนุมัติ
							</label>
							<label class="btn btn-warning col-4">
							  <input type="radio" name="eventconfer_status" class="statusconfirm" value="C" id="cancelcomplete" autocomplete="off"> ยกเลิก
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo "<input type='hidden' name='eventconfer_id' value='$_GET[id]'/>"; ?>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'></div>
				<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
					<div class='row'>
						<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
						<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
							<?php echo $button ?>
						</div>
						<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
</div>
<?php
     echo $form->close();
	endif;
?>