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
    $txtdatestarthos = new textfieldcalendarreadonly('hrhos_datestarthos','datetimepicker2','','form-control','input-group-addon','datetimepicker2');
    $txtposition = new textfield('hrctf_position','problem_position','form-control','','');
    $selectdevision = new SelectFromDB();
    $selectdevision->name = 'zoo_zoo_id';
    $selectdevision->lists = 'โปรดระบุ';
    $selectdevision = new SelectFromDB();
    $selectdevision->name = 'zoo_zoo_id';
    $selectdevision->lists = 'โปรดระบุ';
    $txthospital = new textfield('hrhos_hosname','','form-control','','');
    $txtprovince = new textfield('hrnos_province','','form-control','','');
    $txtsalary = new textfield('hrctf_salary','','form-control','','');
    $txtctfname = new textfield('hrctf_ctfname','hrctf_ctfname_id','form-control','','');
    $txtwhoname = new textfield('hrctf_whoname','hrctf_ctfname_id','form-control','','');
    $txtwhofu = new textfield('hrctf_whofu','hrctf_ctfname_id','form-control','','');
    $txteducation = new textfield('hrctf_educationname','hrctf_ctfname_id','form-control','','');
    $txtfamilyname = new textfield('hrctf_familyname','hrctf_familyname_id','form-control','','');
    $button = new buttonok("แก้ไขข้อมูล","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_id',$id)->executeRow();
          $txtname->value = $r['hrctf_name'];
		  $txtposition->value = $r['hrctf_position'];

		  }
    echo $form->open("","","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","hrs_insert_certificate.php","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h4>หนังสือ<?php echo $r['typectf_name']; ?></h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbname; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $txtname; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<?php echo $txtposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					<?php echo $lbdevision; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php echo $selectdevision->selectFromTBinDB('zoo','zoo_id','zoo_name','zoo_per_hrs','1',$r['zoo_zoo_id']); ?>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $button; ?></div>
	</div>
</div>
</div>
<?php echo $form->close();?>
<script>
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
</script>
