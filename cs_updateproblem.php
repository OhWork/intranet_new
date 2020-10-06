<?php
    if (!empty($_SESSION['user_name'])):
    $zoo = $_SESSION['subzoo_zoo_zoo_id'];
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $form = new form();
    $lbzoo = new label('สำนัก/สวน');
    $lbsubzoo = new label('ฝ่าย');
    $lbname = new label('ชื่อ - สกุล');
    $lbip = new label('หมายเลขไอพี');
    $lbwork = new label('งาน');
    $lbcall = new label('โทรศัพท์');
    $lbcompletedetail = new label('รายละเอียดการซ่อม');
    $lbnocompletedetail = new label('เนื่องจาก');
    $lbdevision = new label('สำนัก/สวน');
    $lbdetail = new label('รายละเอียดเพิ่มเติม');
    $lbtime = new label('วันที่และเวลาแจ้ง');
    $lbtimeend = new label('วันที่และเวลาเสร็จสิ้น');
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $lbsubtypetools = new label('ปัญหาเบื้องต้น');
    $lbdetailbegin = new label('รายละเอียดเบื้องต้น');
    $lbadmin = new label('ผู้ดำเนินการ');
    $lborder = new label('วันและเวลารับเรื่อง');
    $lbserialNo = new label('หมายเลขเครื่อง');
    $lbplace = new label('สถานที่ดำเนินการ');
    $lbserialorganize = new label('รหัสครุภัณฑ์');
    $selectadmin = new SelectFromDB();
    $selectadmin->name = 'problem_adminfix';
    $selectadmin->lists = 'โปรดระบุ';
    $selectadmin2 = new SelectFromDB();
    $selectadmin2->name = 'problem_adminfix';
    $selectadmin2->lists = 'โปรดระบุ';

    $txtnotclear = new textfield('problem_notclear','','form-control css-require','','');
    $txttime = new textfield('problem_dateend','','form-control css-require','','');
    $txtorder = new textfield('problem_dateorder','','form-control css-require','','');
    $txtserialNo = new textfield('problem_serial','','form-control css-require','','');
    $txtplace = new textfield('problem_place','','form-control css-require','','');
    $txtserialorganize = new textfield('problem_serialorganize','','form-control css-require','','');
    $txtcompletedetail = new textarea('problem_detailcomplete','form-control','','','','','');
    $txtcompletedetail->rows = 5;
    $txtnocompletedetail = new textarea('problem_detailwaitcomplete','form-control','','','','','');
    $txtnocompletedetail->rows = 5;
    $button = new buttonok('อัพเดทสถานะการบริการ','','btn btn-success col-12','');
    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK55('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_zoo_zoo_id','zoo.zoo_id','problem_id',$id,'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id')->executeRow();
		 $year = date("Y")+543;
          $md = date("m-d");
		  $time = date("H:i");
		  $selectadmin->value = $r['problem_adminfix'];
		  $selectadmin2->value = $r['problem_adminfix'];
          $txtnocompletedetail->value = $r['problem_detailwaitcomplete'];
		  $txtcompletedetail->value = $r['problem_detailcomplete'];
          $txtserialorganize->value = $r['problem_serialorganize'];
		  $txtserialNo->value = $r['problem_serial'];
		  $txtplace->value = $r['problem_place'];
		  $txtorder->value = $r['problem_dateorder'];
		  }
?>
		<div class="col-12" style="margin-top:16px;">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<div class="row">
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbzoo; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['zoo_name']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbsubzoo; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['subzoo_name']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbname; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['problem_name']; ?></div>
							</div>
						</div>
<?php
		if($r['problem_ip']==''){
?>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbip; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>ยังไม่ลงทะเบียน</div>
							</div>
						</div>
                                                                                                <div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbtime; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['problem_date']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbtypetools; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['typetools_name']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbsubtypetools; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['subtypetools_name']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2" style="border-bottom: solid 1px #000000;">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbdetailbegin; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['problem_detail']; ?></div>
							</div>
						</div>
<?php
		}else{
?>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbip; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['problem_ip']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbtime; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['problem_date']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbtypetools; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['typetools_name']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbsubtypetools; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['subtypetools_name']; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2" style="border-bottom: solid 1px #000000;">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbdetailbegin; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $r['problem_detail']; ?></div>
							</div>
						</div>
<?php
		}
	echo $form->open("form_reg","form","col-12","cs_insert_updateproblem.php","");
