<?php
    if (!empty($_SESSION['user_name'])):
    $zoo = $_SESSION['subzoo_zoo_zoo_id'];
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $lbname = new label('ชื่อ-นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbcertificate = new label('ชื่อหนังสือรับรอง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbprovince = new label('จังหวัด');
    $lbdatestart = new label('ตั้งแต่วันที่');
    $lbdateend = new label('ถึงวันที่');

    $txtnotclear = new textfield('problem_notclear','','form-control css-require','','');
    $txttime = new textfield('problem_dateend','datetimepicker','form-control css-require','','');
    $txtorder = new textfield('problem_dateorder','datetimepicker2','form-control css-require','','');
    $txtserialNo = new textfield('problem_serial','','form-control css-require','','');
    $txtplace = new textfield('problem_place','','form-control css-require','','');
    $txtcause = new textAreaCf(5,5,'eventconfer_comment','form-control','comment','');
    $txtserialorganize = new textfield('problem_serialorganize','','form-control css-require','','');
    $txtcompletedetail = new textarea('problem_detailcomplete','form-control','','');
    $txtcompletedetail->rows = 5;
    $txtnocompletedetail = new textarea('problem_detailwaitcomplete','form-control','','');
    $txtnocompletedetail->rows = 5;
    $button = new buttonok('เปลี่ยนสถานะ','','btn btn-success col-md-12','');
    	
	$strDate = $r['hrctf_datestartwork'];


    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'S'")->executeRow();

          $txtnocompletedetail->value = $r['problem_detailwaitcomplete'];
		  $txtcompletedetail->value = $r['problem_detailcomplete'];
          $txtserialorganize->value = $r['problem_serialorganize'];
		  $txtserialNo->value = $r['problem_serial'];
		  $txtplace->value = $r['problem_place'];
		  $txtorder->value = $r['problem_dateorder'];
		  }
		  echo $row."<legend></legend>".$rowend;
		  echo $form->open("form_reg","form","","cf_insert_updatestatus.php","");
?>

						<a href="admin_index.php?url=hrs_edit_certificate.php&id=<?php echo $_GET['id']; ?>" class="btn btn-success col-12">แก้ไขข้อมูล</a>
<div class='col-md-12'>
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6' style="border: solid 1px #eaecef;border-radius: 6px;padding-top:16px;padding-bottom:16px;">
			<div class='row'>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbname ?></div>
						<div class='col-md-6 statustext'><?php echo $r['hrctf_name'] ?></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbposition ?></div>
						<div class='col-md-6 statustext'><?php echo $r['hrctf_position']?></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbdevision ?></div>
						<div class='col-md-6 statustext'><?php echo $r['zoo_name'] ?></div>
					</div>
				</div>
								<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbcertificate ?></div>
						<div class='col-md-6 statustext'><?php echo $r['typectf_name'] ?></div>
					</div>
				</div>
				<?php 
    				if($r['typectf_id'] == 7){
    				 ?>
				<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbsalary ?></div>
						<div class='col-md-6 statustext'><?php echo $r['hrctf_salary'] ?></div>
					</div>
				</div>
				<?php
    				}else{
        				?>
        				<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbsalary ?></div>
						<div class='col-md-6 statustext'><?php echo $r['hrctf_salary'] ; echo " ( ";  echo num2wordsThai($r['hrctf_salary']); echo " ) บาท"; ?></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6 font-weight-bold statustextleft'><?php echo $lbdatework ?></div>
						<div class='col-md-6 statustext'><?php 
                            $strDate = $r['hrctf_datestartwork'];
    						echo DateThai($strDate); ?></div>
					</div>
				</div>
        				<?php
    				}
				?>
				<div class='col-md-12'>
					<div class='row'>
						<div class="col-md-12"><hr></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-4'></div>
						<div class="btn-group col-md-4" data-toggle="buttons">
							<label class="btn btn-success col-md-6 active">
							  <input type="radio" name="eventconfer_status" class="statusconfirm" value="Y" id="complete" autocomplete="off"  checked> อนุมัติ
							</label>
							<label class="btn btn-danger col-md-6">
							  <input type="radio" name="eventconfer_status" class="statusconfirm" value="N" id="nocomplete" autocomplete="off"> ไม่อนุมัติ
							</label>
							<label class="btn btn-warning col-md-6">
							  <input type="radio" name="eventconfer_status" class="statusconfirm" value="C" id="cancelcomplete" autocomplete="off"> ยกเลิก
							</label>
						</div>
						<div class='col-md-4'></div>
					</div>
				</div>

<?php
    echo "<input type='hidden' name='eventconfer_id' value='$_GET[id]'/>";
?>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-4'></div>
						<div class='col-md-4 mt-3'>
							<?php echo $button ?>
						</div>
						<div class='col-md-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class='col-md-3'></div>
	</div>
</div>
<?php
     echo $form->close();
	endif;
?>
</div>