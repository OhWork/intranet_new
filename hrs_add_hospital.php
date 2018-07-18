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
    $txtname = new textfield('','me','form-control','','');
    $txtfamily = new textfield('','family','form-control ','','');
    $txtfather = new textfield('','father','form-control ','','');
    $txtmather = new textfield('','mather','form-control ','','');
    $txtchild = new textfield('','child','form-control ','','');
    $txthospital = new textfield('','','form-control','','');
    $txtprovince = new textfield('','','form-control','','');
    $txtdatestart = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('problem_date','datetimepicker2','','form-control','input-group-addon','datetimepicker1');
    //$id = $_GET['id'];
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
<<<<<<< HEAD
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
						<label class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
							<input type="radio" name="parent" id="parent1" value="1"> ข้าพเจ้า
						</label>
						<label class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
							<input type="radio" name="parent" id="parent2" value="2"> คู่สมรส
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtfamily; ?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="parent"  id="parent3" value="3"> คู่บิดา
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtfather;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="parent" id="parent4" value="4"> คู่มารดา
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtmather;?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="parent" id="parent5" value="5"> คู่บุตร
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							<?php echo $txtchild; ?>
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
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
=======
    ?>

  <h4>คำขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</h4>
  <?php
      echo $form->open("","","","hrs_insert_hospital.php","");
      echo $lbname;
      echo $txtname;
      ?>
							<label class="col-md-12">
							  <input type="radio" name="parent" id="parent1" value="1"> ข้าพเจ้า
							</label>
							<label class=" col-md-12">
							  <input type="radio" name="parent" id="parent2" value="2"> คู่สมรส
							  <?php
								  echo $txtfamily;
							  ?>
							</label>
							<label class="col-md-12">
							  <input type="radio" name="parent"  id="parent3" value="3"> คู่บิดา
							  <?php
								  echo $txtfather;
							  ?>
							</label>
							<label class="col-md-12">
							  <input type="radio" name="parent" id="parent4" value="4"> คู่มารดา
							  <?php
								  echo $txtmather;
							  ?>
							</label>
							<label class="col-md-12">
							  <input type="radio" name="parent" id="parent5" value="5"> คู่บุตร
							  <?php
								  echo $txtchild;
							  ?>
							</label>
							<?php
    							echo $lbhospital;
    							echo $txthospital;
    							echo $lbprovince;
    							echo $txtprovince;
    							echo $lbdatestart;
    							echo $txtdatestart;
    							echo $lbdateend;
    							echo $txtdateend;
    							echo $button;

	    echo $form->close();
  ?>
    <script>
>>>>>>> c4552482a5c5af79f42ff0abc3c4eb87a0a3308a
  		$(document).ready(function(){
  		$('#parent1').prop('checked',true);
  		$('#family').attr("disabled", true);
  		$('#father').attr("disabled", true);
		$('#mather').attr("disabled", true);
		$('#child').attr("disabled", true);
		$('input[name=parent]').on("change",function(e) {
		var valchange = $(this).val();
			if(valchange == 1){
				$('#me').attr("disabled", false);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 2) {
				$('#family').attr("disabled", false);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 3) {
				$('#father').attr("disabled", false);
				$('#family').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 4) {
				$('#mather').attr("disabled", false);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 5) {
				$('#child').attr("disabled", false);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
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