?>
						<div class="col-12" style="margin-top:16px;">
							<div class="row">
								<div class="col-3"></div>
								<div class="col-6">
									<div class="row">
										<div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
											<label class="btn btn-success active col-6">
												<input type="radio" name="problem_status" value="Y" onchange="swapConfig(this)" id="complete" autocomplete="off" checked> ดำเนินเสร็จสิ้นแล้ว
											</label>
											<label class="btn btn-warning col-6">
												<input type="radio" name="problem_status" value="S" onchange="swapConfig(this)" id="nocomplete" autocomplete="off"> อยู่ระหว่างการดำเนินการ
											</label>
										</div>
									</div>
								</div>
								<div class="col-3"></div>
							</div>
						</div>
						<div id="completeSettings">
<?php

    $txttime->value = $year."-".$md." ".$time;
?>
						<div class="col-12 mt-3">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbcompletedetail; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtcompletedetail; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbserialNo; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtserialNo; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbserialorganize; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtserialorganize; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbtimeend; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txttime; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbplace; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtplace; ?></div>
							</div>
						</div>
						</div>
						<div id="nocompleteSettings" style="display:none">
<?php
    $txtorder->value = $year."-".$md." ".$time;
?>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbnocompletedetail; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtnocompletedetail; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbserialNo; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtserialNo; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbserialorganize; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtserialorganize; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lborder; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtorder; ?></div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbplace; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $txtplace; ?></div>
							</div>
						</div>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 font-weight-bold text-center'><?php echo $lbadmin; ?></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'><?php echo $selectadmin->selectFromTBinDB2('user','systemallow','user_id','user_name','user_last','systemallow_systemallow_id','systemallow_id','subzoo_zoo_zoo_id',$zoo,'user_enable','1','systemallow_service','1',$r['problem_adminfix']); ?></div>
							</div>
						</div>
<?php
	echo "<input type='hidden' name='log_user' value='$log_user'/>";
    echo "<input type='hidden' name='problem_id' value='$_GET[id]'/>";
?>
						<div class="col-12 mt-2">
							<div class="row">
								<div class="col-4"></div>
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $button; ?></div>
								<div class="col-4"></div>
							</div>
						</div>
<?php
    echo $form->close();
	endif;
?>
					</div>
				</div>
				<div class="col-2"></div>
			</div>
		</div>
<script>
function swapConfig(x) {
    var radioName = document.getElementsByName(x.name);
    for(i = 0 ; i < radioName.length; i++){
      document.getElementById(radioName[i].id.concat("Settings")).style.display="none";
    }
    document.getElementById(x.id.concat("Settings")).style.display="initial";

  }
$(function(){

    var thaiYear = function (ct) {
        var leap=3;
        var dayWeek=["พฤ.", "ศ.", "ส.", "อา.","จ.", "อ.", "พ."];
        if(ct){
            var yearL=new Date(ct).getFullYear()-543;
            leap=(((yearL % 4 == 0) && (yearL % 100 != 0)) || (yearL % 400 == 0))?2:3;
            if(leap==2){
                dayWeek=["ศ.", "ส.", "อา.", "จ.","อ.", "พ.", "พฤ."];
            }
        }
        this.setOptions({
            i18n:{ th:{dayOfWeek:dayWeek}},dayOfWeekStart:leap,
        })
    };

    $("#datetimepicker").datetimepicker({
        timepicker:true,
        format:'Y-m-d HH:mm',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // แสดงภาษาไทย
        onChangeMonth:thaiYear,
        onShow:thaiYear,
        yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
        closeOnTimeSelect:true
    });
    $("#datetimepicker2").datetimepicker({
        timepicker:true,
        format:'Y-m-d HH:mm',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // แสดงภาษาไทย
        onChangeMonth:thaiYear,
        onShow:thaiYear,
        yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
        closeOnTimeSelect:true
    });
});
</script>
