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
    $lbdetail = new label('รายละเอียดเพิ่มเติม');
    $lbproblem = new label('ปัญหา');
    $lbtime = new label('วันที่และเวลาแจ้ง');
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $txtname = new textfield('','','form-control','','');
    $txtyourname = new textfield('','yourname','form-control ','','');
    $txtfamily = new textfield('','family','form-control ','','');
    $txtfather = new textfield('','father','form-control ','','');
    $txtmather = new textfield('','mather','form-control ','','');
    $txtchild = new textfield('','child','form-control ','','');
    $txttime = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $year = date("Y")+543;
    $md = date("m-d");
    $time = date("H:i");
    $id = $_GET['id'];
    $txttime->value = $year."-".$md." ".$time;
    $txtcall = new textfield('problem_tel','','form-control','','');
    $txtposition = new textfield('problem_position','problem_position','form-control','','');
    $txtdetail = new textarea('problem_detail','aprob','','');
    $txtdetail->rows = 5;
    $button = new buttonok("ส่งแบบฟอร์มแจ้งซ่อม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    ?>

  <h4>คำขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</h4>
  <?php
      echo $form->open("","","","hrs_insert_hospital.php","");
      echo $lbname;
      echo $txtname;
      ?>
						<div class="col-md-4">
							<label class="col-md-12">
							  <input type="radio" name="parent" value="1" > ข้าพเจ้า
							  <?php
								  echo $txtyourname;
							  ?>
							</label>
							<label class=" col-md-12">
							  <input type="radio" name="parent" value="2"> คู่สมรส
							  <?php
								  echo $txtfamily;
							  ?>
							</label>
							<label class="col-md-12">
							  <input type="radio" name="parent" value="3"> คู่บิดา
							  <?php
								  echo $txtfather;
							  ?>
							</label>
							<label class="col-md-12">
							  <input type="radio" name="parent" value="4"> คู่มารดา
							  <?php
								  echo $txtmather;
							  ?>
							</label>
							<label class="col-md-12">
							  <input type="radio" name="parent" value="5"> คู่บุตร
							  <?php
								  echo $txtchild;
							  ?>
							</label>
						</div>
						<div class='col-md-4'></div>
      <?
	    echo $form->close();
  ?>
  <script>
  		$(document).ready(function(){
		$('#yourname').hide();
		$('#family').hide();
		$('#father').hide();
		$('#mather').hide();
		$('#child').hide();
		$('input[name=parent]').on("change",function(e) {
		var valchange = $(this).val();
			if(valchange == 1){
				$('#yourname').show("slow");
				$('#family').hide("slow");
				$('#father').hide("slow");
				$('#mather').hide("slow");
				$('#child').hide("slow");
			}
			else if(valchange == 2) {
				$('#family').show("slow");
				$('#yourname').hide("slow");
				$('#father').hide("slow");
				$('#mather').hide("slow");
				$('#child').hide("slow");
			}
			else if(valchange == 3) {
				$('#father').show("slow");
				$('#yourname').hide("slow");
				$('#family').hide("slow");
				$('#mather').hide("slow");
				$('#child').hide("slow");
			}
			else if(valchange == 4) {
				$('#mather').show("slow");
				$('#yourname').hide("slow");
				$('#family').hide("slow");
				$('#father').hide("slow");
				$('#child').hide("slow");
			}
			else if(valchange == 5) {
				$('#child').show("slow");
				$('#yourname').hide("slow");
				$('#family').hide("slow");
				$('#father').hide("slow");
				$('#mather').hide("slow");
			}
		});
	});

  </script>
