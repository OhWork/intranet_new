<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbsend = new label('เรียน');
    $lbname = new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $txtwork = new textfield('problem_work','problem_work','form-control','','');
    $txttime = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtcall = new textfield('problem_tel','','form-control','','');
    $txtposition = new textfield('problem_position','problem_position','form-control','','');
    $txtdetail = new textarea('problem_detail','aprob','','');
    $txtdetail->rows = 5;
    $txtsubname = new textfield('','hrhos_subname','form-control ','','');
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("","","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;">
	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h4>หนังสือรับรอง</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbsend; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbname; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbposition; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdevision; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdatework; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbsalary; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
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
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent4" value="4"> รับรองการคำ้ประกันการกู้เงินจากสถาบันการเงิน
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> รับรองการคำ้ประกันการเข้าทำงาน ของ
						</label>
						<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
							<?php echo $txtsubname;?>
						</label>
						<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"> ซึ่งเกี่ยวข้องกับข้าพเจ้าโดยเป็น
						</label>
						<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
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
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
	</div>
</div>
<script>
  		$(document).ready(function(){
  		$('#parent1').prop('checked',true);
  		$('[id=hrhos_subname]').slice(0).prop("disabled", true);
		$('input[name=hrhos_familytype]').on("change",function(e) {
		var valchange = $(this).val();
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
			}
			else if(valchange == 4) {
				$('[id=hrhos_subname]').slice(0).prop("disabled", true);
			}
			else if(valchange == 5) {
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", false);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
			}
			else if(valchange == 6) {
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
			}
		});
	});
</script>
