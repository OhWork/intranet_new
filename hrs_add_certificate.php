<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbrecipient = new label('เรียน');
    $lbname = new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $txtrecipient = new textfield('hrctf_recipient','problem_work','form-control','','');
    $txtname = new textfield('hrctf_name','problem_work','form-control','','');
    $txttime = new textfieldcalendarreadonly('hrctf_datestart','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtposition = new textfield('hrhos_position','problem_position','form-control','','');
    $txtsubname = new textfield('','hrhos_subname','form-control ','','');
    $selectdevision = new SelectFromDB();
    $selectdevision->name = 'zoo_zoo_id';
    $selectdevision->lists = 'โปรดระบุ';
    $radioparent = new radioGroup();
    $radioparent->name = 'parent';
    $radioparent->add('ข้าพเจ้า',1,'');
    $radioparent->add('คู่สมรส ชื่อ',2,'');
    $radioparent->add('คู่บิดา ชื่อ',2,'');
    $radioparent->add('คู่มารดา ชื่อ',2,'');
    $radioparent->add('คู่บุตร ชื่อ',2,'');
    $lbprovince = new label('จังหวัด');
    $lbdatestart = new label('ตั้งแต่วันที่');
    $lbdateend = new label('ถึงวันที่');
    $lbhospital = new label('รับการรักษาจากสถานพยาบาล');
    $selectdevision = new SelectFromDB();
    $selectdevision->name = 'zoo_zoo_id';
    $selectdevision->lists = 'โปรดระบุ';
    $txtname = new textfield('hrhos_name','','form-control','','');
    $txthospital = new textfield('hrhos_hosname','','form-control','','');
    $txtprovince = new textfield('hrnos_province','','form-control','','');
    $txtdatestart = new textfieldcalendarreadonly('hrhos_datestart','datetimepicker1','','form-control','input-group-addon','datetimepicker1');
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("","","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;">
	<div class="row">
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h4>หนังสือรับรอง</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbrecipient; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
    						<?php echo $txtrecipient; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbname; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
    						<?php echo $txtname; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbposition; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
    						<?php echo $txtposition; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdevision; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
    						<?php echo $selectdevision->selectFromTBinDB('zoo','zoo_id','zoo_name','zoo_per_hrs','1',''); ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent1" value="1"> รับรองเงินเดือน
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent2" value="2"> รับรองการเป็นผู้ปฏิบัติงาน
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

						</label>
					</div>
				</div>

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent3" value="3"> รับรองเข้ารับการศึกษา (สถาบันการศึกษา)
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-right:0px;">
							<input type="radio" name="hrhos_familytype"  id="parent4" value="4"> รับรองการค้ำประกันการกู้เงินจากสถาบันการเงิน
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> รับรองการค้ำประกันการเข้าทำงาน ของ
						</label>
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $txtsubname;?>
						</label>
						<label class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="padding-left:0;padding-right:0;"> ซึ่งเกี่ยวข้องกับข้าพเจ้าโดยเป็น
						</label>
						<label class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent6" value="6"> อื่นๆ
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent6" value="7"> ขอหนังสือรับรองพยาบาล
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" id="cer">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdatework; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<div class="row">
								<div class="date-form dayinbox col-md-6" style="float: left;">
									<div class="form-horizontal">
										<div class="control-group">
											<div class="controls">
												<div class="input-group">
													<?php echo $txttime;?>
												</div>
											</div>
										</div>
								   </div>
								</div>
								<div class='col-md-6'style="float: left;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbsalary; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</div>
					</div>
				</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;" id="hos">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent1" value="8"> ข้าพเจ้า
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent2" value="9"> คู่สมรส
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent3" value="10"> บิดา
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent4" value="11"> มารดา
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="12"> บุตร
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname; ?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbhospital; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txthospital; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbprovince; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtprovince; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdatestart; ?>
						</div>
						<div class="date-form dayinbox col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 form-horizontal control-group controls">
                            <div class="input-group">
								<?php echo $txtdatestart; ?>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
							<?php echo $button; ?>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
	</div>
</div>
<script>
  		$(document).ready(function(){
  		$('#parent1').prop('checked',true);
  		$('#cer').hide();
  		$('#hos').hide();
  		$('[id=hrhos_subname]').slice(0).prop("disabled", true);
		$('input[name=hrhos_familytype]').on("change",function(e) {
		var valchange = $(this).val();
		if(valchange == 1 || valchange == 2 || valchange == 3 || valchange == 4 || valchange == 5 || valchange == 6){
			$('#cer').show();
			$('#hos').hide();
			if(valchange == 1){
			$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 2) {
			$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 3) {
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", false);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", true);
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", true);
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", true);
			}
			else if(valchange == 4) {
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 5) {
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", false);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", true);
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", true);
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", true);
			}
			else if(valchange == 6) {
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", true);
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", true);
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", true);
			}
			}
			else{
				$('#cer').hide();
				$('#hos').show();
				if(valchange == 8){
/*
				$('#me').attr("disabled", false);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
*/
			}
			else if(valchange == 9) {
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", true);
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", true);
				$('[id=hrhos_subname]').slice(7,8).prop("disabled", true);

			}
			else if(valchange == 10) {
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", true);
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", true);
				$('[id=hrhos_subname]').slice(7,8).prop("disabled", true);

			}
			else if(valchange == 11) {
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", true);
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", true);
				$('[id=hrhos_subname]').slice(7,8).prop("disabled", true);
			}
			else if(valchange == 12) {
				$('[id=hrhos_subname]').slice(7,8).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
				$('[id=hrhos_subname]').slice(4,5).prop("disabled", true);
				$('[id=hrhos_subname]').slice(5,6).prop("disabled", true);
				$('[id=hrhos_subname]').slice(6,7).prop("disabled", true);
			}
			}
		});
	});
</script>
