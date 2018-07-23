<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbname= new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สำนัก/สวน');
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
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $lbhospital = new label('รับการรักษาจากสถานพยาบาล');
    $txtname = new textfield('','hrhos_name','form-control','','');
    $txtsubname = new textfield('','hrhos_subname','form-control ','','');
//     $txtfather = new textfield('','father','form-control ','','');
//     $txtmather = new textfield('','mather','form-control ','','');
//     $txtchild = new textfield('','child','form-control ','','');
    $txthospital = new textfield('','hrhos_hosname','form-control','','');
    $txtprovince = new textfield('','hrnos_province','form-control','','');
    $txtdatestart = new textfieldcalendarreadonly('hrhos_datestart','datetimepicker1','','form-control','input-group-addon','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('hrhos_dateend','datetimepicker2','','form-control','input-group-addon','datetimepicker1');
    //$id = $_GET['id'];
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("","","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","hrs_insert_hospital.php","");
	?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;">
	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h4>คำขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbname; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtname; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbposition; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtname; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdevision; ?>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtname; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent1" value="1"> ข้าพเจ้า
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent2" value="2"> คู่สมรส
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent3" value="3"> คู่บิดา
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent4" value="4"> คู่มารดา
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtsubname;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> คู่บุตร
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
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<?php echo $lbdateend; ?>
						</div>
						<div class="date-form dayinbox col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 form-horizontal control-group controls">
                            <div class="input-group">
								<?php echo $txtdateend; ?>
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
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
	</div>
</div>
<?php
	echo $form->close();
?>
  <script>
  		$(document).ready(function(){
  		$('#parent1').prop('checked',true);
  		$('[id=hrhos_subname]').slice(0).prop("disabled", true);
		$('input[name=hrhos_familytype]').on("change",function(e) {
		var valchange = $(this).val();
			if(valchange == 1){
/*
				$('#me').attr("disabled", false);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
*/
			}
			else if(valchange == 2) {
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", false);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);

			}
			else if(valchange == 3) {
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
			}
			else if(valchange == 4) {
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", true);
			}
			else if(valchange == 5) {
				$('[id=hrhos_subname]').slice(3,4).prop("disabled", false);
				$('[id=hrhos_subname]').slice(0,1).prop("disabled", true);
				$('[id=hrhos_subname]').slice(1,2).prop("disabled", true);
				$('[id=hrhos_subname]').slice(2,3).prop("disabled", true);
			}
		});
	});

	$( document ).ready( function () {
		$('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        showClose:true,
	        locale:moment.locale('th')
        }).mouseleave(function (e) {
          $('#datetimepicker1').data("DateTimePicker").hide();
   });
   $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        showClose:true,
	        locale:moment.locale('th')
        }).mouseleave(function (e) {
          $('#datetimepicker2').data("DateTimePicker").hide();
   });
   });

  </script>
