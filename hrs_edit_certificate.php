<?php
    date_default_timezone_set('Asia/Bangkok');
     $id = $_GET['id'];
    $form = new form();
    $lbname = new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbprovince = new label('จังหวัด');
    $lbdatestart = new label('ตั้งแต่วันที่');
    $lbdateend = new label('ถึงวันที่');
    $lbmoneyroom = new label('ค่ารักษาพยาบาลต่อวัน');
    $lbhospital = new label('รับการรักษาจากสถานพยาบาล');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbeducation = new label('ชื่อสถาบันการศึกษา');
    $lbhosfamily = new label('ขอหนังสือรับรองนี้ให้กับ');
    $lbhosname = new label('รับการรักษาจากโรงพยาบาล');
    $lbdatestarthos = new label('วันที่เริ่มเข้ารับการรักษา');
    $lbrecipient = new label('เรียน');
    $lbwhofu = new label('ค้ำประกันการเข้าทำงาน ของ');
    $lbwhoname = new label('ซึ่งเกี่ยวข้องกับข้าพเจ้าโดยเป็น');
    $txtname = new textfield('hrctf_name','problem_work','form-control','','');
    $txtdatestartwork = new textfieldcalendarreadonly('hrctf_datestartwork','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtdatestarthos = new textfieldcalendarreadonly('hrctf_datestarthos','datetimepicker2','','form-control','input-group-addon','datetimepicker2');
    $txtposition = new textfield('hrctf_position','problem_position','form-control','','');
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
    $radiomoneyroom = new radioGroup();
 	$radiomoneyroom->name = 'hrctf_moneyroom';
    $radiofamilytype = new radioGroup();
    $radiofamilytype->name = 'hrctf_typefamily';
    $button = new buttonok("แก้ไขข้อมูล","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_id',$id)->executeRow();
          $txtname->value = $r['hrctf_name'];
		  $txtposition->value = $r['hrctf_position'];
		  $txtprovince->value = $r['hrctf_hosprovince'];
		  $txtdatestartwork->value = $r['hrctf_datestartwork'];
		  $txtdatestarthos->value = $r['hrctf_datestarthos'];
		  $txtwhoname->value = $r['hrctf_whoname'];
		  $txthospital->value = $r['hrctf_hosname'];
		  $txtwhofu->value = $r['hrctf_whofu'];
		  $txteducation->value = $r['hrctf_educationname'];
		  $txtfamilyname->value = $r['hrctf_familyname'];
		  $txtsalary->value = $r['hrctf_salary'];
    if($r["hrctf_moneyroom"] == 800){
    	$radiomoneyroom->add('800',800,'checked');
    	$radiomoneyroom->add('1200',1200,'');
    	}else if($r["hrctf_moneyroom"] == 1200){
        $radiomoneyroom->add('800',800,'');
    	$radiomoneyroom->add('1200',1200,'checked');
        } 
	if($r["hrctf_familytype"] == 1){
    	$radiofamilytype->add('ข้าพเจ้า',1,'checked');
    	$radiofamilytype->add('คู่สมรส',2,'');
    	$radiofamilytype->add('บิดา',3,'');
    	$radiofamilytype->add('มารดา',4,'');
    	$radiofamilytype->add('บุตร',5,'');
    	}else if($r["hrctf_familytype"] == 2){
        $radiofamilytype->add('ข้าพเจ้า',1,'');
    	$radiofamilytype->add('คู่สมรส',2,'checked');
    	$radiofamilytype->add('บิดา',3,'');
    	$radiofamilytype->add('มารดา',4,'');
    	$radiofamilytype->add('บุตร',5,'');
        }else if($r["hrctf_familytype"] == 3){
        $radiofamilytype->add('ข้าพเจ้า',1,'');
    	$radiofamilytype->add('คู่สมรส',2,'');
    	$radiofamilytype->add('บิดา',3,'checked');
    	$radiofamilytype->add('มารดา',4,'');
    	$radiofamilytype->add('บุตร',5,'');
        }else if($r["hrctf_familytype"] == 4){
        $radiofamilytype->add('ข้าพเจ้า',1,'');
    	$radiofamilytype->add('คู่สมรส',2,'');
    	$radiofamilytype->add('บิดา',3,'');
    	$radiofamilytype->add('มารดา',4,'checked');
    	$radiofamilytype->add('บุตร',5,'');
        }else if($r["hrctf_familytype"] == 5){
        $radiofamilytype->add('ข้าพเจ้า',1,'');
    	$radiofamilytype->add('คู่สมรส',2,'');
    	$radiofamilytype->add('บิดา',3,'');
    	$radiofamilytype->add('มารดา',4,'');
    	$radiofamilytype->add('บุตร',5,'checked');
        }
    }
    echo $form->open("","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","hrs_insert_certificate.php","");
 ?>
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:solid 1px #E0E0E0;">
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
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
					
					<?php if($r['typectf_typectf_id'] == 3){
    					    echo $lbeducation;
    					    echo $txteducation;
    					    echo $lbdatework;
        					echo $txtdatestartwork;
        					echo $lbsalary;
        					echo $txtsalary;
    					}else if($r['typectf_typectf_id'] == 5){
        					echo $lbwhofu;
        					echo $txtwhofu;
        					echo $lbwhoname;
        					echo $txtwhoname;
        					echo $lbdatework;
        					echo $txtdatestartwork;
        					echo $lbsalary;
        					echo $txtsalary;
    					}else if($r['typectf_typectf_id'] == 6){
                               echo $lbhospital;
                               echo $txthospital;
                               echo $lbprovince;
                               echo $txtprovince;
                               echo $radiofamilytype;
                               echo $txtdatestarthos;
                               echo $lbmoneyroom;
                               ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    					<?php echo $radiomoneyroom;  ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
    					
    				<?php	
						}else{
        					echo $lbdatework;
        					echo $txtdatestartwork;
        					echo $lbsalary;
        					echo $txtsalary;
    					}
					?>
                    
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class="row">
    					<input type='hidden' name='hrctf_id' value='<?php echo $_GET['id']; ?>'/>
    					<input type='hidden' name='hrctf_status' value='W'/>
    					<input type='hidden' name='hrctf_dateupdate' value='<?php echo date("Y-m-d"); ?>'/>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $button; ?></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
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
/*
   $( document ).ready( function () {
   $('#test').on('change',function(){
    	   	console.log($('#test').val());
   });
   });
*/
</script>
