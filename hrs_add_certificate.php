<?php
    date_default_timezone_set('Asia/Bangkok');
//     $id = $_GET['id'];
    $form = new form();
    $lbname = new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbprovince = new label('จังหวัด');
    $lbdatestart = new label('ตั้งแต่วันที่');
    $lbdateend = new label('ถึงวันที่');
    $lbhospital = new label('รับการรักษาจากสถานพยาบาล');
    $txtname = new textfield('hrctf_name','problem_work','form-control','','');
    $txtdatestartwork = new textfieldcalendarreadonly('hrctf_datestartwork','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtdatestarthos = new textfieldcalendarreadonly('hrctf_datestarthos','datetimepicker2','','form-control','input-group-addon','datetimepicker2');
    $txtposition = new textfield('hrctf_position','problem_position','form-control','','');
    $selectdevision = new SelectFromDB();
    $selectdevision->name = 'zoo_zoo_id';
    $selectdevision->lists = 'โปรดระบุ';
    $selectdevision = new SelectFromDB();
    $selectdevision->name = 'zoo_zoo_id';
    $selectdevision->lists = 'โปรดระบุ';
    $txthospital = new textfield('hrctf_hosname','','form-control','','');
    $txtprovince = new textfield('hrctf_hosprovince','','form-control','','');
    $txtsalary = new textfield('hrctf_salary','','form-control','','');
    $txtwhoname = new textfield('hrctf_whoname','hrctf_ctfname_id','form-control','','');
    $txtwhofu = new textfield('hrctf_whofu','hrctf_ctfname_id','form-control','','');
    $txteducation = new textfield('hrctf_educationname','hrctf_ctfname_id','form-control','','');
    $txtfamilyname = new textfield('hrctf_familyname','hrctf_familyname_id','form-control','','');

    $button = new buttonok("ส่งแบบขอหนังสือรับรอง","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("form_reg","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","hrs_insert_certificate.php","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h4>หนังสือรับรอง</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbname; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtname; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbdevision; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $selectdevision->selectFromTBinDB('zoo','zoo_id','zoo_name','zoo_per_hrs','1',''); ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2 showmsg">
					<div class="row">
						<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="radio" name="typectf_typectf_id" id="parent1" value="1"> รับรองเงินเดือน
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<div class="row">
						<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="radio" name="typectf_typectf_id" id="parent2" value="2"> รับรองการเป็นผู้ปฏิบัติงาน
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="radio" name="typectf_typectf_id"  id="parent3" value="3"> รับรองเข้ารับการศึกษา (สถาบันการศึกษา)
						</label>
						<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
							<?php echo $txteducation;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<div class="row">
						<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="radio" name="typectf_typectf_id"  id="parent4" value="4"> รับรองการค้ำประกันการกู้เงินจากสถาบันการเงิน
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:7px;">
							<input type="radio" name="typectf_typectf_id" id="parent5" value="5"> รับรองการค้ำประกันการเข้าทำงาน ของ
						</label>
						<label class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 showmsg">
							<?php echo $txtwhoname;?>
						</label>
						<label class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-left:34px;padding-top:7px;"> ซึ่งเกี่ยวข้องกับข้าพเจ้าโดยเป็น
						</label>
						<label class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 showmsg">
							<?php echo $txtwhofu;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<div class="row">
						<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="radio" name="typectf_typectf_id"  id="parent7" value="6"> ขอหนังสือรับรองพยาบาล
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" id="cer">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 showmsg" style="padding-top:7px;">
									<?php echo $lbdatework; ?>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
									<div class="row">
										<div class="date-form dayinbox col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg" style="float: left;">
											<div class="form-horizontal">
												<div class="control-group">
													<div class="controls">
														<div class="input-group">
															<?php echo $txtdatestartwork;?>
														</div>
													</div>
												</div>
										   </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:7px;">
									<?php echo $lbsalary; ?>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 showmsg">
									<?php echo $txtsalary; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;" id="hos">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;border-top:solid 1px #e0e0e0;">
							ขอหนังสือรับรองพยาบาล
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
							<div class="row">
								<label class="ccol-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="radio" name="hrctf_familytype" id="parent8" value="1"> ข้าพเจ้า
								</label>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="radio" name="hrctf_familytype"  id="parent9" value="2"> คู่สมรส
								</label>
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txtfamilyname;?>
								</label>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="radio" name="hrctf_familytype"  id="parent10" value="3"> บิดา
								</label>
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txtfamilyname;?>
								</label>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="radio" name="hrctf_familytype" id="parent11" value="4"> มารดา
								</label>
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txtfamilyname;?>
								</label>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="radio" name="hrctf_familytype" id="parent12" value="5"> บุตร
								</label>
								<label class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txtfamilyname; ?>
								</label>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<?php echo $lbhospital; ?>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txthospital; ?>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<?php echo $lbprovince; ?>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txtprovince; ?>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 showmsg">
									<?php echo $lbdatestart; ?>
								</div>
								<div class="date-form dayinbox col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 form-horizontal control-group controls showmsg">
									<div class="input-group">
										<?php echo $txtdatestarthos; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="margin-bottom:16px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
    						<input type='hidden' name='hrctf_datereg' value='<?php echo date("Y-m-d");?>'/>
    						<input type='hidden' name='hrctf_dateupdate' value='-'/>
    						<input type='hidden' name='hrctf_status' value='S'/>
<!--     						<input type='hidden' name='hrctf_id' value='<?php echo $_GET['id']; ?>'/> -->
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<?php echo $button; ?>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
</div>
</div>
<?php echo $form->close();?>
<script>
  		$(document).ready(function(){
  		$('#parent1').prop('checked',true);
  		$('#hos').hide();
  		$('[id=hrctf_ctfname_id]').slice(0).prop("disabled", true);
		$('input[name=typectf_typectf_id]').on("change",function(e) {
		var valchange = $(this).val();
		if(valchange == 1 || valchange == 2 || valchange == 3 || valchange == 4 || valchange == 5){
			$('#cer').fadeIn("slow");;
			$('#hos').hide();
			if(valchange == 1){
			$('[id=hrctf_ctfname_id]').slice(0).prop("disabled", true);
			}
			else if(valchange == 2) {
			$('[id=hrctf_ctfname_id]').slice(0).prop("disabled", true);
			}
			else if(valchange == 3) {
				$('[id=hrctf_ctfname_id]').slice(0,1).prop("disabled", false);
				$('[id=hrctf_ctfname_id]').slice(1,2).prop("disabled", true);
				$('[id=hrctf_ctfname_id]').slice(2,3).prop("disabled", true);
				$('[id=hrctf_ctfname_id]').slice(3,4).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(0).prop("disabled", true);
			}
			else if(valchange == 4) {
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 5) {
				$('[id=hrctf_ctfname_id]').slice(1,2).prop("disabled", false);
				$('[id=hrctf_ctfname_id]').slice(2,3).prop("disabled", false);
				$('[id=hrctf_ctfname_id]').slice(0,1).prop("disabled", true);
				$('[id=hrctf_ctfname_id]').slice(3,4).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(0).prop("disabled", true);
			}
			else if(valchange == 6) {
				$('[id=hrctf_ctfname_id]').slice(3,4).prop("disabled", false);
				$('[id=hrctf_ctfname_id]').slice(0,1).prop("disabled", true);
				$('[id=hrctf_ctfname_id]').slice(1,2).prop("disabled", true);
				$('[id=hrctf_ctfname_id]').slice(2,3).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(0).prop("disabled", true);
			}
			}
			else{
				$('#parent7').prop('checked',true);
				$('#parent8').prop('checked',true);
				$('#cer').hide();
				$('#hos').fadeIn("slow");
				$('[id=hrctf_ctfname_id]').slice(0).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(0).prop("disabled", true);
				$('input[name=hrctf_familytype]').on("change",function(e) {
				var valchange = $(this).val();
				if(valchange == 1){
				$('[id=hrctf_familyname_id]').slice(0).prop("disabled", true);
			}
			else if(valchange == 2) {
				$('[id=hrctf_familyname_id]').slice(0,1).prop("disabled", false);
				$('[id=hrctf_familyname_id]').slice(1,2).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(2,3).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);


			}
			else if(valchange == 3) {
				$('[id=hrctf_familyname_id]').slice(1,2).prop("disabled", false);
				$('[id=hrctf_familyname_id]').slice(0,1).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(2,3).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 4) {
				$('[id=hrctf_familyname_id]').slice(2,3).prop("disabled", false);
				$('[id=hrctf_familyname_id]').slice(0,1).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(1,2).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 5) {
				$('[id=hrctf_familyname_id]').slice(3,4).prop("disabled", false);
				$('[id=hrctf_familyname_id]').slice(0,1).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(1,2).prop("disabled", true);
				$('[id=hrctf_familyname_id]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
				});
			}
		});
		$('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        locale:moment.locale('th')
        })
   $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        locale:moment.locale('th')
        })
   });
   $("#form_reg").validate({
		rules: {
			hrctf_name: "required",
			hrctf_datestartwork: "required",
			zoo_zoo_id : "required",
			hrhos_datestarthos: "required",
			hrctf_position: "required",
			hrhos_hosname: "required",
			hrctf_hosprovince : "required",
			hrctf_salary : "required",
			hrctf_whoname : "required",
			hrctf_whofu : "required",
			hrctf_educationname : "required",
			hrctf_familyname : "required",
		},
		messages: {
			hrctf_name: "กรุณากรอกชื่อ-นามสกุล",
			hrctf_datestartwork: "กรุณากรอกวันที่เริ่มทำงาน",
			zoo_zoo_id : "กรุณากรอกสำนักที่ปฎิบัติงาน",
			hrhos_datestarthos: "กรุณากรอกวันที่เข้าโรงพยาบาล",
			hrctf_position: "กรุณากรอกวันที่ตำแหน่ง",
			hrhos_hosname: "กรุณากรอกชื่อโรงพยาบาล",
			hrctf_hosprovince : "กรุณากรอจังหวัดของโรงพยาบาล",
			hrctf_salary : "กรุณากรอกจำนวนเงินเดือน",
			hrctf_whoname : "กรุณากรอกชื่อผู้ค้ำประกันการเข้าทำงาน",
			hrctf_whofu : "กรุณากรอกการเกี่ยวข้อง",
			hrctf_educationname : "กรุณากรอกสถานที่เข้าศึกษา",
			hrctf_familyname : "กรุณากรอกชื่อ",

		},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".showmsg" ).addClass( "text-danger" ).removeClass( "text-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".showmsg" ).addClass( "text-success" ).removeClass( " text-danger" );
				}	});
</script>
