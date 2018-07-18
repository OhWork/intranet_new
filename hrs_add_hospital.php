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
    $txtdatestart = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $id = $_GET['id'];
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
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
							?>
      <?
	    echo $form->close();
  ?>
  <script>
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
				$('#me').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 3) {
				$('#father').attr("disabled", false);
				$('#me').attr("disabled", true);
				$('#family').attr("disabled", true);
				$('#mather').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 4) {
				$('#mather').attr("disabled", false);
				$('#me').attr("disabled", true);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#child').attr("disabled", true);
			}
			else if(valchange == 5) {
				$('#child').attr("disabled", false);
				$('#me').attr("disabled", true);
				$('#family').attr("disabled", true);
				$('#father').attr("disabled", true);
				$('#mather').attr("disabled", true);
			}
		});
	});

  </script>
