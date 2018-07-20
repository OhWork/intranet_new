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